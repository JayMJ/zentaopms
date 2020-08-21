<?php
class programModel extends model
{
    public function getList($status = 'all', $orderBy = 'id_desc', $pager = NULL)
    {
        return $this->dao->select('*')->from(TABLE_PROJECT)
            ->where('iscat')->eq(0)
            ->andWhere('template')->ne('')
            ->andWhere('program')->eq(0)
            ->andWhere('deleted')->eq(0)
            ->beginIF(!$this->app->user->admin)->andWhere('id')->in($this->app->user->view->programs)->fi()
            ->beginIF($status != 'all')->andWhere('status')->eq($status)->fi()
            ->beginIF($this->cookie->mine)
            ->andWhere('openedBy', true)->eq($this->app->user->account)
            ->orWhere('PM')->eq($this->app->user->account)
            ->markRight(1)
            ->fi()
            ->orderBy($orderBy)
            ->page($pager)
            ->fetchAll('id');
    }

    public function getPairs()
    {
        return $this->dao->select('id, name')->from(TABLE_PROJECT)
            ->where('iscat')->eq(0)
            ->andWhere('program')->eq(0)
            ->andWhere('deleted')->eq(0)
            ->beginIF(!$this->app->user->admin)->andWhere('id')->in($this->app->user->view->programs)->fi()
            ->fetchPairs();
    }

    public function getPairsByTemplate($template)
    {
        return $this->dao->select('id, name')->from(TABLE_PROJECT)
            ->where('iscat')->eq(0)
            ->andWhere('template')->eq($template)
            ->andWhere('program')->eq(0)
            ->andWhere('deleted')->eq(0)
            ->beginIF(!$this->app->user->admin)->andWhere('id')->in($this->app->user->view->programs)->fi()
            ->fetchPairs();
    }

    public function getUserPrograms($status = 'all', $orderBy = 'id_desc', $limit = 15)
    {
        return $this->dao->select('*')->from(TABLE_PROJECT)
            ->where('iscat')->eq(0)
            ->andWhere('template')->ne('')
            ->andWhere('program')->eq(0)
            ->andWhere('deleted')->eq(0)
            ->beginIF(!$this->app->user->admin)->andWhere('id')->in($this->app->user->view->programs)->fi()
            ->beginIF($status != 'all')->andWhere('status')->eq($status)->fi()
            ->orderBy($orderBy)
            ->limit($limit)
            ->fetchAll('id');
    }

    /**
     * Show accessDenied response.
     *
     * @access private
     * @return void
     */
    public function accessDenied()
    {
        echo(js::alert($this->lang->program->accessDenied));

        if(!$this->server->http_referer) die(js::locate(helper::createLink('program', 'browse')));

        $loginLink = $this->config->requestType == 'GET' ? "?{$this->config->moduleVar}=user&{$this->config->methodVar}=login" : "user{$this->config->requestFix}login";
        if(strpos($this->server->http_referer, $loginLink) !== false) die(js::locate(helper::createLink('program', 'browse')));

        die(js::locate('back'));
    }

    public function create()
    {
        $this->lang->project->team = $this->lang->project->teamname;
        $project = fixer::input('post')
            ->setDefault('status', 'wait')
            ->add('type', 'program')
            ->setIF($this->post->acl != 'custom', 'whitelist', '')
            ->setDefault('openedBy', $this->app->user->account)
            ->setDefault('openedDate', helper::now())
            ->setDefault('team', substr($this->post->name,0, 30))
            ->join('whitelist', ',')
            ->cleanInt('budget')
            ->stripTags($this->config->project->editor->create['id'], $this->config->allowedTags)
            ->remove('products, workDays, delta, branch, uid, plans')
            ->get();

        $project = $this->loadModel('file')->processImgURL($project, $this->config->project->editor->create['id'], $this->post->uid);
        $this->dao->insert(TABLE_PROJECT)->data($project)
            ->autoCheck()
            ->batchcheck($this->config->project->create->requiredFields, 'notempty')
            ->check('name', 'unique', "deleted='0'")
            ->check('code', 'unique', "deleted='0'")
            ->exec();

        /* Add the creater to the team. */
        if(!dao::isError())
        {
            $programID = $this->dao->lastInsertId();
            $today     = helper::today();
            if($project->acl != 'open') $this->loadModel('user')->updateUserView($programID, 'program');

            /* Save order. */
            $this->dao->update(TABLE_PROJECT)->set('`order`')->eq($programID * 5)->where('id')->eq($programID)->exec();
            $this->file->updateObjectID($this->post->uid, $programID, 'project');

            if($project->parent > 0) $this->dao->update(TABLE_PROJECT)->set('isCat')->eq(1)->where('id')->eq($project->parent)->exec();
            $this->setTreePath($programID);

            /* Add program admin.*/
            $groupPriv = $this->dao->select('t1.*')->from(TABLE_USERGROUP)->alias('t1')
                ->leftJoin(TABLE_GROUP)->alias('t2')->on('t1.group = t2.id')
                ->where('t1.account')->eq($this->app->user->account)
                ->andWhere('t2.role')->eq('pgmadmin')
                ->fetch();
            if(!empty($groupPriv))
            {
                $newProgram = $groupPriv->program . ",$programID";
                $this->dao->update(TABLE_USERGROUP)->set('program')->eq($newProgram)->where('account')->eq($groupPriv->account)->andWhere('`group`')->eq($groupPriv->group)->exec();
            }
            else
            {
                $pgmAdminID = $this->dao->select('id')->from(TABLE_GROUP)->where('role')->eq('pgmadmin')->fetch('id');
                $groupPriv  = new stdclass(); 
                $groupPriv->account = $this->app->user->account;
                $groupPriv->group   = $pgmAdminID;
                $groupPriv->program = $programID;
                $this->dao->insert(TABLE_USERGROUP)->data($groupPriv)->exec();
            }

            if($project->template == 'cmmi')
            {
                $product = new stdclass();
                $product->name        = $project->name;
                $product->program     = $programID;
                $product->status      = 'normal';
                $product->createdBy   = $this->app->user->account;
                $product->createdDate = helper::now();

                $this->dao->insert(TABLE_PRODUCT)->data($product)->exec();

                $productID = $this->dao->lastInsertId();
                $this->dao->update(TABLE_PRODUCT)->set('`order`')->eq($productID * 5)->where('id')->eq($productID)->exec();

                $data = new stdclass();
                $data->project = $programID;
                $data->product = $productID;
                $this->dao->insert(TABLE_PROJECTPRODUCT)->data($data)->exec();
            }

            return $programID;
        }
    }

    public function getSwapper($programs, $programID, $currentModule, $currentMethod, $extra = '')
    {    
        $this->loadModel('project');
        $currentProgramName = '';
        if($programID)
        {    
            setCookie("lastProgram", $programID, $this->config->cookieLife, $this->config->webRoot, '', false, true);
            $currentProgram     = $this->project->getById($programID);
            $currentProgramName = $currentProgram->name;
        }    
        if($currentModule == 'program' && $currentMethod == 'browse') $currentProgramName = $this->lang->program->all;

        $dropMenuLink = helper::createLink('program', 'ajaxGetDropMenu', "objectID=$programID&module=$currentModule&method=$currentMethod&extra=$extra");
        $output  = "<div class='btn-group' id='swapper'><button data-toggle='dropdown' type='button' class='btn btn-limit' id='currentItem' title='{$currentProgramName}'>{$currentProgramName} <i class='icon icon-swap'></i></button><div id='dropMenu' class='dropdown-menu search-list' data-ride='searchList' data-url='$dropMenuLink'>";
        $output .= '<div class="input-control search-box has-icon-left has-icon-right search-example"><input type="search" class="form-control search-input" /><label class="input-control-icon-left search-icon"><i class="icon icon-search"></i></label><a class="input-control-icon-right search-clear-btn"><i class="icon icon-close icon-sm"></i></a></div>';    
        $output .= "</div></div>";
        //if($isMobile) $output  = "<a id='currentItem' href=\"javascript:showSearchMenu('project', '$projectID', '$currentModule', '$currentMethod', '$extra')\">{$currentProjectName} <span class='icon-caret-down'></span></a><div id='currentItemDropMenu' class='hidden affix enter-from-bottom layer'></div>";

        return $output;
    }

    public static function isClickable($project, $action)
    {
        $action = strtolower($action);

        if($action == 'start')    return $project->status == 'wait' or $project->status == 'suspended';
        if($action == 'finish')   return $project->status == 'wait' or $project->status == 'doing';
        if($action == 'close')    return $project->status != 'closed';
        if($action == 'suspend')  return $project->status == 'wait' or $project->status == 'doing';
        if($action == 'activate') return $project->status == 'done';

        return true;
    }

    public function getProducts($program)
    {
        return $this->dao->select('*')->from(TABLE_PRODUCT)->where('project')->eq($program)->fetchAll('id');
    }

    public function checkHasContent($programID)
    {
        $count  = 0;
        $count += $this->dao->select('count(*) as count')->from(TABLE_BUDGET)->where('program')->eq($programID)->fetch('count');
        $count += $this->dao->select('count(*) as count')->from(TABLE_BUG)->where('program')->eq($programID)->fetch('count');
        $count += $this->dao->select('count(*) as count')->from(TABLE_CASE)->where('program')->eq($programID)->fetch('count');
        $count += $this->dao->select('count(*) as count')->from(TABLE_DESIGN)->where('program')->eq($programID)->fetch('count');
        $count += $this->dao->select('count(*) as count')->from(TABLE_DOC)->where('program')->eq($programID)->fetch('count');
        $count += $this->dao->select('count(*) as count')->from(TABLE_DURATIONESTIMATION)->where('program')->eq($programID)->fetch('count');
        $count += $this->dao->select('count(*) as count')->from(TABLE_ISSUE)->where('program')->eq($programID)->fetch('count');
        $count += $this->dao->select('count(*) as count')->from(TABLE_PROJECT)->where('program')->eq($programID)->fetch('count');
        $count += $this->dao->select('count(*) as count')->from(TABLE_RELATION)->where('program')->eq($programID)->fetch('count');
        $count += $this->dao->select('count(*) as count')->from(TABLE_RELEASE)->where('program')->eq($programID)->fetch('count');
        $count += $this->dao->select('count(*) as count')->from(TABLE_REPO)->where('program')->eq($programID)->fetch('count');
        $count += $this->dao->select('count(*) as count')->from(TABLE_RISK)->where('program')->eq($programID)->fetch('count');
        $count += $this->dao->select('count(*) as count')->from(TABLE_STORY)->where('program')->eq($programID)->fetch('count');
        $count += $this->dao->select('count(*) as count')->from(TABLE_TESTREPORT)->where('program')->eq($programID)->fetch('count');
        $count += $this->dao->select('count(*) as count')->from(TABLE_TESTSUITE)->where('program')->eq($programID)->fetch('count');
        $count += $this->dao->select('count(*) as count')->from(TABLE_TESTTASK)->where('program')->eq($programID)->fetch('count');
        $count += $this->dao->select('count(*) as count')->from(TABLE_WORKESTIMATION)->where('program')->eq($programID)->fetch('count');

        return $count > 0;
    }

    public function setTreePath($programID)
    {
        $program = $this->dao->select('*')->from(TABLE_PROJECT)->where('id')->eq($programID)->fetch();

        $path['path']  = ",{$program->id},";
        $path['grade'] = 1;

        if($program->parent)
        {
            $parent = $this->dao->select('*')->from(TABLE_PROJECT)->where('id')->eq($program->parent)->fetch();

            $path['path']  = $parent->path . "{$program->id},";
            $path['grade'] = $parent->grade + 1;
        }
        $this->dao->update(TABLE_PROJECT)->set('path')->eq($path['path'])->set('grade')->eq($path['grade'])->where('id')->eq($program->id)->exec();
    }
}
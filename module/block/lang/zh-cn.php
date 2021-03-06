<?php
/**
 * The zh-cn file of crm block module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Yidong Wang <yidong@cnezsoft.com>
 * @package     block
 * @version     $Id$
 * @link        http://www.zentao.net
 */
$lang->block = new stdclass();
$lang->block->common = '区块';
$lang->block->name   = '区块名称';
$lang->block->style  = '外观';
$lang->block->grid   = '位置';
$lang->block->color  = '颜色';
$lang->block->reset  = '恢复默认';

$lang->block->account = '所属用户';
$lang->block->module  = '所属模块';
$lang->block->title   = '区块名称';
$lang->block->source  = '来源模块';
$lang->block->block   = '来源区块';
$lang->block->order   = '排序';
$lang->block->height  = '高度';
$lang->block->role    = '角色';

$lang->block->lblModule    = '模块';
$lang->block->lblBlock     = '区块';
$lang->block->lblNum       = '条数';
$lang->block->lblHtml      = 'HTML内容';
$lang->block->dynamic      = '最新动态';
$lang->block->assignToMe   = '指派给我';
$lang->block->done         = '已完成';
$lang->block->lblFlowchart = '流程图';
$lang->block->welcome      = '欢迎总览';
$lang->block->lblTesttask  = '查看测试详情';
$lang->block->contribute   = '个人贡献';

$lang->block->leftToday       = '今天剩余工作总计';
$lang->block->myTask          = '我的任务';
$lang->block->myStory         = "我的{$lang->storyCommon}";
$lang->block->myBug           = '我的BUG';
$lang->block->myProject       = '未关闭的' . $lang->projectCommon;
$lang->block->myProduct       = '未关闭的' . $lang->productCommon;
$lang->block->delayed         = '已延期';
$lang->block->noData          = '当前统计类型下暂无数据';
$lang->block->emptyTip        = '暂无信息';
$lang->block->openedTodos     = '创建的待办数';
$lang->block->openedStories   = '创建的需求数';
$lang->block->resolvedTasks   = '完成的任务数';
$lang->block->resolvedBugs    = '解决Bug数';
$lang->block->openedTestcases = '创建用例数';
$lang->block->cmmi            = 'CMMI 3';
$lang->block->scrum           = 'Scrum+';
$lang->block->allProject      = '所有' . $lang->projectCommon;
$lang->block->doingProject    = '进行中的' . $lang->projectCommon;
$lang->block->finishProject   = '累积' . $lang->projectCommon;
$lang->block->estimatedHours  = '预计工时';
$lang->block->consumedHours   = '已消耗';
$lang->block->time            = '第';
$lang->block->week            = '周';
$lang->block->month           = '月';

$lang->block->params = new stdclass();
$lang->block->params->name  = '参数名称';
$lang->block->params->value = '参数值';

$lang->block->createBlock        = '添加区块';
$lang->block->editBlock          = '编辑区块';
$lang->block->ordersSaved        = '排序已保存';
$lang->block->confirmRemoveBlock = '确定隐藏区块吗？';
$lang->block->noticeNewBlock     = '10.0版本以后各个视图主页提供了全新的视图，您要启用新的视图布局吗？';
$lang->block->confirmReset       = '是否恢复默认布局？';
$lang->block->closeForever       = '永久关闭';
$lang->block->confirmClose       = '确定永久关闭该区块吗？关闭后所有人都将无法使用该区块，可以在后台自定义中打开。';
$lang->block->remove             = '移除';
$lang->block->refresh            = '刷新';
$lang->block->nbsp               = '';  
$lang->block->hidden             = '隐藏';
$lang->block->dynamicInfo        = "<span class='timeline-tag'>%s</span> <span class='timeline-text'>%s <em>%s</em> %s <a href='%s' title='%s'>%s</a></span>";

$lang->block->productName        = $lang->productCommon . '名称';
$lang->block->totalStory         = '总' . $lang->storyCommon;
$lang->block->totalBug           = '总Bug';
$lang->block->totalRelease       = '发布次数';

$lang->block->totalInvestment    = '总投入';
$lang->block->totalPeople        = '总人数';
$lang->block->spent              = '已花费';
$lang->block->budget             = '预算';
$lang->block->left               = '剩余';


$lang->block->default['cmmi']['program']['1']['title']  = '项目周报';
$lang->block->default['cmmi']['program']['1']['block']  = 'cmmireport';
$lang->block->default['cmmi']['program']['1']['source'] = 'program';
$lang->block->default['cmmi']['program']['1']['grid']   = 8;

$lang->block->default['cmmi']['program']['2']['title']  = '估算';
$lang->block->default['cmmi']['program']['2']['block']  = 'cmmiestimate';
$lang->block->default['cmmi']['program']['2']['source'] = 'program';
$lang->block->default['cmmi']['program']['2']['grid']   = 4;

$lang->block->default['cmmi']['program']['3']['title']  = '计划甘特图';
$lang->block->default['cmmi']['program']['3']['block']  = 'cmmigantt';
$lang->block->default['cmmi']['program']['3']['source'] = 'program';
$lang->block->default['cmmi']['program']['3']['grid']   = 8;

$lang->block->default['cmmi']['program']['4']['title']  = '到目前为止项目进展趋势图';
$lang->block->default['cmmi']['program']['4']['block']  = 'cmmiprogress';
$lang->block->default['cmmi']['program']['4']['grid']   = 4;

$lang->block->default['cmmi']['program']['5']['title']  = '项目问题';
$lang->block->default['cmmi']['program']['5']['block']  = 'cmmiissue';
$lang->block->default['cmmi']['program']['5']['source'] = 'program';
$lang->block->default['cmmi']['program']['5']['grid']   = 8;

$lang->block->default['cmmi']['program']['5']['params']['type']    = 'all';
$lang->block->default['cmmi']['program']['5']['params']['num']     = '15';
$lang->block->default['cmmi']['program']['5']['params']['orderBy'] = 'id_desc';

$lang->block->default['cmmi']['program']['6']['title']  = '最新动态';
$lang->block->default['cmmi']['program']['6']['block']  = 'scrumdynamic';
$lang->block->default['cmmi']['program']['6']['grid']   = 4;
$lang->block->default['cmmi']['program']['6']['source'] = 'program';

$lang->block->default['cmmi']['program']['7']['title']  = '项目风险';
$lang->block->default['cmmi']['program']['7']['block']  = 'cmmirisk';
$lang->block->default['cmmi']['program']['7']['source'] = 'program';
$lang->block->default['cmmi']['program']['7']['grid']   = 8;

$lang->block->default['cmmi']['program']['7']['params']['type']    = 'all';
$lang->block->default['cmmi']['program']['7']['params']['num']     = '15';
$lang->block->default['cmmi']['program']['7']['params']['orderBy'] = 'id_desc';

$lang->block->default['scrum']['program']['1']['title'] =  '项目整体情况';
$lang->block->default['scrum']['program']['1']['block'] = 'scrumoverall';
$lang->block->default['scrum']['program']['1']['grid']  = 8;

$lang->block->default['scrum']['program']['2']['title'] = $lang->projectCommon . '列表';
$lang->block->default['scrum']['program']['2']['block'] = 'scrumlist';
$lang->block->default['scrum']['program']['2']['grid']  = 8;

$lang->block->default['scrum']['program']['3']['title'] = $lang->productCommon . '路线图';
$lang->block->default['scrum']['program']['3']['block'] = 'scrumroadmap';
$lang->block->default['scrum']['program']['3']['grid']  = 8;

$lang->block->default['scrum']['program']['4']['title'] = '待测版本';
$lang->block->default['scrum']['program']['4']['block'] = 'scrumtest';
$lang->block->default['scrum']['program']['4']['grid']  = 8;

$lang->block->default['scrum']['program']['4']['params']['type']    = 'all';
$lang->block->default['scrum']['program']['4']['params']['num']     = '15';
$lang->block->default['scrum']['program']['4']['params']['orderBy'] = 'id_desc';

$lang->block->default['scrum']['program']['5']['title'] = $lang->productCommon . '总览';
$lang->block->default['scrum']['program']['5']['block'] = 'scrumproduct';
$lang->block->default['scrum']['program']['5']['grid']  = 4;

$lang->block->default['scrum']['program']['6']['title'] = $lang->projectCommon . '总览';
$lang->block->default['scrum']['program']['6']['block'] = 'scrumproject';
$lang->block->default['scrum']['program']['6']['grid']  = 4;

$lang->block->default['scrum']['program']['7']['title'] = '最新动态';
$lang->block->default['scrum']['program']['7']['block'] = 'scrumdynamic';
$lang->block->default['scrum']['program']['7']['grid']  = 4;

$lang->block->default['product']['1']['title'] = $lang->productCommon . '统计';
$lang->block->default['product']['1']['block'] = 'statistic';
$lang->block->default['product']['1']['grid']  = 8;

$lang->block->default['product']['1']['params']['type'] = 'all';
$lang->block->default['product']['1']['params']['num']  = '20';

$lang->block->default['product']['2']['title'] = $lang->productCommon . '总览';
$lang->block->default['product']['2']['block'] = 'overview';
$lang->block->default['product']['2']['grid']  = 4;

$lang->block->default['product']['3']['title'] = '未关闭的' . $lang->productCommon;
$lang->block->default['product']['3']['block'] = 'list';
$lang->block->default['product']['3']['grid']  = 8;

$lang->block->default['product']['3']['params']['num']  = 15;
$lang->block->default['product']['3']['params']['type'] = 'noclosed';

$lang->block->default['product']['4']['title'] = "指派给我的{$lang->storyCommon}";
$lang->block->default['product']['4']['block'] = 'story';
$lang->block->default['product']['4']['grid']  = 4;

$lang->block->default['product']['4']['params']['num']     = 15;
$lang->block->default['product']['4']['params']['orderBy'] = 'id_desc';
$lang->block->default['product']['4']['params']['type']    = 'assignedTo';

$lang->block->default['project']['1']['title'] = $lang->projectCommon . '统计';
$lang->block->default['project']['1']['block'] = 'statistic';
$lang->block->default['project']['1']['grid']  = 8;

$lang->block->default['project']['1']['params']['type'] = 'all';
$lang->block->default['project']['1']['params']['num']  = '20';

$lang->block->default['project']['2']['title'] = $lang->projectCommon . '总览';
$lang->block->default['project']['2']['block'] = 'overview';
$lang->block->default['project']['2']['grid']  = 4;

$lang->block->default['project']['3']['title'] = '未关闭的' . $lang->projectCommon;
$lang->block->default['project']['3']['block'] = 'list';
$lang->block->default['project']['3']['grid']  = 8;

$lang->block->default['project']['3']['params']['num']     = 15;
$lang->block->default['project']['3']['params']['orderBy'] = 'id_desc';
$lang->block->default['project']['3']['params']['type']    = 'undone';

$lang->block->default['project']['4']['title'] = '指派给我的任务';
$lang->block->default['project']['4']['block'] = 'task';
$lang->block->default['project']['4']['grid']  = 4;

$lang->block->default['project']['4']['params']['num']     = 15;
$lang->block->default['project']['4']['params']['orderBy'] = 'id_desc';
$lang->block->default['project']['4']['params']['type']    = 'assignedTo';

$lang->block->default['qa']['1']['title'] = '测试统计';
$lang->block->default['qa']['1']['block'] = 'statistic';
$lang->block->default['qa']['1']['grid']  = 8;

$lang->block->default['qa']['1']['params']['type'] = 'noclosed';
$lang->block->default['qa']['1']['params']['num']  = '20';

//$lang->block->default['qa']['2']['title'] = '测试用例总览';
//$lang->block->default['qa']['2']['block'] = 'overview';
//$lang->block->default['qa']['2']['grid']  = 4;

$lang->block->default['qa']['2']['title'] = '指派给我的Bug';
$lang->block->default['qa']['2']['block'] = 'bug';
$lang->block->default['qa']['2']['grid']  = 4;

$lang->block->default['qa']['2']['params']['num']     = 15;
$lang->block->default['qa']['2']['params']['orderBy'] = 'id_desc';
$lang->block->default['qa']['2']['params']['type']    = 'assignedTo';

$lang->block->default['qa']['3']['title'] = '指派给我的用例';
$lang->block->default['qa']['3']['block'] = 'case';
$lang->block->default['qa']['3']['grid']  = 4;

$lang->block->default['qa']['3']['params']['num']     = 15;
$lang->block->default['qa']['3']['params']['orderBy'] = 'id_desc';
$lang->block->default['qa']['3']['params']['type']    = 'assigntome';

$lang->block->default['qa']['4']['title'] = '待测版本列表';
$lang->block->default['qa']['4']['block'] = 'testtask';
$lang->block->default['qa']['4']['grid']  = 8;

$lang->block->default['qa']['4']['params']['num']     = 15;
$lang->block->default['qa']['4']['params']['orderBy'] = 'id_desc';
$lang->block->default['qa']['4']['params']['type']    = 'wait';

$lang->block->default['full']['my']['1']['title']  = '欢迎';
$lang->block->default['full']['my']['1']['block']  = 'welcome';
$lang->block->default['full']['my']['1']['grid']   = 8;
$lang->block->default['full']['my']['1']['source'] = '';

$lang->block->default['full']['my']['2']['title']  = '最新动态';
$lang->block->default['full']['my']['2']['block']  = 'dynamic';
$lang->block->default['full']['my']['2']['grid']   = 4;
$lang->block->default['full']['my']['2']['source'] = '';

$lang->block->default['full']['my']['3']['title']  = '我的待办';
$lang->block->default['full']['my']['3']['block']  = 'list';
$lang->block->default['full']['my']['3']['grid']   = 4;
$lang->block->default['full']['my']['3']['source'] = 'todo';
$lang->block->default['full']['my']['3']['params']['num'] = '20';

$lang->block->default['full']['my']['4']['title']  = '项目统计';
$lang->block->default['full']['my']['4']['block']  = 'statistic';
$lang->block->default['full']['my']['4']['source'] = 'program';
$lang->block->default['full']['my']['4']['grid']   = 8;

$lang->block->default['full']['my']['5']['title']  = '个人贡献';
$lang->block->default['full']['my']['5']['block']  = 'contribute';
$lang->block->default['full']['my']['5']['source'] = '';
$lang->block->default['full']['my']['5']['grid']   = 4;

$lang->block->default['full']['my']['6']['title']  = '我的近期项目';
$lang->block->default['full']['my']['6']['block']  = 'recentprogram';
$lang->block->default['full']['my']['6']['source'] = 'program';
$lang->block->default['full']['my']['6']['grid']   = 8;

$lang->block->default['full']['my']['7']['title']  = '指派给我';
$lang->block->default['full']['my']['7']['block']  = 'task';
$lang->block->default['full']['my']['7']['grid']   = 4;

$lang->block->default['full']['my']['7']['params']['orderBy'] = 'id_desc';
$lang->block->default['full']['my']['7']['params']['num']     = '15';
$lang->block->default['full']['my']['7']['params']['type']    = 'assignedTo';

$lang->block->default['full']['my']['8']['title'] = '项目人力投入';
$lang->block->default['full']['my']['8']['block'] = 'programteam';
$lang->block->default['full']['my']['8']['grid']  = 8;

$lang->block->default['full']['my']['9']['title']  = '项目列表';
$lang->block->default['full']['my']['9']['block']  = 'program';
$lang->block->default['full']['my']['9']['source'] = 'program';
$lang->block->default['full']['my']['9']['grid']   = 8;

$lang->block->default['full']['my']['9']['params']['orderBy'] = 'id_desc';
$lang->block->default['full']['my']['9']['params']['num']     = '15';

$lang->block->num     = '数量';
$lang->block->type    = '类型';
$lang->block->orderBy = '排序';

$lang->block->availableBlocks = new stdclass();

$lang->block->availableBlocks->todo     = '我的待办';
$lang->block->availableBlocks->task     = '我的任务';
$lang->block->availableBlocks->bug      = '我的Bug';
$lang->block->availableBlocks->case     = '我的用例';
$lang->block->availableBlocks->story    = "我的{$lang->storyCommon}";
$lang->block->availableBlocks->product  = $lang->productCommon . '列表';
$lang->block->availableBlocks->project  = $lang->projectCommon . '列表';
$lang->block->availableBlocks->plan     = '计划列表';
$lang->block->availableBlocks->release  = '发布列表';
$lang->block->availableBlocks->build    = '版本列表';
$lang->block->availableBlocks->testtask = '测试版本列表';
$lang->block->availableBlocks->risk     = '我的风险';

$lang->block->moduleList['program'] = '项目';
$lang->block->moduleList['product'] = $lang->productCommon;
$lang->block->moduleList['project'] = $lang->projectCommon;
$lang->block->moduleList['qa']      = '测试';
$lang->block->moduleList['todo']    = '待办';

$lang->block->modules['program'] = new stdclass();
$lang->block->modules['program']->availableBlocks = new stdclass();
$lang->block->modules['program']->availableBlocks->program       = '项目列表';
$lang->block->modules['program']->availableBlocks->recentprogram = '近期项目';
$lang->block->modules['program']->availableBlocks->statistic     = '项目统计';

$lang->block->modules['scrum']['index'] = new stdclass();
$lang->block->modules['scrum']['index']->availableBlocks = new stdclass();
$lang->block->modules['scrum']['index']->availableBlocks->scrumoverall  = '项目整体情况';
$lang->block->modules['scrum']['index']->availableBlocks->scrumlist     = $lang->projectCommon . '列表';
$lang->block->modules['scrum']['index']->availableBlocks->scrumproject  = $lang->projectCommon . '总览';
$lang->block->modules['scrum']['index']->availableBlocks->scrumproduct  = $lang->productCommon . '总览';
$lang->block->modules['scrum']['index']->availableBlocks->scrumtest     = '待测版本';

$lang->block->modules['cmmi']['index'] = new stdclass();
$lang->block->modules['cmmi']['index']->availableBlocks = new stdclass();
$lang->block->modules['cmmi']['index']->availableBlocks->cmmireport    = '项目周报';
$lang->block->modules['cmmi']['index']->availableBlocks->cmmiestimate  = '估算';
$lang->block->modules['cmmi']['index']->availableBlocks->cmmigantt     = '计划甘特图';
$lang->block->modules['cmmi']['index']->availableBlocks->cmmiprogress  = '到目前为止项目进展趋势图';
$lang->block->modules['cmmi']['index']->availableBlocks->cmmiissue     = '项目问题';
$lang->block->modules['cmmi']['index']->availableBlocks->cmmirisk      = '项目风险';

$lang->block->modules['product'] = new stdclass();
$lang->block->modules['product']->availableBlocks = new stdclass();
$lang->block->modules['product']->availableBlocks->statistic = $lang->productCommon . '统计';
$lang->block->modules['product']->availableBlocks->overview  = $lang->productCommon . '总览';
$lang->block->modules['product']->availableBlocks->list      = $lang->productCommon . '列表';
$lang->block->modules['product']->availableBlocks->story     = "{$lang->storyCommon}列表";
$lang->block->modules['product']->availableBlocks->plan      = '计划列表';
$lang->block->modules['product']->availableBlocks->release   = '发布列表';
$lang->block->modules['project'] = new stdclass();
$lang->block->modules['project']->availableBlocks = new stdclass();
$lang->block->modules['project']->availableBlocks->statistic = $lang->projectCommon . '统计';
$lang->block->modules['project']->availableBlocks->overview  = $lang->projectCommon . '总览';
$lang->block->modules['project']->availableBlocks->list      = $lang->projectCommon . '列表';
$lang->block->modules['project']->availableBlocks->task      = '任务列表';
$lang->block->modules['project']->availableBlocks->build     = '版本列表';
$lang->block->modules['qa'] = new stdclass();
$lang->block->modules['qa']->availableBlocks = new stdclass();
$lang->block->modules['qa']->availableBlocks->statistic = '测试统计';
//$lang->block->modules['qa']->availableBlocks->overview  = '测试用例总览';
$lang->block->modules['qa']->availableBlocks->bug       = 'Bug列表';
$lang->block->modules['qa']->availableBlocks->case      = '用例列表';
$lang->block->modules['qa']->availableBlocks->testtask  = '版本列表';
$lang->block->modules['todo'] = new stdclass();
$lang->block->modules['todo']->availableBlocks = new stdclass();
$lang->block->modules['todo']->availableBlocks->list = '待办列表';

$lang->block->orderByList = new stdclass();

$lang->block->orderByList->product = array();
$lang->block->orderByList->product['id_asc']      = 'ID 递增';
$lang->block->orderByList->product['id_desc']     = 'ID 递减';
$lang->block->orderByList->product['status_asc']  = '状态正序';
$lang->block->orderByList->product['status_desc'] = '状态倒序';

$lang->block->orderByList->project = array();
$lang->block->orderByList->project['id_asc']      = 'ID 递增';
$lang->block->orderByList->project['id_desc']     = 'ID 递减';
$lang->block->orderByList->project['status_asc']  = '状态正序';
$lang->block->orderByList->project['status_desc'] = '状态倒序';

$lang->block->orderByList->task = array();
$lang->block->orderByList->task['id_asc']        = 'ID 递增';
$lang->block->orderByList->task['id_desc']       = 'ID 递减';
$lang->block->orderByList->task['pri_asc']       = '优先级递增';
$lang->block->orderByList->task['pri_desc']      = '优先级递减';
$lang->block->orderByList->task['estimate_asc']  = '预计时间递增';
$lang->block->orderByList->task['estimate_desc'] = '预计时间递减';
$lang->block->orderByList->task['status_asc']    = '状态正序';
$lang->block->orderByList->task['status_desc']   = '状态倒序';
$lang->block->orderByList->task['deadline_asc']  = '截止日期递增';
$lang->block->orderByList->task['deadline_desc'] = '截止日期递减';

$lang->block->orderByList->bug = array();
$lang->block->orderByList->bug['id_asc']        = 'ID 递增';
$lang->block->orderByList->bug['id_desc']       = 'ID 递减';
$lang->block->orderByList->bug['pri_asc']       = '优先级递增';
$lang->block->orderByList->bug['pri_desc']      = '优先级递减';
$lang->block->orderByList->bug['severity_asc']  = '级别递增';
$lang->block->orderByList->bug['severity_desc'] = '级别递减';

$lang->block->orderByList->case = array();
$lang->block->orderByList->case['id_asc']   = 'ID 递增';
$lang->block->orderByList->case['id_desc']  = 'ID 递减';
$lang->block->orderByList->case['pri_asc']  = '优先级递增';
$lang->block->orderByList->case['pri_desc'] = '优先级递减';

$lang->block->orderByList->story = array();
$lang->block->orderByList->story['id_asc']      = 'ID 递增';
$lang->block->orderByList->story['id_desc']     = 'ID 递减';
$lang->block->orderByList->story['pri_asc']     = '优先级递增';
$lang->block->orderByList->story['pri_desc']    = '优先级递减';
$lang->block->orderByList->story['status_asc']  = '状态正序';
$lang->block->orderByList->story['status_desc'] = '状态倒序';
$lang->block->orderByList->story['stage_asc']   = '阶段正序';
$lang->block->orderByList->story['stage_desc']  = '阶段倒序';

$lang->block->todoNum = '待办数';
$lang->block->taskNum = '任务数';
$lang->block->bugNum  = 'Bug数';
$lang->block->riskNum = '风险数';

$lang->block->typeList = new stdclass();

$lang->block->typeList->task['assignedTo'] = '指派给我';
$lang->block->typeList->task['openedBy']   = '由我创建';
$lang->block->typeList->task['finishedBy'] = '由我完成';
$lang->block->typeList->task['closedBy']   = '由我关闭';
$lang->block->typeList->task['canceledBy'] = '由我取消';

$lang->block->typeList->bug['assignedTo'] = '指派给我';
$lang->block->typeList->bug['openedBy']   = '由我创建';
$lang->block->typeList->bug['resolvedBy'] = '由我解决';
$lang->block->typeList->bug['closedBy']   = '由我关闭';

$lang->block->typeList->case['assigntome'] = '指派给我';
$lang->block->typeList->case['openedbyme'] = '由我创建';

$lang->block->typeList->story['assignedTo'] = '指派给我';
$lang->block->typeList->story['openedBy']   = '由我创建';
$lang->block->typeList->story['reviewedBy'] = '由我评审';
$lang->block->typeList->story['closedBy']   = '由我关闭';

$lang->block->typeList->product['noclosed'] = '未关闭';
$lang->block->typeList->product['closed']   = '已关闭';
$lang->block->typeList->product['all']      = '全部';
$lang->block->typeList->product['involved'] = '我参与的';

$lang->block->typeList->project['undone']   = '未完成';
$lang->block->typeList->project['doing']    = '进行中';
$lang->block->typeList->project['all']      = '全部';
$lang->block->typeList->project['involved'] = '我参与的';

$lang->block->typeList->scrum['undone']   = '未完成';
$lang->block->typeList->scrum['doing']    = '进行中';
$lang->block->typeList->scrum['all']      = '全部';
$lang->block->typeList->scrum['involved'] = '我参与的';

$lang->block->typeList->testtask['wait']    = '待测版本';
$lang->block->typeList->testtask['doing']   = '测试中版本';
$lang->block->typeList->testtask['blocked'] = '阻塞版本';
$lang->block->typeList->testtask['done']    = '已测版本';
$lang->block->typeList->testtask['all']     = '全部';

$lang->block->modules['program']->moreLinkList = new stdclass();
$lang->block->modules['program']->moreLinkList->recentprogram = 'program|browse|';
$lang->block->modules['program']->moreLinkList->statistic     = 'program|browse|';
$lang->block->modules['program']->moreLinkList->program       = 'program|browse|';
$lang->block->modules['program']->moreLinkList->cmmireport    = 'weekly|index|';
$lang->block->modules['program']->moreLinkList->cmmiestimate  = 'workestimation|index|';
$lang->block->modules['program']->moreLinkList->cmmiissue     = 'issue|browse|';
$lang->block->modules['program']->moreLinkList->cmmirisk      = 'risk|browse|';
$lang->block->modules['program']->moreLinkList->scrumlist     = 'project|all|';
$lang->block->modules['program']->moreLinkList->scrumtest     = 'testtask|browse|';
$lang->block->modules['program']->moreLinkList->scrumproduct  = 'product|all|';
$lang->block->modules['program']->moreLinkList->scrumproject  = 'project|all|';
$lang->block->modules['program']->moreLinkList->scrumdynamic  = 'company|dynamic|';

$lang->block->modules['product']->moreLinkList        = new stdclass();
$lang->block->modules['product']->moreLinkList->list  = 'product|all|product=&line=0&status=%s';
$lang->block->modules['product']->moreLinkList->story = 'my|story|type=%s';

$lang->block->modules['project']->moreLinkList       = new stdclass();
$lang->block->modules['project']->moreLinkList->list = 'project|all|status=%s&project=';
$lang->block->modules['project']->moreLinkList->task = 'my|task|type=%s';

$lang->block->modules['qa']->moreLinkList           = new stdclass();
$lang->block->modules['qa']->moreLinkList->bug      = 'my|bug|type=%s';
$lang->block->modules['qa']->moreLinkList->case     = 'my|testcase|type=%s';
$lang->block->modules['qa']->moreLinkList->testtask = 'testtask|browse|type=%s';

$lang->block->modules['todo']->moreLinkList       = new stdclass();
$lang->block->modules['todo']->moreLinkList->list = 'my|todo|type=all';

$lang->block->modules['common']                        = new stdclass();
$lang->block->modules['common']->moreLinkList          = new stdclass();
$lang->block->modules['common']->moreLinkList->dynamic = 'company|dynamic|';

$lang->block->welcomeList['06:00'] = '%s，早上好！';
$lang->block->welcomeList['11:30'] = '%s，中午好！';
$lang->block->welcomeList['13:30'] = '%s，下午好！';
$lang->block->welcomeList['19:00'] = '%s，晚上好！';

$lang->block->gridOptions[8] = '左侧';
$lang->block->gridOptions[4] = '右侧';

$lang->block->flowchart   = array();
$lang->block->flowchart['admin']   = array('管理员', '维护公司', '添加用户', '维护权限');
$lang->block->flowchart['product'] = array($lang->productCommon . '经理', '创建' . $lang->productCommon, '维护模块', '维护计划', "维护{$lang->storyCommon}", '创建发布');
$lang->block->flowchart['project'] = array($lang->projectCommon . '经理', '创建' . $lang->projectCommon, '维护团队', '关联' . $lang->productCommon, "关联{$lang->storyCommon}", '分解任务');
$lang->block->flowchart['dev']     = array('研发人员', '领取任务和Bug', '更新状态', '完成任务和Bug');
$lang->block->flowchart['tester']  = array('测试人员', '撰写用例', '执行用例', '提交Bug', '验证Bug', '关闭Bug');

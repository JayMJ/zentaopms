update zt_task set `parent` = -1 where `id` in (select `parent` from zt_task where `parent` > 0 group by `parent`)
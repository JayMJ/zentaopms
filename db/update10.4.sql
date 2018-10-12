update zt_task set `parent` = -1 where `id` in (select `parent` from zt_task where `parent` > 0 group by `parent`);
ALTER TABLE `zt_userview` CHANGE `products` `products` mediumtext COLLATE 'utf8_general_ci' NOT NULL AFTER `account`,
CHANGE `projects` `projects` mediumtext COLLATE 'utf8_general_ci' NOT NULL AFTER `products`;
ALTER TABLE `zt_task` ADD `finishedList` text NOT NULL AFTER `finishedDate`;
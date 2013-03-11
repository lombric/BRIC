
/* DATABASE */

ALTER DATABASE CHARACTER SET UTF8 COLLATE utf8_general_ci;



/* TABLE : GROUPS */

DROP TABLE IF EXISTS `groups`;

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` text,
  `specifications` text,
  `parent_id` int(11) unsigned NULL,
  `hide` BOOLEAN NOT NULL DEFAULT 0,
  `system` BOOLEAN NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


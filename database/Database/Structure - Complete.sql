
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



/* TABLE : Member */

DROP TABLE IF EXISTS `members`;

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11)  unsigned  NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `email` varchar(80) NOT NULL,
  `city` varchar(45),
  `address` varchar(100),
  `zip` varchar(8), 
  `mobile_phone` varchar(20),
  `phone` varchar(20),
  `description` text,
  `status` enum('new', 'active', 'old') DEFAULT 'new',
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
  

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


/* TABLE : Member and Groups */

DROP TABLE IF EXISTS `members_groups`;

CREATE TABLE IF NOT EXISTS `members_groups` (
  `id` int(11)  unsigned  NOT NULL AUTO_INCREMENT,
  `group_id` int(11)  unsigned NOT NULL,
  `member_id` int(11)  unsigned NOT NULL,
  PRIMARY KEY (`id`)

  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;




--
-- Contraintes pour la table `members`
--
/* 
ALTER TABLE `members`
  ADD CONSTRAINT `fk_members_groups` FOREIGN KEY (`groups_id`) 
  REFERENCES `lombric`.`groups`(`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

*/
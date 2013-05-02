
DROP TABLE IF EXISTS `groups`;
DROP TABLE IF EXISTS `members`;
DROP TABLE IF EXISTS `members_groups`;

CREATE TABLE `groups`(
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` text,
  `specifications` text,
  `parent_id` int(11) unsigned NULL,
  `hide` BOOLEAN NOT NULL DEFAULT 0,
  `system` BOOLEAN NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


CREATE TABLE `members`(
  `id` int(11)  unsigned  NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `email` varchar(80) NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


CREATE TABLE `members_groups`(
  `id` int(11)  unsigned  NOT NULL AUTO_INCREMENT,
  `group_id` int(11)  unsigned NOT NULL,
  `member_id` int(11)  unsigned NOT NULL,
  `is_admin` BOOLEAN NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
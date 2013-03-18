
/* TABLE : GROUPS */

INSERT INTO `groups` (`name`, `description`, `specifications`, `parent_id`, `hide`, `system`) VALUES
  ('Groupe', 'Description', 'Spécifications', NULL, 0, 0),
  ('Sous groupe', NULL, NULL, 1, 0, 0),
  ('Groupe 2', 'Description', 'Spécifications', NULL, 1, 0),
  ('Groupe caché', NULL, NULL, NULL, 0, 0),
  ('Groupe systeme', NULL, NULL, NULL, 0, 1),
  ('Groupe systeme caché', NULL, NULL, NULL, 1, 1)
;



/* TABLE : MEMBERS */

INSERT INTO `members` (`firstname`, `lastname`, `email`,`city`, `address`, `zip`,`mobile_phone`, `phone`, `description`, `username`, `password`) VALUES
  ('lambda', 'lambda','lambda@lambda.com','','','','','','','lambda','lambda'),
  ('root', 'root','root@root.com','','','','','','','root','root'),
  ('titi', 'titi','titi@titi.com','','','','','','','titi','titi'),
  ('tata', 'tata','tata@tata.com','','','','','','','tata','tata'),
  ('toto', 'toto','toto@toto.com','','','','','','','toto','toto')

;


/* TABLE : Members_Groups */

INSERT INTO `members_groups` (`group_id`, `member_id`) VALUES
  ('1', '1'),
  ('3', '2'),
  ('4', '3'),
  ('4', '4')
;
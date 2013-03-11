
/* TABLE : GROUPS */

INSERT INTO `groups` (`name`, `description`, `specifications`, `parent_id`, `hide`, `system`) VALUES
  ('Groupe', 'Description', 'Spécifications', NULL, 0, 0),
  ('Sous groupe', NULL, NULL, 1, 0, 0),
  ('Groupe 2', 'Description', 'Spécifications', NULL, 1, 0),
  ('Groupe caché', NULL, NULL, NULL, 0, 0),
  ('Groupe systeme', NULL, NULL, NULL, 0, 1),
  ('Groupe systeme caché', NULL, NULL, NULL, 1, 1)
;


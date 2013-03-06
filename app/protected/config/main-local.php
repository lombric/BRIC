<?php

// http://www.yiiframework.com/wiki/155/the-directory-structure-of-the-yii-project-site

return array(
	// application components
	'components'=>array(
		'db' => array(
			'connectionString' => 'mysql:host=localhost;dbname=lombric', /*localhost connexion with the lombric.sql script*/
			'emulatePrepare' => true,
			'username' => 'lombric',
			'password' => 'lombric',
			'charset' => 'utf8',
		)
	)
);

?>
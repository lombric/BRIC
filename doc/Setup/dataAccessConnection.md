Reference: http://www.yiiframework.com/wiki/155/the-directory-structure-of-the-yii-project-site

create the file *main-local.php* in *protected/config*. With the following lines and replace the data with yours.

return array(
	
	// application components

	'components'=>array(

		'db' => array(
			'connectionString' => 'mysql:host=localhost;dbname=lombric',
			'emulatePrepare' => true,
			'username' => 'lombric',
			'password' => 'lombric',
			'charset' => 'utf8',
		)
	)
);

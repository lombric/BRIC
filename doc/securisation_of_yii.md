Securisation in Yii
===================

Make Yii login work with the database
-------------------------------------

In app/protected/components/UserIdentity.php
you have to change the function authenticate with

Change the password for Gii
---------------------------
to improve the securisation of Yii you can change the pssword of Gii in /protected/config/main.php

AccessRules for controller
--------------------------
for each controller you can specify the rules for each users or roles

exemple : ArticleController
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array(*),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow user with admin role to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'roles'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

A roles can be manage with a roles in the database 


What can you prevent in Yii
---------------------------

1. Cross-site Scripting
2. Cross-site Request Forgery
3. Cookie Attack
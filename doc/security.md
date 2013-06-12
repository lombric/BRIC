#Security of BRIC

### Basics

#####Make Yii login work with the database

In app/protected/components/UserIdentity.php
you have to change the function *authenticate()* with a database connection.

#####What can you prevent in Yii

1. Cross-site Scripting
2. Cross-site Request Forgery
3. Cookie Attack

### Access by roles

#####AccessRules for controller

For each controller you can specify the rules for each users or roles.

*Exemple for ArticleController :*

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

The roles can be managed with roles stored in the database. This method is very limited because an user can have only one role (no heritage) and the permissions must be set in each files. **There is no administration interface!**

#####Authorization Manager
Yii implement an other method to configure the permissions.
[Here is the official documentation](http://www.yiiframework.com/doc/guide/1.1/en/topics.auth#configuring-authorization-manager)

With this API, this is possible to go in details in the permissions with multiple groups and business rules.

By there is no interface for the managment.

#####Plugins
There is some plugins who provides an interface to manage the permissions.

The plugins:
[Simple-RBAC](http://www.yiiframework.com/wiki/328/simple-rbac/),
[ACL](http://www.yiiframework.com/extension/acl/),
[Rights documentation](http://www.yiiframework.com/extension/rights/),
[Usergroups](http://www.yiiframework.com/extension/usergroups/)

The problems with there plugins is the architecture of the permissions. A database is created like defined in Yii, is not easy to use with de BRIC application.
It's possible to define our own table for the users, but not for the groups.

The groups are included in a table with the actions, permissions, etc.

#####Summary
For the moment, the security is implemented with the basics access rules of Yii and there is not interface.

It's not going to be easy to personnalize one of the plugins to operate with the BRIC groups.

The best solutions is to use the Authorization Manager of Yii (more flexible than the access rules) and find/developpe a little interface.

Then, in the main controller, the ACL rules must be construct like defined in the database.
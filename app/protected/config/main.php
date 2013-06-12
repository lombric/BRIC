<?php

// uncomment the following to define a path alias
Yii::setPathOfAlias('bootstrap',realpath(dirname(__FILE__) . "../../extensions/bootstrap"));

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath'=>realpath(dirname(__FILE__). "../../"),
    'name'=>'Lombric Application',
	'theme'=>'bootstrap',
	'defaultController'=>'site',
	
	// General configuration
	'charset'=>'utf-8',
    'sourceLanguage'=>'fr_fr',
	
	// preloading 'log' component
    'preload'=>array(
		'log',
		'bootstrap',
	),

    // autoloading model and component classes
    'import'=>array(
        'application.models.*',
        'application.components.*',
		'ext.giix.components.*', // giix components
    ),
	
	//'language' => 'en',
    'modules'=>array(
        'gii'=>array(
            'class'=>'system.gii.GiiModule',
            'password'=>'',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters'=>array('127.0.0.1','::1'),
            'generatorPaths' => array(
				'ext.giix.generators', // giix generators
            ),
        ),

    ),
	
    // application components
    'components'=>array(
        'user'=>array(
            // enable cookie-based authentication
            'allowAutoLogin'=>true,
        ),
        // uncomment the following to enable URLs in path-format
        'urlManager'=>array(
            'urlFormat'=>'path',
            'rules'=>array(
                '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
            ),
        ),
        /*
        'db'=>array(
            'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
        ),
        */
        // uncomment the following to use a MySQL database
        
        // Default data connection
        'db'=>array(
            'connectionString' => '',
            'emulatePrepare' => true,
            'username' => '',
            'password' => '',
            'charset' => 'utf8',
        ),
        
        'errorHandler'=>array(
            // use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
        'log'=>array(
            'class'=>'CLogRouter',
            'routes'=>array(
                array(
                    'class'=>'CFileLogRoute',
                    'levels'=>'error, warning',
                ),
                // uncomment the following to show log messages on web pages
                /*
                array(
                    'class'=>'CWebLogRoute',
                ),
                */
            ),
        ),
        /*'messages' => array (
            'extensionPaths' => array(
                'giix' => 'ext.giix.messages',
            ),
        ),*/
		'bootstrap' => array(
			'class' => 'bootstrap.components.Bootstrap',
		),
    ),

    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params'=>array(
        // this is used in contact page
        'adminEmail'=>'webmaster@example.com',
    ),

);
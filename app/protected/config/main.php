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
	
	// preloading 'log' component
    'preload'=>array(
		'log',
		'bootstrap',
	),

    'import'=>array(
        'application.models.*',
        'application.components.*',
		'ext.giix.components.*', // giix components
    ),

	'sourceLanguage'=>'en',
	'language' => 'fr',
	
    'modules'=>array(
        'gii'=>array(
            'class'=>'system.gii.GiiModule',
            'password'=>'', // Overrided in local conf
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
            'allowAutoLogin'=>true, // enable cookie-based authentication
        ),

        'urlManager'=>array(
            'urlFormat'=>'path',
            'rules'=>array(
                '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
            ),
        ),
        
        // Default data connection
        // Overrided in local conf
        'db'=>array(
            'connectionString' => '',
            'emulatePrepare' => true,
            'username' => '',
            'password' => '',
            'charset' => 'utf8',
        ),
        
        'errorHandler'=>array(
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

		'bootstrap' => array(
			'class' => 'bootstrap.components.Bootstrap',
		),
    ),

    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params'=>array(
        'adminEmail'=>'webmaster@example.com', // this is used in contact page
    ),

);
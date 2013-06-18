<?php

// uncomment the following to define a path alias
Yii::setPathOfAlias('bootstrap',realpath(dirname(__FILE__) . "../../extensions/bootstrap"));

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath'=>realpath(dirname(__FILE__). "../../"),
	'theme'=>'bootstrap',

	// preloading 'log' component
    'preload'=>array(
		'log',
		'bootstrap',
	),

		'bootstrap' => array(
			'class' => 'bootstrap.components.Bootstrap',
		),
    ),
);
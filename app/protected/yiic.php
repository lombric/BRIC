<?php

// change the following paths if necessary
$yiic=dirname(__FILE__).'/../../yii/framework/yiic.php';

//$config=dirname(__FILE__).'/config/console.php';
$local=require(dirname(__FILE__).'/config/console-local.php');
$base=require(dirname(__FILE__).'/config/console.php');
$config=array_merge($base, $local);

require_once($yiic);

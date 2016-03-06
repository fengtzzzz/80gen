<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/../Yii/framework/yii.php';
//this from server
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
//this server gogogog
//not this
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

//let's roll
require_once($yii);
//test
Yii::createWebApplication($config)->run();

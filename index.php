<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/../Yii/framework/yii.php';
//what is that
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
//what is it please tell me.
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);


//hahah
require_once($yii);
//test
Yii::createWebApplication($config)->run();

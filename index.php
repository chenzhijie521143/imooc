<?php

/*入口文件
1.定义常量
2.加载函数库
3.启动框架*/

define('ROOT',realpath('./'));
define('CORE',ROOT.'/core');
define('APP',ROOT.'/app');
define('MODULE','app');
define('MODEL','core');
define('DEBUG',true); //是否开启调试模式

require "vendor/autoload.php";

if(DEBUG){
    $whoops = new \Whoops\Run();
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
    $whoops->register();
	ini_set('display_errors','On');
}else{
	ini_set('display_errors','Off');
}
//dump($_SERVER);
require_once(CORE.'/common/function.php');
require_once(CORE.'/imooc.php');

spl_autoload_register('\core\imooc::load');

//imooc::run();//启动框架
\core\imooc::run();











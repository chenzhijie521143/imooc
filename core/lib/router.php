<?php
namespace core\lib;
use core\lib\config;
class router
{
	public $ctrl;
	public $action;   
	public function __construct(){
//      xxx.com/index.php/index/index
//      xxx.com/index/index
//      xxx.com/class/method
//		1.隐藏index.php .htaccess
//		2.获取 url 参数部分
//		3.返回对应控制器和方法
		//p($_SERVER['REQUEST_URI']);
		if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI']!='/'){  //有参数
		    // class/method
			$path=$_SERVER['REQUEST_URI'];
			$patharr=explode('/',trim($path,'/'));
			if(isset($patharr[0])){                                          //一个参数
				$this->ctrl=$patharr[0];
			}
			unset($patharr[0]);
			if(isset($patharr[1])){                                          //两个参数
				$this->action=$patharr[1];
			    unset($patharr[1]);
			}else{
				$this->action=config::get('ACTION','route');
			}
			
			//url 多余部分转换成GET
			// id/1/str/2/test/3
			$count=count($patharr)+2;
			$i=2;
			while($i<$count){
				if(isset($patharr[$i+1])){
					$_GET[$patharr[$i]]=$patharr[$i+1]; 
				}
				$i=$i+2;
			}
			//p($_GET);
		}else{                                                                //无参数
			$this->ctrl=config::get('CTRL','route');
			$this->action=config::get('ACTION','route');
		}
	}
}














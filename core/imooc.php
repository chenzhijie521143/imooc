<?php
namespace core;
class imooc
{
	public static $classMap=array();
	public $assign; 
	public static function run(){
		\core\lib\log::init();
		\core\lib\log::log($_SERVER,'server');
		$route=new \core\lib\router();
		$ctrlClass=$route->ctrl;
		$action=$route->action;
		$ctrlfile=APP.'/controller/'.$ctrlClass.'Ctrl.php';  //拼接文件
		$ctrlClass='\\'.MODULE.'\controller\\'.$ctrlClass.'Ctrl';
		if(is_file($ctrlfile)){
			include $ctrlfile;
			$ctrl=new $ctrlClass();
			$ctrl->$action();
		}else{
			throw new \Exception('找不到控制器',$ctrlClass);
		}
	}
	
	
	public static function load($class){
		
		//自动加载类库
		//new \core\router();
		//$class='\core\router()'
		//IMOOC.'/core/router.php'
		
		if(isset($classMap[$class])){ //避免重复加载
			return true;
		}else{
			$class=str_replace('\\','/',$class);
			$file=ROOT.'/'.$class.'.php';
			if(is_file($file)){
				include $file;
				self::$classMap[$class]=$class;
			}else{
				return false;
			}
		}
		
	}
	
	public function assign($name,$value){
		$this->assign[$name]=$value;
	}
	
	public function display($filename){
		$file=APP.'/view/'.$filename;
		//p($file);
		if(is_file($file)){
			//extract($this->assign);
			\Twig_Autoloader::register();
			$loader = new \Twig_Loader_Filesystem(APP.'/view');
			$twig = new \Twig_Environment($loader, array(
			    'cache' => ROOT.'/log',
			    'debug'=>DEBUG
			));
			$template = $twig->loadTemplate($filename);
			$template->display($this->assign ? $this->assign : array());	

		}
	}
}

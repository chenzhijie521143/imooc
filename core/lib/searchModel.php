<?php
namespace core\lib;
use core\lib\config;//使用别名
use Medoo\Medoo;
class searchModel extends Medoo
{
	public function __construct(){
		$options=config::all('database');
		parent::__construct($options);
		/*try{
			parent::__construct($database['DSN'],$database['USERNAME'],$database['PASSWORD']);//调用父类构造函数
		}catch(\PDOException $e){
			p($e->getMessage());
		}*/
	}
}

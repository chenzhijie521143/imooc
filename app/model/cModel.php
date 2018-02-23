<?php
namespace app\model;
use core\lib\searchModel;
class cModel extends searchModel
{
	
	public $table='mes';
	
    public function all(){
    	return $ret=$this->select($this->table,'*');
    }
	
	public function addOne($data){
		return $this->insert($this->table,$data);
	}	
	public function lists(){
		$ret=$this->select($this->table,'*');
		return $ret;
	}
	
	public function getOne($id){
		$ret=$this->get($this->table,"*",array(
		   "Id"=>$id
		));
		return $ret;
	}
	
	public function setOne($id,$data){
		return $this->update($this->table,$data,array(
		   "Id"=>$id
		));
	}
	
	public function delOne($id){
		return $this->delete($this->table,array(
		   "Id"=>$id
		));
	}
}

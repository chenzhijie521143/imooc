<?php
namespace app\controller;
use app\model\cModel;
class indexCtrl extends \core\imooc
{
	//所有留言   
	public function index(){
		$model=new cModel();
		$data=$model->all();
		$this->assign('data',$data);
		$this->display('index.html');
	}
	
	//添加留言
	public function add(){
		$this->display('add.html');
	}
	
	//保存留言
	public function save(){
		$data['user']=$_POST['user'];
		$data['content']=$_POST['content'];
		$data['lastdate']=date("Y-m-d H-i-s");
		$model=new cModel();
		$ret=$model->addOne($data);
		if($ret){
			jump("/");
		}else{
			p('error');
		}
	}
	
	//删除留言
	public function del(){
		$id=$_GET['id'];
		$model=new cModel();
		$ret=$model->delOne($id);
		if($ret){
			jump("/");
		}else{
			p('error');
		}
	}
}

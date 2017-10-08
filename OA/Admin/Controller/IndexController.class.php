<?php 
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller{
	public function index(){
		// 实例化
		$employees=M('allemployees');
		// 计算数据个数
		$count=$employees->count();
		// 实例化分页
		$page=new \Think\Page ($count,8);
		// 查询数据
		$page->setConfig('header', '共<b>%TOTAL_ROW%</b>位员工&nbsp;第<b>%NOW_PAGE%</b>页');
	    $page->setConfig('prev', '上一页');
	    $page->setConfig('next', '下一页');
	    $page->setConfig('last', '末页');
	    $page->setConfig('first', '首页');
	    $page->setConfig('theme', '%HEADER%%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%');
	    $page->lastSuffix = false;
		$data=$employees->limit($page->firstRow.','.$page->listRows)->select();
		// 分配数据
		$this->assign('data',$data);
		$this->assign('show',$page->show());
		// 分配页面
		$this->display();
	}
    public  function employeesedit(){
    	$user=M('allemployees');
    	$this->data=$user->find($_POST['id']);
    	$this->display();
    }
    public function employeesupdate(){
    	
    	$user=M('allemployees');
    	$user->where("id=$_POST[id]")->save($_POST);
   		$da=$user->find($_POST['id']);
   		$this->ajaxReturn($da);
    }
    public function employeesadd(){
    	$_POST['number']=intval($_POST['number']);
    	$_POST['positionid']=intval($_POST['positionid']);
    	$_POST['departmentid']=intval($_POST['departmentid']);
    	$_POST['password']=123456;
    	$_POST['salary']=floatval($_POST['salary']);
    	$user=M('allemployees');
    	if($row=$user->find($_POST['number'])){
    		$this->error('工号重复，请重新添加',':U("index")',4);
    	}
    	else{
    		$row=$user->add($_POST);
    		$this->data=$user->find($row);
    		$this->display();
    	}
    	
    }

	public function announcement(){
		$this->display();		
	}
	
	public function askleave(){
		$this->display();
	}
	public function leavetype(){
		$this->display();
	}
	public function department(){
		$this->display();
	}
	public function grant(){
		$this->display();
	}
	public function position(){
		$this->display();
	}
	public function positiontype(){
		$this->display();
	}
	public function system(){
		$this->display();
	}
}
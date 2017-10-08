<?php 
namespace Admin\Controller;
use Think\Controller;
use Think\Verfiy;
class LoginController extends Controller{

	public function index(){
		$this->display();
	}
	public function check(){

	}
	public  function logout(){
			echo  "ok";

	}
	public function verify(){
		$config =    array(   
		 'fontSize'    =>    20,    //  验证码字体大小   
		 'length'      =>    4,     // 验证码位数 
		 'imageW'      =>    120,
		 'imageH'      =>    40
		 );
		$Verify =  new \Think\Verify($config);
		$Verify->codeSet = '0123456789'; 
		$Verify->entry();
	}
	public function check_verify(){

	}
}
<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$user=M('allemployees');
    	$this->data=$user->select();
    	$this->display();

    }
}
<?php
namespace app\index\controller;
use think\Controller;
use think\Db;


class Index extends Controller
{
    public function hello($name = 'thinkphp')
    {
    	$data = Db::name('user')->select();
    	var_dump($data);
        $this->assign('name', $data[0]['password']);
        return $this->fetch();
    }
    public function index()
    {
       
        return '我是你爹';
    }
     public function haha()
    {
       
        return '我是你爹';
    }
}

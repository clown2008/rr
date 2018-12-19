<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\User;
use think\Db;
class Order extends Controller{
    public function index(){
        $list = Db::name('user')->paginate(5);
        // 把分页数据赋值给模板变量list
        $this->assign('list', $list);
        // 渲染模板输出
        return $this->fetch('order');
        
    }
    public function Repair(){
        return $this->fetch('Repair');
    }
}
<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;
class Finance extends Controller{
    public function index(){
        return $this->fetch('index');
    }
    public function Train(){
        return $this->fetch('Train');
    }
    public function Training(){
        return $this->fetch('Training');
    }
    public function Selective(){
        return $this->fetch('Selective');
    }
    public function TrainingSelective(){
        return $this->fetch('TrainingSelective');
    }
    public function Order(){
        $list = Db::name('user')->paginate(5);
        // 把分页数据赋值给模板变量list
        $this->assign('list', $list);
        return $this->fetch('Order');
    }
    public function Repair(){
        return $this->fetch('Repair');
    }
}
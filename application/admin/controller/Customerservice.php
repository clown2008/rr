<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;
class Customerservice extends Controller{
    public function index(){
        return $this->fetch('index');
    }
    public function journalism(){
        return $this->fetch('journalism');
    }
    public function CourseList(){
        return $this->fetch('CourseList');
    }
    public function Study(){
        return $this->fetch('Study');
    }
    public function User(){
        return $this->fetch('User');
    }
    public function LtemBank(){
        return $this->fetch('LtemBank');
    }
    public function Certificate(){
        return $this->fetch('Certificate');
    }
    public function Progress(){
        return $this->fetch('Progress');
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
    public function order(){
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
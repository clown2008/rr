<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;
class Train extends Controller{
    public function index(){
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
}
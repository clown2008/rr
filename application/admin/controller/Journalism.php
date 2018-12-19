<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;
class Journalism extends Controller{
    public function index(){
        return $this->fetch('journalism');
    }
    public function CourseList(){
        return $this->fetch('CourseList');
    }
    public function Study(){
        return $this->fetch('Study');
    }
}
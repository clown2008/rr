<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;
class Maintain extends Controller{
    public function index(){
        return $this->fetch('index');
    }
    public function Website(){
        return $this->fetch('Website');
    }
    public function BasicSetup(){
        return $this->fetch('BasicSetup');
    }
    public function Clause(){
        return $this->fetch('Clause');
    }
    public function curriculum(){
        return $this->fetch('curriculum');
    }
    public function NewsList(){
        return $this->fetch('NewsList');
    }
    public function Teacher(){
        return $this->fetch('Teacher');
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
}
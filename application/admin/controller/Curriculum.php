<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;
class Curriculum extends Controller{
    public function index(){
        return $this->fetch('curriculum');
    }
    public function NewsList(){
        return $this->fetch('NewsList');
    }
}
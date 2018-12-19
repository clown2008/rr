<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;
class Supervise extends Controller{
    public function index(){
        return $this->fetch('index');
    }
    public function Certificate(){
        return $this->fetch('Certificate');
    }
    public function Administrators(){
        return $this->fetch('Administrators');
    }
}
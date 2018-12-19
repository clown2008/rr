<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;
class Study extends Controller{
    public function index(){
        return $this->fetch('Study');
    }
}
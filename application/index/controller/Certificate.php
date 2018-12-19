<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;
class Certificate extends Controller{
    public function index(){
    //    return '123';
        return $this->fetch('certificate');
    }
}



<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;
class Journalism extends Controller{
    public function index(){
    //    return '123';
        return $this->fetch('Journalism');
    }
}



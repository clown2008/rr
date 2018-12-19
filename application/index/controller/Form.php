<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;
class Form extends Controller
{
    public function index(){
        // return $this->fetch('../view/index/index.html');
        return $this->fetch('Form');
    }
}
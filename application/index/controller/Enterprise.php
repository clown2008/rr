<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;
class Enterprise extends Controller{
    public function index(){
        return $this->fetch('Enterprise');
    }
    public function index2(){
        $this->redirect(url("/"));  
    }
}
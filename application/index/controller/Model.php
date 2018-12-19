<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;
class Model extends Controller{
    public function lst(){
        return $this->fetch('lst');
    }
}



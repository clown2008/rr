<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;
class User extends Controller{
    public function index(){
        return $this->fetch('User');
    }
    public function LtemBank(){
        return $this->fetch('LtemBank');
    }
    public function Certificate(){
        return $this->fetch('Certificate');
    }
    public function Progress(){
        return $this->fetch('Progress');
    }
}
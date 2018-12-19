<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;
class User extends Controller
{
    public function index(){
        return $this->fetch('Form2');
    }
    public function index2(){
        $param = input('post.');
        $data = $param['name'];
        $dataOne = Db::table('ceshi_user')->where('name',$data)->find();
        $user_id = $dataOne['user_id'];
        $User = new User();
        $users = User::index2(1);
    }
    // public function profile(){
    //     return $this->belongsTo('ceshi_profile',"user_id",'user_id');
    // }
    public function profile()
    {
        $id = $this->hasOne('ceshi_profile','user_id','id','user_id');
        var_dump($id);
    }
}
<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;
class Forgetpassword extends Controller{
    public function index(){
    //    return '123';
        return $this->fetch('Forgetpassword');
        
    }
    public function index2(){
        return $this->fetch('Forgetpassword_two');
    }
    public function user(){
        $user = input('post.');
        // dump($user);
        // die;
        $data = Db::table('rr_user')->where('username',$user)->find();
        // $rule[
        //     ['email', 'email', '请填写正确的邮箱格式'],
        // ]
        // dump($tre['username']);
        // die;

        cookie('username',$data['username']);
        dump(cookie());
        die;
        $this->redirect(url('Forgetpassword/index2'));
    }
}



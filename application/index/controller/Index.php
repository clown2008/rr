<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;
class Index extends Controller
{
    public function index(){
        return $this->fetch('index');
    }
    public function doLogin()
    {
        $param = input('post.');
        // dump($param );
        // die;
        if(empty($param['username'])){
            $this->error('用户名不能为空');
        }
        if(empty($param['password'])){
            $this->error('密码不能为空');
        }
        // 验证用户名
        $has = db('user')->where('username', $param['username'])->find();
        if(empty($has)){
            $this->error('用户名错误');      
        }
        // dump(session('username'));
        // die;
        
        // 验证密码
        if($has['password'] != ($param['password'])){
            $this->error('密码错误');
        }
            
        // dump($has);
        // die;
        // 记录用户登录信息
        
          // 一个小时有效期
        
        session("id", $has['id']);
        session('username', $has['username']);
        session('name',$has['name']);
        $this->redirect(url('Personal/index'));
    }  
     
}

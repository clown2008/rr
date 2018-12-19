<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;
use app\index\model\Registe;
class Register extends Controller{
    public function index(){
        return $this->fetch('Register');
    }
    public function tijiao(){
        // 判断post请求
        if(request()->isPost()){
            $registeModel = new Register();
            //接收post参数
            $postData = input('post.');
            //验证器验证
            $result = $this->validate($postData,'Register.tijiao',[],true);
            if($result!==true){
                $this->error(implode(',', $result));
            }
            //编辑update或添加入库save
            // if($registeModel->allowField(true)->save($postData)){
            if(Db::name('user')->insert($postData)){

                // $this->success('入库成功',url('/index/register/index'));
                return $this->fetch('Register');
            }else{
                $this->error('入库失败');
            }
        }

         // $data = [
            //     'username'=> input('username'),
            //     'pw' =>input('password'),
            //     'pw' =>input('ConfirmPassword'),
            //     'name' => input('name'),
            //     'sex' => input('sex'),
            //     'id_card'=>input('id_card'),
            //     'phone' => input('phone'),
            //     'region' =>input('s_province'),           
            //     'company' => input('enterprise'),
            //     'company_type' => input('TypeEnterprise'),
            // ];
        // Db::name('user')->insert($data);
        // return $this->fetch('Register');
    }
}





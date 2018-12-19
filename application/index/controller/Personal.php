<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;
use app\index\model\Persona;
class Personal extends Controller{
    public function index(){
        $red = session("username");
        $data = Db::table('rr_ListOfInvoices')->where('username',$red)->select();
        $dataOne = Db::table('rr_ListOfInvoices')->where('username',$red)->find();
        $personalData = Db::table('rr_user')->where('username',$red)->select();
        $lias = db::table('rr_invoiceinformation')->where('username',$red)->select();
        $invorce = Db::table('rr_invoicerequest')->where('username',$red)->select();
        $invorceOne = Db::table('rr_invoicerequest')->where('username',$red)->find();
        // dump($data);
        // die;
        if($data != ""){
            
        }else{
            $post = $data[0];
            $postOne = $data[1];
            $datapost = [
                ["username" =>$post["username"], "ApplicationTime" =>$post["ApplicationTime"], "raised" =>$post["raised"], "value" =>$post["value"] , "nature" =>$post["nature"]],
                ["username" =>$postOne["username"], "ApplicationTime" =>$postOne["ApplicationTime"], "raised" =>$postOne["raised"], "value" =>$postOne["value"] , "nature" =>$postOne["nature"]]
            ];
            if($invorceOne['ApplicationTime'] == $dataOne['ApplicationTime']){
            }else{
                // dump($datapost);
                Db::table("rr_invoicerequest")->insertAll($datapost);
            }
        }
        $this->assign("data",$data);
        $this->assign("personalData",$personalData);
        $this->assign("lias",$lias);
        $this->assign("invorce",$invorce);
        return $this->fetch('Personal');
    }
    public function modify()
    {
        session(null);
        $this->success("退出成功！！！",url("/"));
    } 
    public function password(){
        $sess = session("username");
        $pass = input('post.');
        $postpassword = Db::table('rr_user')->where('username', $sess)->find();
        // dump($postpassword['password']);
        // die;
        if($pass['usedpassword'] != $postpassword['password'] ){
            $this->error('密码重复');
        }else{
            if(Db::table('rr_user')->where('username', $sess)->update(['password' =>$pass['password'],'ConfirmPassword'=>$pass['ConfirmPassword']])){
                
                $this->success('修改成功',url('Personal/index'));
            }else{
                $this->error('修改失败');
            }
        }
    }
    public function Submission(){
        if(request()->isPost()){
            $registeModel = new Personal();
            //接收post参数
            $postData = input('post.');
            // dump($postData);
            // die;
            //验证器验证q
            $result = $this->validate($postData,'Personal.Submission',[],true);
            if($result!==true){
                $this->error(implode(',', $result));
            }
            // //编辑update或添加入库save
            // // if($registeModel->allowField(true)->save($postData)){
            if(Db::name('invoiceinformation')->insert($postData)){
                DB::name('invoiceinformation')->insert(session('username'));
            //     // $this->success('入库成功',url('/index/register/index'));
                $this->success('修改成功',url('Personal/index'));
            }else{
                $this->error('入库失败');
            }
        }
    }
    public function SubmissionOne(){
        $postData = input('post.');
        Db::name('invoiceinformation')->insert($postData);
        $this->success('修改成功',url('Personal/index'));
    }
    public function personalData(){ 
        if(request()->isPost()){
            $registeModel = new Personal();
            //接收post参数
            $postData = input('post.');
            $post = $postData['username'];
            // $rr= Db::table('rr_user')->where('username',$post)->find();
            // dump($postData['username']);
            // die;
            //验证器验证
            $result = $this->validate($postData,'Personal.personaldata',[],true);
            if($result!==true){
                $this->error(implode(',', $result));
            }
            // //编辑update或添加入库save
            if(Db::table('rr_user')->where('username',$post)->update(['name' =>$postData['name'],'sex'=>$postData['sex'],'company'=>$postData['company'],
            'company_type'=>$postData['company_type'],'phone'=>$postData['phone'],'id_card'=>$postData['id_card'],
            's_province'=>$postData['s_province'],'s_city'=>$postData['s_city'],'s_county'=>$postData['s_county']])){
                $this->success('修改成功',url('Personal/index'));
            }else{
                $this->error('修改失败');
            }
        }
    }   
}
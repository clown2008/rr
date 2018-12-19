<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;
class Website extends Controller{
    public function index(){
        $content = input('content');
        return $this->fetch('Website');
    }
    public function BasicSetup(){
        return $this->fetch('BasicSetup');
    }
    public function Clause(){
        return $this->fetch('Clause');
    }
     //layui编辑器图片上传接口
     public function lay_img_upload(){
        $file = Request::instance()->file('file');
        if(empty($file)){
            $result["code"] = "1";
            $result["msg"] = "请选择图片";
            $result['data']["src"] = '';
        }else{
            // 移动到框架应用根目录/public/uploads/ 目录下
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads/layui' );
            if($info){
                $name_path =str_replace('\\',"/",$info->getSaveName());
                //成功上传后 获取上传信息
                $result["code"] = '0';
                $result["msg"] = "上传成功";
                $result['data']["src"] = "/uploads/layui/".$name_path;
            }else{
                  // 上传失败获取错误信息
                $result["code"] = "2";
                $result["msg"] = "上传出错";
                $result['data']["src"] ='';
            }
        

        }

        return json_encode($result);
    }
}
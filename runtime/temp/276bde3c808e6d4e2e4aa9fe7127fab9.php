<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"C:\Users\HP\Desktop\PHP5.0\public/../application/index\view\index5\index.html";i:1538108672;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<script src="js/jquery.js"></script>

    <title>Document</title>
</head>
<style> 
body{
    background-color: #222d32;
    background: url(http://www.tp5.com/static/index/imags/lunbo_2.png) 0 0 no-repeat;
    background-size: 1539px 700px;
}
*{
    margin: 0;
    padding: 0;
}
.Land{
    width: 300px;
    height: 350px;
    background-color: #ffff;
    position: absolute;
    top: 210px;
    right: 220px;
    background: rgba(255, 255, 255, 0.3);
    border-radius: 15px;
}
.Land span{
    font-size: 14px;
    color: hotpink;
}
.Land table input{
    outline:none;
    background-color: rgba(255,255,255,.6);
    color:rgba(79,79,79);
    height: 34px;
    font-size: 14px;
    width: 250px;
    border: 0px solid #ccc;
    border-radius: 10px;
}
.table_1{
    width: 250px;
    height: 250px;
    margin-left: 25px;
}
.anniu span{
  font-size: 13px;
  color: #000;
  position: absolute;
}
.anniu a {
  font-size: 13px;
  text-decoration: none;
  color: #000;
  float: right;
}
.anniu input{
  width: 13px;
  height: 13px;
}
.Denglu{
  margin-top: 40px;
}
.Denglu input{
  display: inline-block;
  width: 120px;
  height: 30px;
  float: left;
  margin-right: 10px;
  border: none;
  background-color: #349ce4;
  border-radius: 10px;  
  outline: none;
  opacity: 0.8;
}
.Denglu input:nth-child(2){
  margin-right: 0;
}
.logo img {
    margin-top: 5px;
    height: 52px;
}
.logo{
    width: 100%;
    height: 62px;
    background-color: #fff;
    background: rgba(0,0,0,.8); 
}
.table_1 table:nth-child(1){
    /* display: none; */    
}
.divs_1 li{
    list-style: none;
}
.divs_1 li:nth-child(1){
    font-size: 25px;
    text-align: center; 
    font-family: "微软雅黑";
}
.divs_1 li{
    margin-top: 10px;
}
.divs_1 input{
    width: 250px;
    height: 34px;
    border-radius: 10px;
    border: 0;
    font-size: 18px;
    outline:none;
}
.divs_2{
    display: none;
}
.divs_2 li{
    list-style: none;
}
.divs_2 li:nth-child(1){
    font-size: 25px;
    text-align: center; 
    font-family: "微软雅黑";
}
.divs_2 li{
    margin-top: 10px;
}
.divs_2 input{
    width: 250px;
    height: 34px;
    border-radius: 10px;
    border: 0;
    font-size: 18px;
    outline: none;
}

</style>
<body>
        <div class="logo"><img src="http://www.tp5.com/static/index/imags/logo.png" alt=""></div>
    <div class="Land">
        <!-- <span>为了方便我们与您联系，请填写您的手机号码</span> -->
        <div class="table_1">
            <div class="divs_1">
                <ul>
                    <li>登陆</li>
                    <li>账号：</li>
                    <li><input type="text"></li>
                    <li>密码：</li>
                    <li><input type="text"></li>
                </ul>
            </div>
            <!-- <div class="divs_2">
                <ul>
                    <li>注册</li>
                    <li>账号：</li>
                    <li><input type="text"></li>
                    <li>密码：</li>
                    <li><input type="text"></li>
                    <li>姓名：</li>
                    <li><input type="text"></li>
                    <li>性别：</li>
                    <li><input type="text"></li>
                    <li>身份证号码：</li>
                    <li><input type="text"></li>
                    <li>手机号码：</li>
                    <li><input type="text"></li>
                    <li>企业名称：</li>
                    <li><input type="text"></li>
                    <li>所在区域 </li>
                    <li><input type="text"></li>
                    <li>企业类型</li>
                    <li><input type="text"></li>
                </ul>
            </div> -->
            <div class="anniu">
              <input type="checkbox" style="outline:none;" ><span>七天免登录</span>
              <a href="#">忘记密码？</a>
            </div>
            <div class="Denglu">
              <input type="button" style="cursor:pointer" value="登录">
              <input type="button" style="cursor:pointer" id="zhuce" value="注册">
            </div>
            <div class="container">
                <div id="captcha" style="position: relative"></div>
                <div id="msg"></div>
            </div>
        </div>
    </div>
    <!-- 登陆组件结束 -->
</body>
<script>
    // $("#zhuce").click(function(){
    //     $(".divs_1").css("display","none");
    //     $(".divs_2").css("display","block")
    // })
</script>
</html>
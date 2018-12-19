<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"C:\Users\HP\Desktop\PHP5.0\public/../application/index\view\model\lst.html";i:1539669836;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="http://www.tp5.com/static/index/js/jquery.js"></script>
    <script src="http://www.tp5.com/static/index/js/jq/jq/jquery-1.11.3.min.js"></script>
</head>
<style>
    .side-menu{
            text-align: center;
        }
        .side-menu h3{
            margin-top: 20px;
        }
        .side-menu li{
            list-style: none;
            margin-top: 5px;
        }
        .side-menu a{
            text-decoration: none;
        }
        .su_HeadPortrait{
            width: 74px;
            height: 74px;
            background-color: pink;
            border-radius: 74px;
            margin: 0 auto;
            margin-top: 23px;
        }
        .divs{
            width: 1024px;
            height: 300px;
            background-color: black;  
            display: inline-block;  
            position: absolute;
            margin-top: 43px;
            z-index: 0;
        }
        .s_content{
            width: 100%;
            height: 100px;
            display: block;
            background-color: #fff;
        }
        .purple {
            color: hotpink;
        }
        .d_content{
            display: none;
            width: 100%;
            height: 40px;
            background-color: pink;
            overflow: hidden;
        }
        #lis li a{
            color: black;
        }
</style>
<body>
        <div id="lis" class="side-menu">
                <h3>基本信息</h3>
                <a class="lis_a purple" href="#">个人资料</a><br>    
                <a class="lis_a" href="#">安全设置</a>    
                <h3>学习中心</h3>
                <a class="lis_a" href="#">我的课程</a><br>    
                <!-- <a class="lis_a" href="#">我的考试</a><br>    
                <a class="lis_a" href="#">我的证书</a><br>    
                <h3>订单管理</h3>
                <a class="lis_a" href="#">订单列表</a><br>    
                <h3>发票管理</h3>
                <a class="lis_a" href="#">发票信息登记</a><br>    
                <a class="lis_a" href="#">发票索取</a> <br>   
                <a class="lis_a" href="#">发票列表</a> <br>    -->
        </div>
    <div id="hezi" class="divs">
            <div class="d_content s_content"></div>
            <div class="d_content"></div>
            <div class="d_content"></div>
            <!-- <div class="d_content"></div>
            <div class="d_content"></div>
            <div class="d_content"></div>
            <div class="d_content"></div>
            <div class="d_content"></div>
            <div class="d_content"></div> -->
        </div>
</body>
<script>
        jQuery(window).ready(function () {
            //需求:鼠标放到那个li上，让该li添加active类，下面的对应的.main的div添加selected
            $("#lis>a").click(function () {
                //不用判断，当前的li添加active类，其他的删除active类
                $(this).addClass("purple").siblings("a").removeClass("purple");
                console.log(this);
                //对应索引值的div添加selected类，其他的删除selected类
                $("#hezi>div").eq($(this).index()).addClass("s_content").siblings("div").removeClass("s_content");
            });
        });
    </script>
</html>
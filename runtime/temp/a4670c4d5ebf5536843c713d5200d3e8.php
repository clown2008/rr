<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"C:\Users\HP\Desktop\PHP5.0\public/../application/admin\view\supervise\index.html";i:1544758206;}*/ ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>后台管理系统-首页</title>
    <link rel="stylesheet" href="http://www.tp5.com/static/admin/assets/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="http://www.tp5.com/static/admin/assets/bootstrap-validator/css/bootstrapValidator.min.css"/>
    <link rel="stylesheet" href="http://www.tp5.com/static/admin/assets/nprogress/nprogress.css"/>
    <link rel="stylesheet" href="http://www.tp5.com/static/admin/css/admin.css"/>
</head>
<body>
<!--侧边栏-->
<aside class="ad_aside">
    <!--商标-->
    <div class="brand"><a href="http://www.tp5.com/admin/index.html">ITCAST</a></div>
    <!--用户-->
    <div class="user">
        <img src="http://www.tp5.com/static/admin/images/default.png" alt=""/>
        <span>超级管理员</span>
    </div>
    <!--菜单-->
    <div class="menu">
        <ul>
            <li><a href="http://www.tp5.com/admin/Supervise/Administrators.html"><span class="glyphicon glyphicon-user"></span> 管理员权限</a></li> 
            <li>
                <a href="javascript:;"><span class="glyphicon glyphicon-list"></span> 用户管理</a>
                <div class="child" style="display: none">
                    <a href="http://www.tp5.com/admin/Supervise/Certificate.html">用户进度</a>
                </div>
            </li>
        </ul>
    </div>
</aside>
<!--内容-->
<section class="ad_section">
    <!--顶部导航-->
    <nav class="ad_nav">
        <a data-menu href="javascript:;"><span class="glyphicon glyphicon-align-justify"></span></a>
        <a data-logout href="javascript:;"><span class="glyphicon glyphicon-log-out"></span></a>
    </nav>
    <div class="container-fluid">
        <!--路径导航-->
        <ol class="breadcrumb">
            <li><a href="http://www.tp5.com/admin/index.html">管理系统</a></li>
            <li class="active">首页</li>
        </ol>
        <div class="ad_content">
            <div class="picTable"></div>
            <div class="picTable"></div>
        </div>
    </div>
</section>
<script src="http://www.tp5.com/static/admin/assets/jquery/jquery.min.js"></script>
<script src="http://www.tp5.com/static/admin/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="http://www.tp5.com/static/admin/assets/bootstrap-validator/js/bootstrapValidator.min.js"></script>
<script src="http://www.tp5.com/static/admin/assets/nprogress/nprogress.js"></script>
<script src="http://www.tp5.com/static/admin/assets/echarts/echarts.min.js"></script>
<script src="http://www.tp5.com/static/admin/js/admin.js"></script>
<script src="http://www.tp5.com/static/admin/js/index.js"></script>
</body>
</html>
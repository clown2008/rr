<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"C:\Users\HP\Desktop\PHP5.0\public/../application/admin\view\login\Login.html";i:1544434907;}*/ ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>后台管理系统-登录</title>
    <link rel="stylesheet" href="http://www.tp5.com/static/admin/assets/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="http://www.tp5.com/static/admin/assets/bootstrap-validator/css/bootstrapValidator.min.css"/>
    <link rel="stylesheet" href="http://www.tp5.com/static/admin/assets/nprogress/nprogress.css"/>
    <link rel="stylesheet" href="http://www.tp5.com/static/admin/css/admin.css"/>
</head>
<body class="bg_login">
<div class="container">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-primary mt_150">
            <div class="panel-heading text-center"><h4>后台管理系统</h4></div>
            <div class="panel-body">
                <form id="login" class="form-horizontal" autocomplete="off">
                    <div class="form-group">
                        <label for="inputUserName3" class="col-sm-3 control-label">用户名</label>
                        <div class="col-sm-9">
                            <input name="username" type="text" class="form-control" id="inputUserName3" placeholder="请输入用户名">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">密码</label>
                        <div class="col-sm-9">
                            <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="请输入密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-10">
                            <button type="reset" class="btn btn-default mr_50">重置</button>
                            <button type="submit" class="btn btn-primary">登录</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="http://www.tp5.com/static/admin/assets/jquery/jquery.min.js"></script>
<script src="http://www.tp5.com/static/admin/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="http://www.tp5.com/static/admin/assets/bootstrap-validator/js/bootstrapValidator.min.js"></script>
<script src="http://www.tp5.com/static/admin/assets/nprogress/nprogress.js"></script>
<script src="http://www.tp5.com/static/admin/js/admin.js"></script>
<script src="http://www.tp5.com/static/admin/js/login.js"></script>
</body>
</html>
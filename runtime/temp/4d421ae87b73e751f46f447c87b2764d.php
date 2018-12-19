<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:90:"C:\Users\HP\Desktop\PHP5.0\public/../application/admin\view\finance\TrainingSelective.html";i:1544755348;}*/ ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>后台管理系统-课程分类</title>
    <link rel="stylesheet" href="http://www.tp5.com/static/admin/assets/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="http://www.tp5.com/static/admin/assets/bootstrap-validator/css/bootstrapValidator.min.css"/>
    <link rel="stylesheet" href="http://www.tp5.com/static/admin/assets/nprogress/nprogress.css"/>
    <link rel="stylesheet" href="http://www.tp5.com/static/admin/css/admin.css"/>
</head>
<body>
<!--侧边栏-->
<aside class="ad_aside">
    <!--商标-->
    <div class="brand"><a href="http://www.tp5.com/admin/Finance/index.html">ITCAST</a></div>
    <!--用户-->
    <div class="user">
        <img src="http://www.tp5.com/static/admin/images/default.png" alt=""/>
        <span>超级管理员</span>
    </div>
    <!--菜单-->
    <div class="menu">
        <ul>
            <li>
                <a href="javascript:;"><span class="glyphicon glyphicon-list"></span> 订单管理</a>
                <div class="child" style="display: none">
                    <a href="http://www.tp5.com/admin/Finance/Order.html">订单列表</a>
                    <a href="http://www.tp5.com/admin/Finance/Repair.html">补考列表</a>
                </div>
            </li>
            <li class="now">
                <a href="javascript:;"><span class="glyphicon glyphicon-list"></span> 培训班管理</a>
                <div class="child">
                    <a class="now" href="http://www.tp5.com/admin/Finance/Train.html">培训班列表</a>
                    <a href="http://www.tp5.com/admin/Finance/Training.html">管理培训班</a>
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
            <li class="active">课程管理</li>
        </ol>
        <div class="ad_content">
            <input class="btn btn-default mb_15" type="text">
            <button class="btn btn-default mb_15">搜索学员</button>
            <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th width="10%">序号</th>
                        <th width="10%">账号</th>
                        <th width="10%">用户类型</th>
                        <th width="10%">行业</th>
                        <th width="10%">姓名</th>
                        <th width="10%">所属企业</th>
                        <th width="10%">地区</th>
                        <th width="10%">注册时间</th>
                        <th width="10%">状态</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            <div class="page">
                <ul class="pagination"></ul>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="addModal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title">添加培训班</h4>
            </div>
            <div class="modal-body">
                <form action="#" id="form">
                    <div class="form-group">
                        <input name="categoryName" type="text" class="form-control" placeholder="请输入培训班名称">
                    </div>
                    <div class="form-group">
                        <input name="checked" type="checkbox" value="">课程<br>
                        <input name="checked" type="checkbox" value="">课程<br>
                        <input name="checked" type="checkbox" value="">课程<br>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="submit" class="btn btn-primary" form="form">确定</button>
            </div>
        </div>
    </div>
</div>
<script type="text/template" id="template">
    <% for(var i = 0 ; i < rows.length ; i ++){ %>
    <tr>
        <td><%=(page-1)*size+i+1%></td>
        <td><%=rows[i].categoryName%></td>
    </tr>
    <% } %>
</script>
<script src="http://www.tp5.com/static/admin/assets/jquery/jquery.min.js"></script>
<script src="http://www.tp5.com/static/admin/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="http://www.tp5.com/static/admin/assets/bootstrap-validator/js/bootstrapValidator.min.js"></script>
<script src="http://www.tp5.com/static/admin/assets/nprogress/nprogress.js"></script>
<script src="http://www.tp5.com/static/admin/assets/artTemplate/template-native.js"></script>
<script src="http://www.tp5.com/static/admin/assets/bootstrap-paginator/bootstrap-paginator.min.js"></script>
<script src="http://www.tp5.com/static/admin/js/admin.js"></script>
<script src="http://www.tp5.com/static/admin/js/categoryFirst.js"></script>
</body>
</html>
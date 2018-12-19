<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"C:\Users\HP\Desktop\PHP5.0\public/../application/admin\view\customerservice\Train.html";i:1544775481;}*/ ?>
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
    <div class="brand"><a href="http://www.tp5.com/admin/index.html">ITCAST</a></div>
    <!--用户-->
    <div class="user">
        <img src="http://www.tp5.com/static/admin/images/default.png" alt=""/>
        <span>超级管理员</span>
    </div>
    <!--菜单-->
    <div class="menu">
            <ul>
                <li>
                    <a href="javascript:;"><span class="glyphicon glyphicon-list"></span> 课程管理</a>
                    <div class="child" style="display: none">
                        <a href="http://www.tp5.com/admin/CustomerService/Journalism.html">课程库</a>
                        <a href="http://www.tp5.com/admin/CustomerService/CourseList.html">题库</a>
                        <a href="http://www.tp5.com/admin/CustomerService/Study.html">课程学习</a>
                    </div>
                </li>
                <li>
                    <a href="javascript:;"><span class="glyphicon glyphicon-list"></span> 订单管理</a>
                    <div class="child" style="display: none">
                        <a href="http://www.tp5.com/admin/CustomerService/Order.html">订单列表</a>
                    </div>
                </li>
                
                <li>
                    <a href="javascript:;"><span class="glyphicon glyphicon-list"></span> 用户管理</a>
                    <div class="child" style="display: none">
                        <a href="http://www.tp5.com/admin/CustomerService/User.html">用户列表</a>
                        <a href="http://www.tp5.com/admin/CustomerService/Certificate.html">用户进度</a>
                        <a href="http://www.tp5.com/admin/CustomerService/LtemBank.html">考试状态</a>
                        <a href="http://www.tp5.com/admin/CustomerService/Progress.html">证书状态</a>
                    </div>
                </li>
                <li class="now">
                    <a href="javascript:;"><span class="glyphicon glyphicon-list"></span> 培训班管理</a>
                    <div class="child">
                        <a class="now" href="http://www.tp5.com/admin/CustomerService/Train.html">培训班列表</a>
                        <a href="http://www.tp5.com/admin/CustomerService/Training.html">管理培训班</a>
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
            <button id="addBtn" class="btn btn-default mb_15">添加培训班</button>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th width="10%">序号</th>
                    <th width="20%">培训班名</th>
                    <th width="15%">成员操作</th>
                    <th width="25%">所选课程</th>
                    <th width="15%">状态</th>
                    <th width="15%">操作</th>
                </tr>
                </thead>
                <tbody>
                    <th>adfadsfa</th>
                    <th>adfadsfa</th>
                    <th><a href="http://www.tp5.com/admin/Train/Selective.html" class="btn btn-default mb_15">选择学员</a></th>
                    <th>adfadsfa</th>
                    <th>adfadsfa</th>                    
                    <th><button class="btn btn-default mb_15">编辑</button>    <button class="btn btn-default mb_15">删除</button></th>
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
<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"C:\Users\HP\Desktop\PHP5.0\public/../application/admin\view\maintain\Clause.html";i:1544774187;}*/ ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>后台管理系统-一级分类</title>
    <link rel="stylesheet" href="http://www.tp5.com/static/admin/assets/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="http://www.tp5.com/static/admin/assets/bootstrap-validator/css/bootstrapValidator.min.css"/>
    <link rel="stylesheet" href="http://www.tp5.com/static/admin/assets/nprogress/nprogress.css"/>
    <link rel="stylesheet" href="http://www.tp5.com/static/admin/css/admin.css"/>
</head>
<style>
    .texts{
        width: 750px;
        height: 450px;
        margin: 0 auto;
    }
</style>
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
                        <a href="http://www.tp5.com/admin/Maintain/Journalism.html">课程库</a>
                        <a href="http://www.tp5.com/admin/Maintain/CourseList.html">题库</a>
                        <a href="http://www.tp5.com/admin/Maintain/Study.html">课程学习</a>
                    </div>
                </li>
                
                <li>
                    <a href="javascript:;"><span class="glyphicon glyphicon-list"></span> 新闻管理</a>
                    <div class="child" style="display: none">
                        <a href="http://www.tp5.com/admin/Maintain/Curriculum">新闻分类</a>
                        <a href="http://www.tp5.com/admin/Maintain/NewsList.html">新闻列表</a>
                    </div>
                </li>
               
                <li>
                    <a href="javascript:;"><span class="glyphicon glyphicon-list"></span> 名师管理</a>
                    <div class="child" style="display: none">
                        <a href="http://www.tp5.com/admin/Maintain/Teacher.html">名师列表</a>
                    </div>
                </li>
                <li class="now">
                    <a href="javascript:;"><span class="glyphicon glyphicon-list"></span> 网站基本设置</a>
                    <div class="child">
                        <a href="http://www.tp5.com/admin/Maintain/Website.html">关于我们</a>
                        <a class="now" href="http://www.tp5.com/admin/Maintain/Clause.html">服务条款</a>
                        <a href="http://www.tp5.com/admin/Maintain/BasicSetup.html">网页基本设置</a>
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
            <li class="active">新闻管理</li>
        </ol>
         <div class="ad_content">
            <div class="texts">
                <table class="table table-bordered table-hover" style="width:100%;">
                <tr>
                    <th width="20%">栏目名称：</th>
                    <th width="80%"><input class="btn btn-default" type="text"></th>
                </tr>
                <tr>
                    <th width="20%">关键字：</th>
                    <th width="80%"><input class="btn btn-default" type="text"></th>
                </tr>
                <tr>
                    <th width="20%">描述：</th>
                    <th width="80%"><input class="btn btn-default" type="text"></th>
                </tr>
                </table>
                <textarea name="" id="" style="width:750px;" rows="10"></textarea>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="addModal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title">添加分类</h4>
            </div>
            <div class="modal-body">
                <form action="#" id="form">
                    <div class="form-group">
                        <input name="categoryName" type="text" class="form-control" placeholder="请输入课程名称">
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
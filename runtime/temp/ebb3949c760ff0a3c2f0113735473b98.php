<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"C:\Users\HP\Desktop\PHP5.0\public/../application/admin\view\user\user.html";i:1544516743;}*/ ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>后台管理系统-管理员权限管理</title>
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
                <li class="now"><a href="http://www.tp5.com/admin/User.html"><span class="glyphicon glyphicon-user"></span> 管理员权限</a></li>
                <li>
                    <a href="javascript:;"><span class="glyphicon glyphicon-list"></span> 课程管理</a>
                    <div class="child" style="display: none">
                        <a href="http://www.tp5.com/admin/Journalism.html">课程分类</a>
                        <a href="http://www.tp5.com/admin/Journalism/CourseList.html">课程列表</a>
                        <a href="http://www.tp5.com/admin/Journalism/Teacher.html">名师列表</a>
                        <a href="http://www.tp5.com/admin/Journalism/Study.html">课程学习</a>
                    </div>
                </li>
                <li>
                    <a href="javascript:;"><span class="glyphicon glyphicon-list"></span> 订单管理</a>
                    <div class="child" style="display: none">
                        <a href="http://www.tp5.com/admin/Order.html">订单列表</a>
                    </div>
                </li>
                <li>
                    <a href="javascript:;"><span class="glyphicon glyphicon-list"></span> 新闻管理</a>
                    <div class="child" style="display: none">
                        <a href="http://www.tp5.com/admin/Curriculum">新闻分类</a>
                        <a href="http://www.tp5.com/admin/Curriculum/NewsList.html">新闻列表</a>
                    </div>
                </li>
                <li>
                    <a href="javascript:;"><span class="glyphicon glyphicon-list"></span> 考试管理</a>
                    <div class="child" style="display: none">
                        <a href="http://www.tp5.com/admin/Examination.html">题库列表</a>
                        <a href="http://www.tp5.com/admin/Examination/LtemBank.html">考试列表</a>
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
            <li class="active">管理员权限</li>
        </ol>
        <div class="ad_content">
            <table class="table table-bordered table-hover">
                <thead>
                 <tr>
                     <th width="10%">地区</th>
                     <th width="30%">管理员账号</th>
                     <th width="30%">身份</th>
                     <th width="20%">管理员密码</th>
                     <th>操作</th>
                 </tr>
                </thead>
                <tbody></tbody>
            </table>
            <div class="page">
                <ul class="pagination"></ul>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="optionModal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title">温馨提示</h4>
            </div>
            <div class="modal-body">
                <p class="text-danger"><span class="glyphicon glyphicon-info-sign"></span> 您确定要 <strong></strong> 这个用户吗？</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary">确定</button>
            </div>
        </div>
    </div>
</div>
<script type="text/template" id="list">
    <% for(var i = 0 ; i < rows.length ; i ++){ %>
    <tr>
        <td><%=(page-1)*size+i+1%></td>
        <td><%=rows[i].username%></td>
        <td><%=rows[i].mobile%></td>
        <td><%=rows[i].isDelete==1?'正常':'已禁用'%></td>
        <td>
            <%if(rows[i].isDelete==1){%>
            <a data-id="<%=rows[i].id%>" data-name="<%=rows[i].username%>" href="javascript:;" class="btn btn-sm btn-danger">禁用</a>
            <%}else{%>
            <a data-id="<%=rows[i].id%>" data-name="<%=rows[i].username%>" href="javascript:;" class="btn btn-sm btn-primary">启用</a>
            <%}%>
        </td>
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
<script src="http://www.tp5.com/static/admin/js/userManage.js"></script>
</body>
</html>
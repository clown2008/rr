<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:94:"C:\Users\HP\Desktop\PHP5.0\public/../application/admin\view\administrators\Administrators.html";i:1544685996;}*/ ?>
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
                <li class="now"><a href="http://www.tp5.com/admin/Administrators.html"><span class="glyphicon glyphicon-user"></span> 管理员权限</a></li>
                <li>
                    <a href="javascript:;"><span class="glyphicon glyphicon-list"></span> 课程管理</a>
                    <div class="child" style="display: none">
                        <a href="http://www.tp5.com/admin/Journalism.html">课程库</a>
                        <a href="http://www.tp5.com/admin/Journalism/CourseList.html">题库</a>
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
                    <a href="javascript:;"><span class="glyphicon glyphicon-list"></span> 用户管理</a>
                    <div class="child" style="display: none">
                        <a href="http://www.tp5.com/admin/User.html">用户列表</a>
                        <a href="http://www.tp5.com/admin/User/Certificate.html">用户进度</a>
                        <a href="http://www.tp5.com/admin/User/LtemBank.html">考试状态</a>
                        <a href="http://www.tp5.com/admin/User/Progress.html">证书状态</a>
                    </div>
                </li>
                <li>
                    <a href="javascript:;"><span class="glyphicon glyphicon-list"></span> 培训班管理</a>
                    <div class="child" style="display: none">
                        <a href="http://www.tp5.com/admin/Train.html">培训班列表</a>
                        <a href="http://www.tp5.com/admin/Train/Training.html">管理培训班</a>
                    </div>
                </li>
                <li>
                    <a href="javascript:;"><span class="glyphicon glyphicon-list"></span> 名师管理</a>
                    <div class="child" style="display: none">
                        <a href="http://www.tp5.com/admin/Teacher.html">名师列表</a>
                    </div>
                </li>
                <li>
                <a href="javascript:;"><span class="glyphicon glyphicon-list"></span> 网站基本设置</a>
                <div class="child" style="display: none">
                    <a href="http://www.tp5.com/admin/Website.html">关于我们</a>
                    <a href="http://www.tp5.com/admin/Website/Clause.html">服务条款</a>
                    <a href="http://www.tp5.com/admin/Website/BasicSetup.html">网页基本设置</a>
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
            <button id="addBtn" class="btn btn-default mb_15">添加分类</button>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th width="15%">序号</th>
                    <th width="25%">管理员账号</th>
                    <th width="20%">身份</th>
                    <th width="25%">管理员密码</th>
                    <th width="15%">操作</th>
                </tr>
                </thead>
                <tbody>
                    <th>adfadsfa</th>
                    <th>adfadsfa</th>
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
                <h4 class="modal-title">添加分类</h4>
            </div>
            <div class="modal-body">
                <form action="#" id="form">
                    <div class="form-group">
                        <input name="categoryName" type="text" class="form-control" placeholder="请输入课程名称">
                    </div>
                    <div class="form-group">
                        <select class="form-control">
                            <option value="客服">客服</option>
                            <option value="运维">运维</option>
                            <option value="财务">财务</option>
                            <option value="监管">监管</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input name="categoryName" type="password" class="form-control" placeholder="请输入管理员密码">
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
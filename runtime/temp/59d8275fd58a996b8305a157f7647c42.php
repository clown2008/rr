<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"C:\Users\HP\Desktop\PHP5.0\public/../application/admin\view\order\Repair.html";i:1544685961;}*/ ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>后台管理系统-企业订单管理</title>
    <link rel="stylesheet" href="http://www.tp5.com/static/admin/assets/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="http://www.tp5.com/static/admin/assets/bootstrap-validator/css/bootstrapValidator.min.css"/>
    <link rel="stylesheet" href="http://www.tp5.com/static/admin/assets/nprogress/nprogress.css"/>
    <link rel="stylesheet" href="http://www.tp5.com/static/admin/css/admin.css"/>
    <style>
        .fileupload{
            position: relative;
        }
        .fileupload [type="file"]{
            width: 82px;
            height: 34px;
            position: absolute;
            opacity: 0;
        }
    </style>
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
                <li><a href="http://www.tp5.com/admin/Administrators.html"><span class="glyphicon glyphicon-user"></span> 管理员权限</a></li>
                <li>
                    <a href="javascript:;"><span class="glyphicon glyphicon-list"></span> 课程管理</a>
                    <div class="child" style="display: none">
                        <a href="http://www.tp5.com/admin/Journalism.html">课程库</a>
                        <a href="http://www.tp5.com/admin/Journalism/CourseList.html">题库</a>
                        <a href="http://www.tp5.com/admin/Journalism/Study.html">课程学习</a>
                    </div>
                </li>
                <li class="now">
                    <a href="javascript:;"><span class="glyphicon glyphicon-list"></span> 订单管理</a>
                    <div class="child">
                        <a href="http://www.tp5.com/admin/Order.html">订单列表</a>
                        <a class="now" href="http://www.tp5.com/admin/Order/Repair.html">补考列表</a>
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
            <li class="active">订单管理</li>
        </ol>
        <div class="ad_content">
            <input class="btn btn-default mb_15" type="text" >
            <button class="btn btn-default mb_15">搜索</button>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th width="5%">序号</th>
                    <th width="15%">订单编号</th>
                    <th width="20%">用户</th>
                    <th width="15%">课程</th>
                    <th width="5%">单价</th>
                    <th width="5%">数量</th>
                    <th width="5%">订单金额</th>
                    <th width="10%">购买时间</th>
                    <th width="5%">状态</th>
                    <th>操作</th>
                </tr>
                </thead>
                    <tbody>
                    <th style="vertical-align:middle;">adfadsfa</th>
                    <th style="vertical-align:middle;">adfadsfa</th>
                    <th style="vertical-align:middle;">adfadsfa</th>
                    <th style="vertical-align:middle;">adfadsfa</th>
                    <th style="vertical-align:middle;">adfadsfa</th>
                    <th style="vertical-align:middle;">adfadsfa</th>   
                    <th style="vertical-align:middle;">adfadsfa</th>
                    <th style="vertical-align:middle;">adfadsfa</th>
                    <th style="vertical-align:middle;">adfadsfa</th>
                    <th style="vertical-align:middle;"><button class="btn btn-default mb_15">编辑</button>    <button class="btn btn-default mb_15">删除</button></th>
                </tbody>
            </table>
            <div class="page">
                <ul class="pagination"></ul>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="editModal">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title">编辑商品</h4>
            </div>
            <div class="modal-body">
                <form action="#" id="form" autocomplete="off">
                    <!--商品名称-->
                    <div class="form-group">
                        <input name="proName" type="text" class="form-control" placeholder="请输入商品名称">
                    </div>
                    <!--商品说明-->
                    <div class="form-group">
                        <textarea name="proDesc"  class="form-control" placeholder="请输入商品描述"></textarea>
                    </div>
                    <!--商品库存-->
                    <div class="form-group">
                        <input name="num" type="text" class="form-control" placeholder="请输入商品库存">
                    </div>
                    <!--商品价格-->
                    <div class="form-group">
                        <input name="price" type="text" class="form-control" placeholder="请输入商品价格">
                    </div>
                    <!--商品原价-->
                    <div class="form-group">
                        <input name="oldPrice" type="text" class="form-control" placeholder="请输入商品原价">
                    </div>
                    <!--商品尺码-->
                    <div class="form-group">
                        <input name="size" type="text" class="form-control" placeholder="请输入商品尺码">
                    </div>
                    <!--商品分类-->
                    <!--商品的图片-->
                    <div class="form-group">
                        <input type="hidden" name="pic">
                        <div class="fileupload">
                            <input type="file" name="pic1" data-url="/product/addProductPic" class="btn btn-default">
                            <a href="javascript:;" class="btn btn-default">上传图片</a>
                            <span>提示：必须上传三个图片</span>
                        </div>
                    </div>
                    <div class="form-group">
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
    <% for(var i = 0 ; i < rows.length ; i++){ %>
    <tr>
        <td><%=(page-1)*size+i+1%></td>
        <td><%=rows[i].proName%></td>
        <td><%=rows[i].proDesc%></td>
        <td><%=rows[i].num%></td>
        <td><%=rows[i].size%></td>
        <td><%=rows[i].statu==1?'已上架':'已下架'%></td>
        <td>
            <% if(rows[i].statu==1){ %>
            <a href="javascript:;" class="btn btn-sm btn-danger">下架</a>
            <% }else{ %>
            <a href="javascript:;" class="btn btn-sm btn-success">上架</a>
            <% } %>
            <a href="javascript:;" class="btn btn-sm btn-primary">编辑</a>
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
<script src="http://www.tp5.com/static/admin/assets/jquery-fileupload/jquery.ui.widget.js"></script>
<script src="http://www.tp5.com/static/admin/assets/jquery-fileupload/jquery.fileupload.js"></script>
<script src="http://www.tp5.com/static/admin/js/admin.js"></script>
<script src="http://www.tp5.com/static/admin/js/productMange.js"></script>
</body>
</html>
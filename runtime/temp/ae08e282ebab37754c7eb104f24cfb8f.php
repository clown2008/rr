<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"C:\Users\HP\Desktop\PHP5.0\public/../application/index\view\personal\Personal.html";i:1543308526;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="http://www.tp5.com/static/index/js/jquery.js"></script>
    <!-- <script src="http://www.tp5.com/static/index/Eye/iconfont"></script> -->
    <script src="http://www.tp5.com/static/index/js/jq/jq/jquery-1.11.3.min.js"></script>
    <!-- <script src="http://www.tp5.com/static/index/js/images.js"></script> -->
    <link rel="stylesheet" type="text/css" href="http://www.tp5.com/static/index/Eye/iconfont.css">
    <link rel="stylesheet" href="http://www.tp5.com/static/index/css/images.css">
    <link rel="stylesheet" href="http://www.tp5.com/static/index/master/goalProgress.css">
    <link rel="stylesheet" href="http://www.tp5.com/static/index/css/pikaday.css">
    <!-- <link rel="stylesheet" href="http://www.tp5.com/static/index/css/bootstrap.min.css">  -->
    <script src="http://www.tp5.com/static/index/master/goalProgress.min.js"></script>
    <script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>  
    <title>人人食品安全培训考核网</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .w{
            width: 80%;
            margin: 0 auto;
        }
        header{
            width: 100%;
            height: 74px;
            background-color: #fff;
            border-bottom: 1px solid #ccc;
        }
        .Daohang{
            width: 100%;
            background-color: #fff;
        }
        .beijin{
            overflow: hidden;
        }
        .logo{
            width: 20%;
            height: 74px;
            background-color: #fff;
            float: left;
            line-height: 7;
        }
        .Navigation{
            width: 60%;
            height: 74px;
            background-color: #fff;
            float: left;
            margin-left: 40px;
        }
        .Navigation li{
            float: left;
            list-style: none;
            margin-right: 5px;
            text-align: center;
            line-height: 74px;
            width: 13%;
            height: 69px;
        }
        .Navigation li a{
          display: inline-block;
          width: 100px;
          height: 60px;
        }
        .Navigation li:hover hr{
          animation: move 1s;
          -webkit-animation-fill-mode: both;
        }
        .Navigation hr{
            position: absolute;
            border: 0;
            height: 5px;
            background-color: #349ce4;
            border-radius: 5px;
            margin-top: 0;
        }
        @keyframes move {
          0%{width: 0px}
          100% {width: 100px}
        }
        .Navigation li:hover{
          color: #349ce4;
        }
        .Navigation li:hover a {
          color: #349ce3;
        }
        .Navigation li:hover hr{
          background-color: #349ce4;
        }
        .Navigation li:nth-child(6){
            margin-right: 0;
        }
        .Navigation li a{
            color: #34352c;
            font-size: 18px;
        }
        /* .Navigation li:nth-child(1) a{
          color: #fff;
        } */
        .Navigation li a{
          text-decoration: none;
        }
        .ziti{
          color: #fff;
        }
        .user{
            float: right;
            width: 15%;
        } 
        .news{
            width: 60px;
            height: 74px;
            background-color: #ccc;
            display: inline-block;
        }
        .HeadPortrait{
            width: 70px;
            height: 70px;
            background-color: #ccc;
            border-radius: 74px;
            display: inline-block;
            margin-left: 65px;
            background-image: url("http://www.tp5.com/static/index/imags/User_img/IMG_0022");
            margin-top: 2px;
        }
        .InformationLayout{
            width: 255px;
            height: 400px;
            background-color: pink;
            margin-top: 10px;
            position: absolute;
            display: none; 
            z-index: 1;
        }
        .InformationLayout:hover{
            display: block;
        }
        .triangle{
            position: absolute;
            right: 145px;
            top: -10px;
            width: 0;
            height: 0;
            border: 10px solid red;
            border-bottom-color: black;
            border-top: none;
            border-left-color: transparent;
            border-right-color: transparent;     
        }
        .u_banner{
            width: 100%;
            height: 30%;
            background-color: skyblue;
        }
        .u_recent{
            width: 100%;
            height: 60%;
            background-color: yellow;
        }
        .u_operate{
            width: 100%;
            height: 10%;
            background-color: pink;
        }
        .u_HeadPortrait{
            width: 74px;
            height: 74px;
            background-color: #ccc;
            border-radius: 74px;
            margin: 0 auto;
            margin-top: 23px;
        }
        .head{
            width: 40%;
            height: 100%;
            display: inline-block;
            text-align:center;
        }
        .head_text{
            width: 60%;
            height: 120px;
            float: right;
            line-height: 120px;
        }
        .head_text p{
            height: 30px;
        }
        .u_recent li{
            width: 100%;
            height: 80px;
            list-style: none;
            background-color: black;
        }
        .u_operate{
            line-height: 40px;
        }   
        .u_operate a:nth-child(1){
            float: left;
            text-decoration: none;
        }
        .u_operate a:nth-child(2){
            float: right;
            text-decoration: none;
        }
        .user_info{
            width: 15%; 
        }
        .sidebar{
            width: 20%;
            margin-top: 20px;
            display: inline-block;
        }
        .side-menu{
            text-align: center;
        }
        .side-menu h3{
            font-size: 18px;
            color: #666;
            font-weight: 400;
            margin-bottom: 6px;
            margin-top: 20px;
        }
        .side-menu li{
            list-style: none;
            margin-top: 5px;
        }
        .side-menu a{
            text-decoration: none;
            font-size: 14px;
        }
        .lis_a{
            color: #666;
        }
        .lis_a:hover{
            color: #0b57a3;
        }
        .su_HeadPortrait{
            width: 100px;
            height: 100px;
            background-color: pink;
            margin: 0 auto;
            margin-top: 60px;
        }
        .divs{
            width: 1024px;
            display: inline-block;  
        }
        .d_content{
            width: 100%;    
            display: block;
        }
        .s_content{
            width: 100%;
            height: 100px;
            display: none;
            background-color: #fff;
        }
        .purple {
            color: red;
        }
        .fudong{
            display: flex;
            overflow: hidden;
        }
        .table{
            width: 100%;
            
        }
        .table hr{
            width: 123px;
            height: 3px;
            background-color: #ccc;
            border:0;
            margin-top: -3px;
        }
        .Underline_one{
            height: 50px;   
            border-bottom:3px solid black;
            line-height: 50px;
        }
        .Underline_one h3{
            margin-left: 10px;
        }
        .SetUp{
            width: 100%;
            margin-top: 40px;
        }
        .SetUp p{
            display: inline-block;
        }
        .SetUp p span{
            color: red;
        }
        .SetUp form{
            margin-left: 120px;
        }
        .form input:nth-child(1){
            margin-left: 30px;
        }
        .username{
            margin-left: 18px;
            width: 240px;
            height: 30px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 15px;
            margin-top: 10px;
            outline: none;
        }
        .password{
            margin-left: 42px;
            width: 240px;
            height: 30px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 15px;
            margin-top: 10px;
            outline: none;
        }
        .confirmPassword{
            margin-left:40px;
            width: 240px;
            height: 30px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 15px;
            margin-top: 10px;
            outline: none;
        }
        .name{
            margin-left: 21px;
            width: 240px;
            height: 30px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 15px;
            margin-top: 10px;
            outline: none;
        }
        .sex{
            margin-left: 21px;
            width: 240px;
            height: 30px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 15px;
            margin-top: 10px;
            outline: none;
        }
        .id_card{
            margin-left: 18px;
            width: 240px;
            height: 30px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 15px;
            margin-top: 10px;
            outline: none;
        }
        .phone{
            margin-left: 20px;
            width: 240px;
            height: 30px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 15px;
            margin-top: 10px;
            outline: none;
        }
        .company{
            margin-left: 16px;
            width: 240px;
            height: 30px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 15px;
            margin-top: 10px;
            outline: none;
        }
        .company{
            margin-left: 16px;
            width: 240px;
            height: 30px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 15px;
            margin-top: 10px;
            outline: none;
        }
        .company_type{
            margin-left: 22px;
            width: 240px;
            height: 30px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 15px;
            margin-top: 10px;
            outline: none;
        }
        #s_province{
            width: 100px;
            height: 30px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 15px;
            margin-top: 10px;
            outline: none;
        }
        #s_city{
            width: 100px;
            height: 30px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 15px;
            margin-top: 10px;
            outline: none;
        }
        #s_county{
            width: 100px;
            height: 30px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 15px;
            margin-top: 10px;
            outline: none;
        }
        .info span:nth-child(1){
            color: red;
        }
        .submit{
            width: 86px;
            height: 34px;
            background-color: #349ce4;
            color: #fff;
            outline: none;
            border: 0;
            border-radius: 5px;
            margin-left: 190px;
            margin-top: 20px;
        }
        .Verification{
            margin-top: 10px;
            margin-left: 97px;
        }
        .Verification input{
            width: 118px;
            height: 32px;
            border-radius: 6px;
            border: 1px solid #ccc;
            outline: none;
        }
        .Verification_one {
            margin-top: 10px;
            margin-left: 78px;
        }
        .Verification a{
            font-size: 12px;
        }
        .curriculum{
            width: 100%;
            text-align: center;
        }
        .curriculum div{
            width: 200px;
            height: 200px;
            margin:0 auto;
            margin-top: 100px;
            /* background-color: red; */
            background-image: url("http://www.tp5.com/static/index/imags/kecheng.jpg");
        }
        .curriculum p{
            color: red;
            margin-top: 20px;
        }
        .curriculum button{
            width: 100px;
            height: 34px;
            background-color: #349ce4;
            border: 0;
        }
        .dis{
            display: none;
        }
        .curriculum_two{
            width: 100%;
            margin-top: 20px;   
        }
        .curriculum_two li{
            list-style: none;
        }
        .curriculum_two li a{
            text-decoration: none;
            color: black;
        }
        .curriculum_two li a:hover{
            color: skyblue;
        }
        .curriculum_two ul hr{
            border: 1px solid #ccc;
            background-color: #ccc;
            margin-top: 35px;
            margin-bottom: 20px;
        }
        .img{
            width: 300px;
            height: 180px;
            background-color: black;
            display: inline-block;
            margin-top: 20px;
        }
        .subject{
            display: inline-block;
            position: absolute; 
            margin-left: 20px;
            width: 80%;
            height: 150px;
        }
        #sample_goal{
            display: inline-block;
        }
        .certificate{
            margin-top: 20px;
            display: none;
        }
        .certificate ul hr{
            border: 1px solid #ccc;
            background-color: #ccc;
            margin-top: 10px;
            margin-bottom: 20px;
        }
        .certificate li{
            list-style: none;
        }
        .certificate li a {
            text-decoration: none;
            color: black;
        }
        .certificate li a:hover{
            color: skyblue;
        }
        .Administration{
            margin-top: 20px;
            width: 100%;
        }
        .Administration a{
            text-decoration: none;
        }
        .Administration_one{
            width: 100%;
            display: none;
        }
        .Administration_one div{
            line-height: 40px;
            height: 40px;
        }
        .Administration_one div:nth-child(2n-1){
            background-color: #F8F8F8;
        }
        .modify{
            color: #3BCEE4;
        }
        .Administration_two{
            width: 100%;
            display: none;
        }
        .Transformation{
            display: block;
        }
        .serarch-type{
            margin-top: 20px;
        }
        .p20{
            display: inline-block;
        }
        .filter-text{
            top: 10px;
            border-radius: 5px;
        }
        .translate{
            position: absolute;
            top: 100px;
            left: 635px;
            height: 37px;
            border-radius: 5px;
            border: 1px solid #dcdfe6;
            outline:none;
            padding-left:15px;
        }
        .sousuo{
            position: absolute;
            top: 100px;
            left: 845px;
            height: 36px;
            width: 70px;
            outline:none;
            background-color: #20A0FF;
            color: #fff;
            border: 1px solid #20A0FF;
            cursor: pointer;
        }
        .container{
            width: 1024px;
        }
        #tab_c {
      width: 1024px;
      margin: 40px auto 0;
      border-collapse: collapse;
      background-color: #fff;
    }
    #tab_c th {
      padding: 0.75em 1.5em;
    }
    #tab_c thead th {
      text-align: center;
      /* border-right: 1px solid; */
    }
    #tab_c thead tr:nth-child(1) th{
        border-right: 1px solid;
    }
    #tab_c thead tr:nth-child(1){
        border: 1px solid;
        background-color: #ccc;
        border-radius:10px;
    }
    #tab_c tbody tr{
        background-color: skyblue;
        border-bottom: 2px dashed #000;
    }
    #tab_c table th {
        text-align: center;
    }
    input {
      width: 16px;
      height: 16px;
    }
    #selectAll {
      margin-left: -4px;
    }
    .checkbox {
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      -o-user-select: none;
      user-select: none;
    }
    .Administration_two p{
        display: inline-block;
    }
    .Administration_sonone{
        margin-top: 100px;
        margin-left: 200px;
    }
    .Administration_sonone div{
        margin-top: 10px;
    }
    .Administration_sonone div:nth-child(2) span{
        color: red;
    }
    .Administration_sonone div:nth-child(5) input{
        background-color: #00C1DE;
        border-color: transparent;
        width: 125px;
        font-size: 14px;
        height: 36px;
        color: #fff;
        margin-top: 10px;
        margin-left: 45px;
    }
    .Administration_sontwo{
        display: none;
        margin-top: 100px;
        margin-left: 200px;
    }
    .Administration_sontwo div{
        margin-top: 20px;
    }
    .Administration_sontwo div input{
        color: #c1c1c1;
    }
    .Administration_sontwo div p span{
        color: red;
    }
    .Administration_sontwo div:nth-child(4){
        margin-left: -32px;
    }
    .Administration_sontwo div:nth-child(5){
        margin-left: -57px;
    }
    .Administration_sontwo div:nth-child(6){
        margin-left: -25px;
    }
    .Administration_sontwo div:nth-child(7){
        margin-left: -25px;
    }
    .Administration_sontwo div:nth-child(8){
        margin-left: -25px;
    }
    .text input{
        width: 250px;
        height: 30px;
        font-size: 15px;
    }
    .Administration_sontwo div:nth-child(9) input{
        margin-left: 25px;
        background-color: #00C1DE;
        border-color: transparent;
        width: 125px;
        font-size: 14px;
        height: 36px;
        color: #fff;
        margin-top: 10px;
        margin-left: 120px;
    }
    .span{
        display: none;
        color: red;
        font-size: 14px;
    }
    .submit2{
        width: 86px;
        height: 34px;
        background-color: #349ce4;
        color: #fff;
        outline: none;
        border: 0;
        border-radius: 5px;
        margin-top: 20px;
    }
    .form .NotOptional{
        display: none;
    }
    .chakan{
        width: 100px;
    }
    .chakan2{
        width: 100px;
    }
    </style> 
</head>
<body>
    <!-- 头部模块 -->
    <header>
    <!-- 动画开始 -->
    <div id="fullpage">
            
    <div id="mk1" class="Daohang mk w s1">
    <div class="beijin w">
        <div class="logo">
            <a href="#"><img src="http://www.tp5.com/static/index/imags/logo2.png"></a>
        </div>
        <!-- 头部导航栏开始 -->
        <div class="Navigation">
            <ul>
                <li id="Navigation_1" class="bianhuan"><a href="http://www.tp5.com" class="">网站首页</a>
                  <hr>
                </li>
                <li id="Navigation_2"><a href="http://www.tp5.com/index/Study">学习指南</a>
                <hr></li>
                <li id="Navigation_3"><a href="http://www.tp5.com/index/curriculum">课程中心</a>
                <hr></li>
                <li id="Navigation_4"><a href="http://www.tp5.com/index/Certificate">证书查询</a>
                <hr></li>
                <li id="Navigation_4"><a href="#">个人中心</a>
                <hr></li>
                <li id="Navigation_5"><a href="http://www.tp5.com/index/Journalism">新闻资讯</a>
                <hr></li>
                <li id="Navigation_6"><a href="http://www.tp5.com/index/Enterprise">关于我们</a>
                <hr></li>
            </ul>
        </div>
        <!-- 头部导航栏结束 -->
        <!-- 用户头像开始 -->
        <div class="user">
            <div class="HeadPortrait"></div>
            <div class="InformationLayout">
                <div class="triangle"></div>
                <div class="u_banner">
                    <div class="head">
                        <div class="u_HeadPortrait"></div>
                    </div>
                    <div class="head_text">
                        <p><?php echo \think\Request::instance()->session('name'); ?></p>
                        <span>账号：<?php echo \think\Request::instance()->session('username'); ?></span>
                    </div>
                </div>
                <div class="u_recent">
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <div class="u_operate">
                    <a href="">修改密码</a>
                    <a href="<?php echo url('Personal/modify'); ?>">退出</a>
                </div>
            </div>
        </div>
        <!-- 用户头像结束 -->
    </div>
</div>

    </header>
    <!-- 内容模块 -->
    <div>
        <div class="w fudong">
        <!-- 侧边导航 -->
        <div class="user_info">
            <div class="su_HeadPortrait">

            </div>
            <div id="lis" class="side-menu">
                <h3>基本信息</h3>
                <a class="lis_a " href="#">个人资料</a><br>
                <a class="lis_a" href="#">安全设置</a><br>
                <h3>学习中心</h3>
                <a class="lis_a  purple" href="#">我的课程</a><br>     
                <a class="lis_a" href="#">我的证书</a><br>  
                <h3>订单管理</h3>
                <a class="lis_a" href="#">订单列表</a><br>   
                <h3>发票管理</h3>
                <a class="lis_a" href="#">发票信息登记</a><br>  
                <a class="lis_a" href="#">发票索取</a><br>  
            </div>
        </div>
        <div id="divs" class="divs">
                <div class="d_content  s_content">
                    <div class="table">
                        <div class="Underline_one"><h3>个人资料</h3></div>
                        <hr>
                    </div>
                    <div class="SetUp" style="display:flex;">
                        <form class="form" action="personalData" method="post">
                            <?php if(is_array($personalData) || $personalData instanceof \think\Collection || $personalData instanceof \think\Paginator): $i = 0; $__LIST__ = $personalData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value2): $mod = ($i % 2 );++$i;?>
                            <p><span>*</span>&nbsp;用&nbsp;&nbsp;&nbsp;户&nbsp;&nbsp;&nbsp;名：</p><span></span> <input value="<?php echo $value2['username']; ?>" disabled="disabled" class="username" name="username" type="text"><br>
                            <p><span>*</span>&nbsp;姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</p><span></span> <input value="<?php echo $value2['name']; ?>" disabled="disabled" class="name" name="name" type="text"><br>                                
                            <p><span>*</span>&nbsp;性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：</p><span></span> 
                            <select class="sex" disabled="disabled" type="text">
                                <option value="男"><?php echo $value2['sex']; ?></option>
                                <option value="女">女</option>    
                            </select>
                            <select class="sex NotOptional"  name="sex" type="text">
                                <option value="男">男</option>
                                <option value="女">女</option>    
                            </select>
                            <br>
                            <p><span>*</span>身份证号码：</p><span></span> <input onchange="isCardNo()" maxlength="19" value="<?php echo $value2['id_card']; ?>" class="id_card" disabled="disabled" name="id_card" type="text"><br>
                            <p><span>*</span>手&nbsp;机&nbsp;号&nbsp;码：</p><span></span> <input maxlength="13" value="<?php echo $value2['phone']; ?>" disabled="disabled" class="phone" name="phone" type="text"><br>
                            <p><span>*</span>企&nbsp;业&nbsp;名&nbsp;称：</p><span></span> &nbsp;<input value="<?php echo $value2['company']; ?>" disabled="disabled" class="company" name="company" type="text"><br>
                            <div class="info">
                                    <div>
                                    <span>*</span><span>所&nbsp;在&nbsp;区&nbsp;域：</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <select id="s_province" name="s_province"></select>  
                                    <select id="s_city" name="s_city" ></select>  
                                    <select id="s_county" name="s_county"></select>
                                    <script class="resources library" src="http://www.tp5.com/static/index/shengshiliandong/area.js" type="text/javascript"></script>
                                    <script type="text/javascript">_init_area();</script>
                                    </div>
                            </div>                               
                            <p><span>*</span>企&nbsp;业&nbsp;类&nbsp;型：</p> 
                            <select  class="company_type NotOptional" name="company_type">
                            <option value="餐饮单位">餐饮单位</option>
                            <option value="监管执法单位">监管执法单位</option>
                            <option value="生产单位">生产单位</option>
                            <option value="流通单位">流通单位</option>
                            </select>
                            <select disabled="disabled" class="company_type" name="company_type">
                            <option value="餐饮单位"><?php echo $value2['company_type']; ?></option>
                            <option value="监管执法单位">监管执法单位</option>
                            <option value="生产单位">生产单位</option>
                            <option value="流通单位">流通单位</option>
                            </select>
                            <br>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                            <input type="button" class="submit2" value="修改" style="cursor:pointer">
                            <input class="submit" value="保存" style="cursor:pointer" type="submit">                                
                        </form>
                        <div class="con4">
                                <canvas id="cvs" width="200" height="200"></canvas>	<span class="btn upload">上传头像<input style="cursor:pointer" type="file" class="upload_pic" id="upload" /></span>
                        </div>
                    </div>
                </div>
                <div class="d_content s_content">
                        <div class="table">
                                <div class="Underline_one"><h3>安全设置</h3></div>
                                <hr>
                        </div>
                        <div class="SetUp">
                            <form class="form" action="password" method="post">
                                <p><span>*</span>&nbsp;旧 密 码：</p><input class="password" maxlength="8" oninput = "value=value.replace(/[^\d]/g,'')" name="usedpassword" type="password">
                                <i class="iconfont icon-guanbi-yanjing chakan"></i>
                                <i style="display:none" class="iconfont icon-xiaoyanjing chakan2"></i><br>
                                <p><span>*</span>&nbsp;新 密 码：</p><input class="password" maxlength="8" oninput = "value=value.replace(/[^\d]/g,'')" name="password" type="password"><br>
                                <p><span>*</span>确认密码：</p><input class="confirmPassword"maxlength="8" oninput = "value=value.replace(/[^\d]/g,'')" name="ConfirmPassword" type="password"><br>
                                <div class="Verification">
                                    <input type="text" id="Verification" />
                                    <input type="button"  style="cursor:pointer" id="checkCode" class="code" onclick="createCode()" />
                                    <a href="#" onclick="createCode()">看不清楚</a><br>
                                    <input type="button"  style="cursor:pointer" class="Verification_one" value="验证" onclick="validate()" />
                                </div>
                            <input class="submit" value="确定修改" style="cursor:pointer" type="submit">                                
                            </form>
                        </div>
                </div>
                <div class="d_content">
                    <div class="table">
                        <div class="Underline_one"><h3>我的课程</h3></div>
                        <hr>
                    </div>
                    <div class="curriculum">
                        <div></div>
                        <p>还没有添加课程哦</p>
                        <button>选购课程</button>
                    </div>
                    <div class="curriculum_two dis">
                        <ul>
                            <li>
                                <a href="">
                                    <div class="img"></div>
                                    <div class="subject">
                                        <h3>课程名称：<span>2017第一期湖北省食品安全管理员</span></h3>
                                        <p>培训类别：<span>食品安全管理员</span></p>
                                        <p>行业领域：<span>餐饮领域</span></p>
                                        <p>培训课时：<span>40学时</span></p>
                                        <p>学习进度<span></span></p><div id="sample_goal"></div><button>开始考试</button>
                                        <button>继续学习</button>
                                    </div>
                                </a>
                                <hr> 
                            </li>
                        </ul>
                    </div>
                </div>  
                <div class="d_content s_content">
                    <div class="table"> 
                        <div class="Underline_one"><h3>我的证书</h3></div>
                        <hr>
                    </div>
                    <div class="curriculum">
                        <div></div>
                        <p>还没有添加课程哦</p>
                        <button>选购课程</button>
                    </div>
                    <div class="certificate">
                            <ul>
                                    <li>
                                        <a href="">
                                            <div class="img"></div>
                                            <div class="subject">
                                                <h3>课程名称<span>2017第一期湖北省食品安全管理员</span></h3>
                                                <p>证书编号：<span>阿发发发打发打发</span></p>
                                                <p>参加培训：<span>啊打发到沙发法大师傅</span></p>
                                                <p>培训日期：<span>阿道夫安抚啊发的fa</span></p>
                                                <p>有效期限：<span> 案发当时啊士大夫as</span></p>
                                            </div>
                                        </a>
                                        <hr>
                                    </li>   
                                    <li>
                                        <a href="">
                                            <div class="img"></div>
                                            <div class="subject">
                                                <h3>课程名称<span>2017第一期湖北省食品安全管理员</span></h3>
                                                <p>证书编号：<span>阿道夫暗室逢灯阿德f</span></p>
                                                <p>参加培训：<span>发放啊士大夫阿三fa</span></p>
                                                <p>培训日期：<span>发啊安德空间的急啊急森撒阿德fd</span></p>
                                                <p>有效期限：<span>发达的发法撒旦</span></p>
                                            </div>
                                        </a>
                                        <hr>
                                    </li>
                            </ul>
                    </div>
                </div>
                <div class="d_content s_content">
                    <div class="table">
                        <div class="Underline_one"><h3>订单列表</h3></div>
                        <hr>
                    </div>
                    <div class="curriculum dis">
                        <div></div>
                        <p>还没有添加课程哦</p>
                        <button>选购课程</button>
                    </div>
                    <table id="tab_c">
                            <thead>
                              <tr>
                                  <th><input type="checkbox"></th>
                                <th class="checkbox checkbox-primary">
                                    
                                  <label for="selectAll">订单编号</label>
                                </th>
                                <th>产品</th>
                                <th>类型</th>
                                <th>创建时间</th>
                                <th>支付/开通时间</th>
                                <th>状态</th>
                                <th>原价</th>
                                <th>应付金额</th>
                                <th>操作</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?>
                              <tr>
                                  <th><input type="checkbox"></th>
                                  <th><?php echo $value['ApplicationTime']; ?></th>
                                  <th><?php echo $value['raised']; ?></th>
                                  <th><?php echo $value['value']; ?></th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                  <th><button>支付</button></th>
                              </tr>
                              <?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                </div>
                <div class="d_content s_content">
                    <div class="table">
                        <div class="Underline_one"><h3>发票信息</h3></div>
                        <hr>
                    </div>
                    <div class="Administration">
                             
                        <div class="Administration_one Transformation">
                                <div>
                                        <p>发票信息有效 <span><a href="#" class="modify">修改发票信息</a></span></p>
                                    </div>
                            <?php if(is_array($lias) || $lias instanceof \think\Collection || $lias instanceof \think\Paginator): $i = 0; $__LIST__ = $lias;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lias): $mod = ($i % 2 );++$i;?>
                            <div>
                                <p>发票抬头：<span><?php echo $lias['ApplicationTime']; ?></span></p>
                            </div>
                            <div>
                                <p>开局类型：<span><?php echo $lias['radio']; ?></span></p>
                            </div>
                            <div>
                                <p>发票类型：<span>增值税普通发票</span></p>
                            </div>
                            <div>
                                <p>税务登记证号：<span><?php echo $lias['Taxcard']; ?></span></p> 
                            </div>
                            <div>
                                <p>基本开户银行名称：<span><?php echo $lias['bank']; ?></span></p>
                            </div>
                            <div>
                                <p>基本开户账号：<span><?php echo $lias['Account']; ?></span></p>
                            </div>
                            <div>
                                <p>注册场所地址：<span><?php echo $lias['address']; ?></span></p>
                            </div>
                            <div>
                                <p>注册固定电话：<span><?php echo $lias['Telephone']; ?></span></p>
                            </div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        <div class="Administration_two">
                            <div class="Administration_sonone">
                                <input class="Return_two" type="submit" value="返回" style="width:70px;height:30px;">
                                <form action="Personal/SubmissionOne" method="post">
                                <div>
                                &nbsp;&nbsp;<p>发票抬头：<span>个人</span></p>
                                </div>
                                <div>
                                 <p><span>*</span>开局类型：</p>
                                 <label><input name="radio" type="radio" value="个人" checked="checked">个人</label>
                                 <label><input name="radio" class="radio_one" value="企业" type="radio" >企业</label>
                                </div>
                                <div>
                               
                                </div>
                                <div>
                                &nbsp;&nbsp;<p>发票类型：</p><span>增值税普通发票</span>
                                </div>
                                <div>
                                    <input type="submit" value="提交">
                                </div>
                                </form>
                            </div>
                            <div class="Administration_sontwo">
                                <input class="Return_one" type="submit" value="返回" style="width:70px;height:30px;">
                                <form action="Submission" method="post">
                                <div style="margin-left: 6px;">   
                                 <p><span>*</span>开局类型：</p>
                                 <label><input name="radio" class="radio_two" value="个人" type="radio">个人</label>
                                 <label><input name="radio" type="radio" value="企业" checked="checked">企业</label>
                                </div>
                                <div style="margin-left: 6px;" class="text">
                                    <p><span>*</span>发票抬头：</p>
                                    <input name="ApplicationTime" class="input1" type="text" placeholder="请填写您营业执照上的全称">
                                    <span class="span span1">发票抬头不能为空</span>
                                </div>
                                <div style="margin-left: 6px;">
                                    <p><span>*</span>发票类型：</p>
                                    <input class="radio_two" checked="checked" type="radio">组织（非企业）增值税普通发票
                                </div>
                                <div style="margin-left: -25px;" class="text">
                                    <p><span>*</span>税务登记证号：</p>
                                    <input name="Taxcard" class="input2"  onkeyup="value=value.replace(/[^\d]/g,'')" type="text" placeholder="请填写15到20有效纳税人识别号">
                                    <span class="span span2">发票抬头不能为空</span>
                                </div>
                                <div class="text">
                                    <p><span>*</span>基本开户银行名称：</p>
                                    <input name="bank" class="input3" type="text" placeholder="请填写您开户许可证上的开户银行">
                                    <span class="span span3">发票抬头不能为空</span>
                                </div>
                                <div class="text">
                                    <p><span>*</span>基本开户账号：</p>
                                    <input name="Account" class="input4" type="text"  onkeyup="value=value.replace(/[^\d]/g,'')" placeholder="请填写您开户许可证上的银行账号">
                                    <span class="span span4">发票抬头不能为空</span>
                                </div>
                                <div class="text">
                                    <p><span>*</span>注册场所地址：</p>
                                    <input name="address" class="input5" type="text" placeholder="请填写您营业执照上的注册地址">
                                    <span class="span span5">发票抬头不能为空</span>
                                </div>
                                <div style="margin-left: 7px;" class="text">
                                    <p><span>*</span>注册电话：</p>
                                    <input name="Telephone" class="input6"  onkeyup="value=value.replace(/[^\d]/g,'')" maxlength="11" type="text" placeholder="请填写您公司的有效联系电话">
                                    <span class="span span6">发票抬头不能为空</span>
                                </div>
                                <div>
                                    <input type="submit" value="提交">
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d_content s_content">
                    <div class="table">
                        <div class="Underline_one"><h3>发票索取</h3></div>
                        <hr>
                    </div>
                    <div class="container">
                            <table id="tab_c">
                                    <thead>
                                      <tr>
                                        <th><input type="checkbox"></th>
                                        <th class="checkbox checkbox-primary">
                                                
                                          <label for="selectAll">订单编号</label>
                                        </th>
                                        <th>产品类型</th>
                                        <th>类型</th>
                                        <th>订单支付时间</th>
                                        <th>订单实付金额</th>
                                        <th>可开票金额</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(is_array($invorce) || $invorce instanceof \think\Collection || $invorce instanceof \think\Paginator): $i = 0; $__LIST__ = $invorce;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$invorce): $mod = ($i % 2 );++$i;?>
                                      <tr>
                                          <th><input type="checkbox"></th>
                                          <th><?php echo $invorce['ApplicationTime']; ?></th>
                                          <th><?php echo $invorce['raised']; ?></th>
                                          <th><?php echo $invorce['value']; ?></th>
                                          <th></th>
                                          <th></th>
                                          <th></th>
                                      </tr>
                                      <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </tbody>
                                    <div>
                                        
                                    </div>
                                </table>
                    </div>
                </div>
                <div class="d_content s_content">
                    <div class="table">
                        <div class="Underline_one"><h3>发票列表</h3></div>
                        <hr>
                    </div>
                    <div class="next-tabs-tabpane">
                        <div class="serarch-type">  
                            <div class="container">
                                    <table id="tab_c">
                                            <thead>
                                              <tr>
                                                <th class="checkbox checkbox-primary">
                                                  <label for="selectAll">订单编号</label>
                                                </th>
                                                <th>发票抬头</th>
                                                <th>发票总额</th>
                                                <th>发票性质</th>
                                                <th>发票状态</th>
                                                <th>备注</th>
                                                <th>操作</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?>
                                              <tr>
                                                  <th><?php echo $value['ApplicationTime']; ?></th>
                                                  <th><?php echo $value['raised']; ?></th>
                                                  <th><?php echo $value['value']; ?></th>
                                                  <th></th>
                                                  <th></th>
                                                  <th></th>
                                                  <th></th>
                                              </tr>
                                              <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </tbody>
                                            <div>
                                                    
                                                </div>
                                        </table>
                                </div>
                        </div>
                    </div>
                </div>
        </div>
        </div>
    </div>
    <!-- 尾部 -->
    <div></div>
    <script>
    function number(that){
        that.value=that.value.replace(/\D/g,"");
    }
    </script>
    <script>
        
        function plusXing (str,frontLen,endLen) { 
        $str =  $('.id_card').val();
        var frontLen = 4;
        var endLen = 4;
        var len = str.length-frontLen-endLen;
        var xing = '';
        for (var i=0;i<len;i++) {
        xing+='*';
        }
        return $str.substring(0,frontLen)+xing+$str.substring($str.length-endLen);
        }
    </script>
    <script>
    //身份证号码验证
function isCardNo() { 
  // 身份证号码为15位或者18位，15位时全为数字，18位前17位为数字，最后一位是校验位，可能为数字或字符X 
    var reg = /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/; 
    if(reg.test($("#id_card").val()) === false) { 
        alert("身份证输入不合法"); 
        return false; 
  } 
} 
//密码英文+数字验证
function CheckPassWord() { //密码必须包含数字和字母
    var reg = /^(?![^a-zA-Z]+$)(?!\D+$)/;
    if (reg.test($("#password").val()) === false){
        alert('密码格式错误');
        return false;
    }
}
</script>
    <script>
        $('.submit2').click(function(){
            $("input[ disabled='disabled']").attr('disabled',false);
            $(".NotOptional").css("display",'inline-block');
            $("select[disabled='disabled']").css("display",'none');
            $("div[disabled='disabled']").css("display",'none');
        });
    </script>
    <script>
        $('.chakan').click(function(){
            $("input[type='password']").attr('type','text');
            $('.chakan').css('display','none');
            $('.chakan2').css('display','inline-block');
        })
        $('.chakan2').click(function(){
            $("input[class='password']").attr('type','password');
            $("input[class='confirmPassword']").attr('type','password');
            $('.chakan2').css('display','none');
            $('.chakan').css('display','inline-block');
        })
    </script>
    <script>
        $(".input1").blur(function(){
        if($(".input1").val()==""){
                $(".span1").css("display","inline-block");
           } 
           else{
            $(".span1").css("display","none");
           }
    })
        $(".input2").blur(function(){
        if($(".input2").val()==""){
                $(".span2").css("display","inline-block");
           } 
           else{
            $(".span2").css("display","none");
           }
    })
        $(".input3").blur(function(){
        if($(".input3").val()==""){
                $(".span3").css("display","inline-block");
           } 
           else{
            $(".span3").css("display","none");
           }
    })
        $(".input4").blur(function(){
        if($(".input4").val()==""){
                $(".span4").css("display","inline-block");
           } 
           else{
            $(".span4").css("display","none");
           }
    })
        $(".input5").blur(function(){
        if($(".input5").val()==""){
                $(".span5").css("display","inline-block");
           } 
           else{
            $(".span5").css("display","none");
           }
    })
        $(".input6").blur(function(){
        if($(".input6").val()==""){
                $(".span6").css("display","inline-block");
           } 
           else{
            $(".span6").css("display","none");
           }
    })
    </script>
    <script>
         $(".radio_one").click(function(){
            $(".Administration_sonone").css("display","none");
            $(".Administration_sontwo").css("display",'block');
        })
        $(".radio_two").click(function(){
            $(".Administration_sontwo").css("display","none");
            $(".Administration_sonone").css("display",'block');
        })
    </script>
    <script>
    $(function () {
        $('#build').click(build);//.trigger('click');
        $('#cells, #rows').keyup(function (e) {
            if (e.keyCode === 13) {
                build();
            }
        });
    });

    function build() {
        var cells = $('#cells').val(),
            rows = $('#rows').val(),
            i, j, row,
            columns = [],
            data = [];

        for (i = 0; i < cells; i++) {
            columns.push({
                field: 'field' + i,
                title: 'Cell' + i
            });
        }
        for (i = 0; i < rows; i++) {
            row = {};
            for (j = 0; j < cells; j++) {
                row['field' + j] = 'Row-' + i + '-' + j;
            }
            data.push(row);
        }
        $('#table').bootstrapTable('destroy').bootstrapTable({
            columns: columns,
            data: data
        });
    }

    function idFormatter(value) {
        return value + 100;
    }
</script>
    <script type="text/javascript">
        //本小插件支持移动端哦
        
        //这里是初始化
        $('.filter-box').selectFilter({
            callBack : function (val){
                //返回选择的值
                console.log(val+'-是返回的值')
            }
        });
    </script>
    <script>
        $(".modify").click(function(){
            $(".Administration_one").css("display","none");
            $(".Administration_two").css("display",'block');
        });
        $(".Return_two").click(function(){
            $(".Administration_one").css("display","block");
            $(".Administration_two").css("display",'none');
        });
        $(".Return_one").click(function(){
            $(".Administration_one").css("display","block");
            $(".Administration_two").css("display",'none');
        })
    </script>
    <script>
        $(document).ready(function(){
    $('#sample_goal').goalProgress({
        goalAmount: 100,
        textBefore: '',
        currentAmount:50,
        textAfter: '%                            '
    });
});
    </script>
    <script>
        
        $(function(){
	        $('.date_picker').date_input();
	    })

    </script>
    <script>
        $(".HeadPortrait").hover(function(){
            $(".InformationLayout").css("display","block")
        },function(){
            $(".InformationLayout").css("display","none")
        });
        $(".InformationLayout").hover(function(){
            $(".InformationLayout").css("display","block")
        },function(){
            $(".InformationLayout").css("display","none")
        })
    </script>
    <script>
        $(".lis_a").each(function(index){
            $(this).click(function(){
                $(this).addClass("purple").siblings("a").removeClass("purple");
                $(".d_content").eq(index).removeClass("s_content").siblings().addClass("s_content");
            })
        })
    </script>
    <script>
            //获取上传按钮
            var input1 = document.getElementById("upload");
        if (typeof FileReader === 'undefined') {
            //result.innerHTML = "抱歉，你的浏览器不支持 FileReader"; 
            input1.setAttribute('disabled', 'disabled');
        } else {
            input1.addEventListener('change', readFile, false);
            /*input1.addEventListener('change',function (e){
     	console.log(this.files);//上传的文件列表
     },false); */
        }

        function readFile() {
            var file = this.files[0]; //获取上传文件列表中第一个文件
            if (!/image\/\w+/.test(file.type)) {
                //图片文件的type值为image/png或image/jpg
                alert("文件必须为图片！");
                return false;
            }
            // console.log(file);
            var reader = new FileReader(); //实例一个文件对象
            reader.readAsDataURL(file); //把上传的文件转换成url
            //当文件读取成功便可以调取上传的接口
            reader.onload = function(e) {
                // console.log(this.result);//文件路径
                // console.log(e.target.result);//文件路径
                /*var data = e.target.result.split(',');
		var tp = (file.type == 'image/png')? 'png': 'jpg';
		var imgUrl = data[1];//图片的url，去掉(data:image/png;base64,)
		//需要上传到服务器的在这里可以进行ajax请求
		// console.log(imgUrl);
		// 创建一个 Image 对象 
		var image = new Image();
		// 创建一个 Image 对象 
		// image.src = imgUrl;
		image.src = e.target.result;
		image.onload = function(){
			document.body.appendChild(image);
		}*/
                var image = new Image();
                // 设置src属性 
                image.src = e.target.result;
                var max = 200;
                // 绑定load事件处理器，加载完成后执行，避免同步问题
                image.onload = function() {
                    // 获取 canvas DOM 对象 
                    var canvas = document.getElementById("cvs");
                    // 如果高度超标 宽度等比例缩放 *= 
                    /*if(image.height > max) {
				image.width *= max / image.height; 
				image.height = max;
			} */
                    // 获取 canvas的 2d 环境对象, 
                    var ctx = canvas.getContext("2d");
                    // canvas清屏 
                    ctx.clearRect(0, 0, canvas.width, canvas.height);
                    // 重置canvas宽高
                    /*canvas.width = image.width;
			canvas.height = image.height;
			if (canvas.width>max) {canvas.width = max;}*/
                    // 将图像绘制到canvas上
                    // ctx.drawImage(image, 0, 0, image.width, image.height);
                    ctx.drawImage(image, 0, 0, 200, 200);
                    // 注意，此时image没有加入到dom之中
                };
            }
        };
    </script>
    <script>
var code; //在全局定义验证码    
//产生验证码   
window.onload = function() {
	createCode();
}
 
function createCode() {
	code = "";
	var codeLength = 4; //验证码的长度   
	var checkCode = document.getElementById("checkCode");
	var random = new Array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R',
		'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',); //随机数   
	for(var i = 0; i < codeLength; i++) { //循环操作   
		var charIndex = Math.floor(Math.random() * 36); //取得随机数的索引   
		code += random[charIndex]; //根据索引取得随机数加到code上   
	}
	checkCode.value = code; //把code值赋给验证码   
}
//校验验证码   
function validate() {
	var inputCode = document.getElementById("Verification").value.toUpperCase(); //取得输入的验证码并转化为大写         
	if(inputCode.length <= 0) { //若输入的验证码长度为0   
		alert("请输入验证码！"); //则弹出请输入验证码   
	} else if(inputCode != code) { //若输入的验证码与产生的验证码不一致时   
		alert("验证码输入错误！"); //则弹出验证码输入错误   
		createCode(); //刷新验证码   
	} else { //输入正确时   
		alert("验证成功"); //弹出^-^   
	}
}
    </script>
    <script>
            //身份证号码验证
        function isCardNo() { 
          // 身份证号码为15位或者18位，15位时全为数字，18位前17位为数字，最后一位是校验位，可能为数字或字符X 
            var reg = /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/; 
            if(reg.test($("#id_card").val()) === false) { 
                alert("身份证输入不合法"); 
                return false; 
          } 
        } 
        //密码英文+数字验证
        function CheckPassWord() { //密码必须包含数字和字母
            var reg = /^(?![^a-zA-Z]+$)(?!\D+$)/;
            if (reg.test($("#password").val()) === false){
                alert('密码格式错误');
                return false;
            }
        }
        </script>
</body>
</html>
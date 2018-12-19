<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"C:\Users\HP\Desktop\PHP5.0\public/../application/index\view\register\Register.html";i:1541570887;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://www.tp5.com/static/index/css/citySelect.css">
    <script src="http://www.tp5.com/static/index/js/jquery.js"></script>
    <script src="http://www.tp5.com/static/index/js/citySelect.js"></script>
    <title>人人食品安全培训考核网</title>
    <style>
        *{
            margin: 0;
            padding: 0;


        }
        .w{
    width: 1280px;
    margin: 0 auto;
}
        body{
            height: 100%;
            background: url(http://www.tp5.com/static/index/imags/timg.jpg) no-repeat;
            background-size: 1510px;
        }
        .zucekuang{
            width: 600px;
            /* background-color: #c4c4c4; */
            float: right;
            margin-top: 30px;
            opacity: 0.8;
        }
        .zucekuang ul{
            margin-left: 75px;
        }
        .zucekuang li{
            list-style: none;
        }
        div:nth-child(1){
            overflow: hidden;
        }
        .zucekuang input{
            width: 250px;
            height: 30px;
            margin-top: 20px;
        }
        .zucekuang li:nth-child(5){
            margin-top: 20px;
        }
        .sex{
            width: 250px;
            height: 30px;
            margin-top: 20px;   
        }
        .quyu{
            /* float: left; */
            margin-left: 0;
            margin-top: 20px;
        }
        .dropDown{
            position: absolute;
        }
.info{margin-top: 20px;}
.info #show{ color:#3399FF; }
.info select{height: 34px;}
.bottom{ text-align:right; font-size:12px; color:#CCCCCC; width:1000px;}
.Denglu{
  margin-left: 140px;
}
.Denglu input{
  display: inline-block;
  width: 120px;
  height: 30px;
  float: left;
  margin-right: 10px;
  border: none;
  background-color: #349ce4;
  border-radius: 10px;  
  outline: none;
  opacity: 0.8;
}
.Denglu input:nth-child(2){
  margin-right: 0;
}
.anniu{
    margin-top: 10px;
    font-size: 14px;
}
.anniu input{
    vertical-align: middle;
    margin: -4px 2px 0px 2px;
}
.tiaokuan{
    width: 680px;
    height: 480px;
    display: none;
    position: absolute;
    top: 200px;
    left: 150px;
}
#xx{
    width: 20px;
    height: 20px;
    background-color: hotpink;
    float: right;
}
#xx img{
    width: 20px;
    height: 20px;
    cursor:pointer;
}
.neirong{
    width: 660px;
    height: 480px;
    overflow-y:auto; overflow-x:auto;
    background-color: #fff;;
}
.neirong ul{
    margin-left: 20px;
    font-size: 14px;
}
.neirong li:nth-child(1){
    text-align: center;
}
.neirong p{
    text-indent:2em;
}
.o{
    margin-top: 20px;
    display: inline-block
    
}
.span4{
    
}
.code {
				font-family: Arial;
				font-style: italic;
				font-weight: bold;
				border: 0;
				letter-spacing: 3px;
				color: blue;
			}
.Verification{
    margin-left: 95px;
}
.Verification input{
    width: 100px;
}
    </style>
</head>
<body>
    <div class="w">
    <div class="zucekuang">
        <form action="register/tijiao" method="post">
            <span>账号： </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="input" name="username" type="text" onKeyUp="value=value.replace(/[\W]/g,'')" placeholder="手机/邮箱"><span style="display:none;color:red;" class="span">此项不能为空</span><br>
            <span>密码：</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="input1" id="password" onchange="CheckPassWord()" maxlength="8" name="password" type="password" placeholder="密码长度8位 数字+字母"><span class="span1" style="display:none;color:red;">此项不能为空</span><br>
            <span>确认密码：</span>&nbsp;&nbsp;&nbsp;<input class="input2" name="ConfirmPassword" id="confirmPassword" type="password" maxlength="8" placeholder="确认密码"><span class="span2" style="display:none;color:red;">密码不能为空</span><br>
            <span>姓名&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input class="input3" name="name" onkeyup="this.value=this.value.replace(/[^\u4e00-\u9fa5]/g,'')" type="text" placeholder="姓名"><span class="span3" style="display:none;color:red;">此项不能为空</span><br>
            <span>性别：</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="sex" name="sex">
                    <option value="男">男</option>
                    <option value="女">女</option>
                </select> <br>
            <span>身份证号码：</span><input class="input4" name="id_card" type="text" maxlength="19" onchange="isCardNo()" placeholder="身份证号码" id="id_card"><span class="span4" style="display:none;color:red;">此项不能为空</span><br>
            <span>手机号码：</span>&nbsp;&nbsp;&nbsp;<input name="phone" class="input5" type="text" maxlength="11" onkeyup="this.value=this.value.replace(/\D/g,'')" placeholder="手机号码"><span class="span5" style="display:none;color:red;">此项不能为空</span><br>
            <span>企业名称：</span>&nbsp;&nbsp;&nbsp;<input name="company" class="input6" type="text" placeholder="企业名称"><span class="span6" style="display:none;color:red;">此项不能为空</span><br>
                    <div class="info">
                                <div>
                                <span>所在区域：</span>&nbsp;&nbsp;&nbsp;<select id="s_province" name="s_province"></select>  
                                <select id="s_city" name="s_city" ></select>  
                                <select id="s_county" name="s_county"></select>
                                <script class="resources library" src="http://www.tp5.com/static/index/shengshiliandong/area.js" type="text/javascript"></script>
                                <script type="text/javascript">_init_area();</script>
                                </div>
                                <div id="show"></div>
                            </div><span class="span7" style="display:none;color:red;">不能为空</span>
                        <span>企业类型：</span>&nbsp;&nbsp;&nbsp;<select class="sex" name="company_type" style="margin-top:20px;">
                        <option value="餐饮单位">餐饮单位</option>
                    <option value="监管执法单位">监管执法单位</option>
                    <option value="生产单位">生产单位</option>
                    <option value="流通单位">流通单位</option>
                </select>
                <div class="Verification">
                    <input type="text" id="Verification" />
                    <input type="button" id="checkCode" class="code" onclick="createCode()" />
                    <a href="#" onclick="createCode()">看不清楚</a><br>
                    <input type="button" value="验证" onclick="validate()" />
                </div>
                <div class="anniu">
                        <input type="checkbox" id="checkbox" checked="checked" style="outline:none; width:14px;" onclick="checkboxOnclick()"><span>我已阅读并接受</span>
                        <a id="tiaokuan" style="cursor:pointer; color:#ffe001;">《人人食品安全培训考核网服务条款》</a>
                </div>
                <div class="Denglu">
                        <input type="submit" id="submit" style="cursor:pointer" value="注册">
                </div>
    </form>
        <div class="tiaokuan">
            <div id="xx">
                <img src="http://www.tp5.com/static/index/imags/shanchu2.png" alt="">
            </div>
            <div class="neirong">
                <ul>
                    <li><h1>服务条款</h1></li>
                    <li><p>人人食品安全培训考核网由武汉食安信科技股份有限公司（以下简称为“食安信科技”）拥有和运作请用户仔细阅读以下全部内容。如用户不同意本服务条款任意内容，请不要注册或使用人人食品安全培训考核网服务。如用户通过进入注册程序并勾选“我已阅读并接受《服务条款》”，即表示用户与食安信科技已达成协议，自愿接受本服务条款的所有内容。此后，用户不得以未阅读本服务条款内容作任何形式的抗辩。</p></li>
                    <li class="o"><h3>一．服务内容</h3></li>
                    <li><p>人人食品安全培训考核网的具体服务内容由武汉食安信科技股份有限公司根据实际情况提供，例如个人信息、个人分享信息以及评论，在线交流等。人人食品安全培训考核网保留变更、中断或终止部分网络服务的权利。
                        人人食品安全培训考核网保留根据实际情况随时调整人人食品安全培训考核网平台提供的服务种类、形式。人人食品安全培训考核网不承担因业务调整给用户造成的损失。</p>
                        </li>
                    <li class="o"><h3>二．注册义务</h3></li>
                    <li><p>为了能使用本服务，您同意以下事项：依本服务注册提示请您填写正确的注册邮箱、密码等信息，并确保今后更新的登录名称、密码、头像等资料的有效性和合法性。若您提供任何违法、不道德或人人食品安全培训考核网认为不适合在人人食品安全培训考核网上展示的资料；或者人人食品安全培训考核网有理由怀疑你的资料属于程序或恶意操作，人人食品安全培训考核网有权暂停或终止您的帐号，并拒绝您于现在和未来使用本服务之全部或任何部分。
                        人人食品安全培训考核网无须对任何用户的任何登记资料承担任何责任，包括但不限于鉴别、核实任何登记资料的真实性、正确性、完整性、适用性及/或是否为最新资料的责任。</p>
                        </li>
                    <li class="o"><h3>三．内容使用权</h3></li>
                    <li><p>用户在人人食品安全培训考核网发表的内容（包含但不限于人人食品安全培训考核网目前各产品功能里的内容）仅表明其个人的立场和观点，并不代表人人食品安全培训考核网的立场或观点。作为内容的发表者，需自行对所发表内容负责，因所发表内容引发的一切纠纷，由该内容的发表者承担全部法律及连带责任。人人食品安全培训考核网不承担任何法律及连带责任。
                        用户在人人食品安全培训考核网发布侵犯他人知识产权或其他合    法权益的内容，人人食品安全培训考核网有权予以删除，人人食品安全培训考核网不承担任何法律及连带责任，并保留移交司法机关处理的权利。
                        用户不得使用人人食品安全培训考核网服务发送或传播敏感信息和违反国家法律制度的信息，包括但不限于下列信息：
                        反对宪法所确定的基本原则的； 危害国家安全，泄露国家秘密，颠覆国家政权，破坏国家统一的； 损害国家荣誉和利益的； 煽动民族仇恨、民族歧视，破坏民族团结的； 破坏国家宗教政策，宣扬邪教和封建迷信的； 散布谣言，扰乱社会秩序，破坏社会稳定的； 散布淫秽、色情、赌博、暴力、凶杀、恐怖或者教唆犯罪的； 侮辱或者诽谤他人，侵害他人合法权益的； 含有法律、行政法规禁止的其他内容的。
                        用户承诺发表言论要：爱国、守法、自律、真实、文明。不传输任何非法的、骚扰性的、中伤他人的、辱骂性的、恐吓性的、伤害性的、庸俗的，淫秽的、危害国家安全的、泄露国家机密的、破坏国家宗教政策和民族团结的以及其它违反法律法规及政策的内容。若用户的行为不符合以上提到的服务条款，人人食品安全培训考核网将作出独立判断立即取消用户服务帐号。用户需对自己在网上的行为承担法律责任，人人食品安全培训考核网不承担任何法律及连带责任。</p>
                        </li>
                    <li class="o"><h3>四．隐私保护</h3></li>
                    <li><p>保护用户隐私是人人食品安全培训考核网的重点原则，人人食品安全培训考核网通过技术手段、提供隐私保护服务功能、强化内部管理等办法充分保护用户的个人资料安全。
                        具体隐私政策参见人人食品安全培训考核网的《隐私政策》。</p>
                        </li>
                    <li class="o"><h3>五．用户管理</h3></li>
                    <li><p>用户独立承担其发布内容的责任。用户对服务的使用必须遵守所有适用于服务的地方法律、国家法律和国际法律。用户承诺：
                        （1）用户在人人食品安全培训考核网的网页上发布信息或者利用人人食品安全培训考核网的服务时必须符合中国有关法规(部分法规请见附录)，不得在人人食品安全培训考核网的网页上或者利用人人食品安全培训考核网的服务制作、复制、发布、传播以下信息：
                        (a) 违反宪法确定的基本原则的；
                        (b) 危害国家安全，泄露国家秘密，颠覆国家政权，破坏国家统一的；
                        (c) 损害国家荣誉和利益的；
                        (d) 煽动民族仇恨、民族歧视，破坏民族团结的；
                        (e) 破坏国家宗教政策，宣扬邪教和封建迷信的；
                        (f) 散布谣言，扰乱社会秩序，破坏社会稳定的；
                        (g) 散布淫秽、色情、赌博、暴力、恐怖或者教唆犯罪的；
                        (h) 侮辱或者诽谤他人，侵害他人合法权益的；
                        (i) 煽动非法集会、结社、游行、示威、聚众扰乱社会秩序的；
                        (j) 以非法民间组织名义活动的；(k) 含有法律、行政法规禁止的其他内容的。
                        （2）用户在人人食品安全培训考核网的网页上发布信息或者利用人人食品安全培训考核网的服务时还必须符合其他有关国家和地区的法律规定以及国际法的有关规定。
                        （3）用户不得利用人人食品安全培训考核网的服务从事以下活动：
                        (a) 未经允许，进入计算机信息网络或者使用计算机信息网络资源的；
                        (b) 未经允许，对计算机信息网络功能进行删除、修改或者增加的；
                        (c) 未经允许，对进入计算机信息网络中存储、处理或者传输的数据和应用程序进行删除、修改或者增加的；
                        (d) 故意制作、传播计算机病毒等破坏性程序的；
                        (e) 其他危害计算机信息网络安全的行为。
                        （4）用户不得以任何方式干扰人人食品安全培训考核网的服务。
                        （5）用户应遵守人人食品安全培训考核网的所有其他规定和程序。 用户须对自己在使用人人食品安全培训考核网服务过程中的行为承担法律责任。用户承担法律责任的形式包括但不限于：对受到侵害者进行赔偿，以及在人人食品安全培训考核网公司首先承担了因用户行为导致的行政处罚或侵权损害赔偿责任后，用户应给予人人食品安全培训考核网公司等额的赔偿。用户理解，如果人人食品安全培训考核网发现其网站传输的信息明显属于上段第(1)条所列内容之一，依据中国法律，人人食品安全培训考核网有义务立即停止传输，保存有关记录，向国家有关机关报告，并且删除含有该内容的地址、目录或关闭服务器。用户使用人人食品安全培训考核网电子公告服务，包括电子布告牌、电子白板、电子论坛、留言板等以交互形式为上网用户提供信息发布条件的行为，也须遵守本条的规定以及人人食品安全培训考核网将专门发布的电子公告服务规则，上段中描述的法律后果和法律责任同样适用于电子公告服务的用户。若用户的行为不符合以上提到的服务条款，人人食品安全培训考核网公司将作出独立判断立即取消用户服务帐号。</p>
                        </li>
                    <li class="o"><h3>六．免责声明</h3></li>
                    <li><p>一旦您注册成为用户即表示您与人人食品安全培训考核网达成协议，完全接受本服务条款项下的全部条款。对免责声明的解释、修改及更新权均属于人人食品安全培训考核网所有。
                        1. 由于您将用户密码告知他人或与他人共享注册帐户，由此导致的任何个人信息的泄漏，或其他非因人人食品安全培训考核网原因导致的个人信息的泄漏，人人食品安全培训考核网不承担任何法律责任；
                        2. 任何第三方根据人人食品安全培训考核网各服务条款及声明中所列明的情况使用您的个人信息，由此所产生的纠纷，人人食品安全培训考核网不承认任何法律责任；
                        3. 任何由于黑客攻击、电脑病毒侵入或政府管制而造成的暂时性网站关闭，人人食品安全培训考核网不承担任何法律责任；
                        4. 我们鼓励用户充分利用人人食品安全培训考核网平台自由地张贴和共享自己的信息。您可以自由张贴图片等内容，但这些内容必须位于公共领域内，或者您拥有这些内容的使用权。同时，用户不应在自己的个人主页或社区中张贴其他受版权保护的内容。
                        5. 用户在人人食品安全培训考核网发布侵犯他人知识产权或其他合法权益的内容，人人食品安全培训考核网有权予以删除，并保留移交司法机关处理的权利。
                        6. 用户对于其创作并在人人食品安全培训考核网上发布的合法内容依法享有著作权及其相关权利。
                        7. 互联网是一个开放平台，用户将图片等资料上传到互联网上，有可能会被其他组织或个人复制、转载、擅改或做其它非法用途，用户必须充分意识此类风险的存在。用户明确同意其使用人人食品安全培训考核网服务所存在的风险将完全由其自己承担；因其使用人人食品安全培训考核网服务而产生的一切后果也由其自己承担，人人食品安全培训考核网对用户不承担任何责任。</p>
                        </li>
                    <li class="o"><h3>七．服务变更、中断或终止</h3></li>
                    <li><p>如因系统维护或升级的需要而需暂停网络服务、服务功能的调整，人人食品安全培训考核网将尽可能事先在网站上进行通告。
                        如发生下列任何一种情形，人人食品安全培训考核网有权单方面中断或终止向用户提供服务而无需通知用户：
                        1.用户提供的个人资料不真实；
                        2.用户违反本服务条款中规定的使用规则；
                        3.未经人人食品安全培训考核网同意，将人人食品安全培训考核网平台用于商业目的。</p>
                        </li>
                    <li class="o"><h3>八．服务条款的完善和修改</h3></li>
                    <li><p>人人食品安全培训考核网会有权根据互联网的发展和中华人民共和国有关法律、法规的变化，不时地完善和修改人人食品安全培训考核网服务条款。人人食品安全培训考核网保留随时修改服务条款的权利，用户在使用人人食品安全培训考核网平台服务时，有必要对最新的人人食品安全培训考核网服务条款进行仔细阅读和重新确认，当发生有关争议时，请以最新的服务条款为准。</p></li>
                    <li class="o"><h3>九．权利声明</h3></li>
                    <li><p>人人食品安全培训考核网及武汉食安信科技股份有限公司不行使、未能及时行使或者未充分行使本条款或者按照法律规定所享有的权利，不应被视为放弃该权利，也不影响人人食品安全培训考核网公司在将来行使该权利。在法律允许的最大范围内，人人食品安全培训考核网及武汉食安信科技股份有限公司保留对本服务条款的最终解释权。</p></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</body>
<script>

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
		alert("^-^"); //弹出^-^   
	}
}

</script>
<script>
    $("#tiaokuan").click(function(){
        $(".tiaokuan").css("display","block");
    })
    $("#xx").click(function(){
        $(".tiaokuan").css("display","none");
    })
</script>
<script>
    $(".input").blur(function(){
        if($(".input").val()==""){
                $(".span").css("display","inline-block");
           } 
           else{
            $(".span").css("display","none");
           }
    })
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
      
</script>

</html>
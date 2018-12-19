<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"C:\Users\HP\Desktop\PHP5.0\public/../application/index\view\model\model.html";i:1539231706;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="model" method="get">
    密 码：<input type="username" name="pwd1" /><br />
    确认密码：<input type="password" name="pwd2" onchange="checkpwd()">
    <div id="msg" style="color:resd;"></div>
    <input type="submit" style="cursor:pointer" value="注册">
    </form>
</body>
</html>
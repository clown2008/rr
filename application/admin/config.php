<?php
//配置文件
return [
    // 视图输出字符串内容替换
'view_replace_str'       => [
        '__PUBLIC__'=>SITE_URL.'/static/admin',
        '__ADMIN__'=>SITE_URL.'/admin',
        '__ROOT__' => '/',
    ],
];
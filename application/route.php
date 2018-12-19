<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// return [
//     '__pattern__' => [
//         'name' => '\w+',
//     ],
//     '[hello]'     => [
//     //    ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//     //    ':name' => ['index/hello', ['method' => 'post']],
//     ],
//        'hello/[:name]' =>['admin/index/hello',['method' =>'get','ext' => 'html']],
//         // 'index/index/hello',['method' =>'get','ext' => 'html'],
//        'today/:year/:month' =>['admin/index/today',['methid'=>'get'],['year'=>'\d{4}','month'=>'\d{2}']],
    

// ];

use think\Route;

//前台首页路由
Route::get('/','index/index/index');
Route::any('index/register/tijiao','index/register/tijiao');


//后台首页路由
Route::get('/houtai','admin/index/index');
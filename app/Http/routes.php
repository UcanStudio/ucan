<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::controller('/user','UserController');
Route::get('/u',function (){
    Cookie::queue('uid',199,10);
    return Cookie::get('uid');
});
//csrf防止跨域攻击
//局部中间件与全局中间件
//1局部中间件需要在kernel中routeMiddleware中注册
//2全局中间件需要在kernel中Middleware里面注册
//3局部中间件需要请求使用了中间件才能起作用，全局中间件所有的请求都会经过
//控制器的使用
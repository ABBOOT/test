<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//get请求
Route::get('abc',function () {
    return '222';
});

//post请求
Route::post('basic',function(){
    return 'aaa';
});
//match可以设置很多类型访问
Route::match(['get','post'],'multy1',function(){
   return 'multy1';
});
Route::any('multy2',function(){
    return 'multy2';
});
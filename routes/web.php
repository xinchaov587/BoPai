<?php

// 后台管理主页渲染
Route::get('/', 'StatusesController@index')->name('index');
// 用户登录页面渲染
Route::get('login', 'UserController@login_form')->name('login');
// 用户登录逻辑
Route::post('login', 'UserController@login')->name('login');
// 用户登出逻辑
Route::get('logout', 'UserController@logout')->name('logout');

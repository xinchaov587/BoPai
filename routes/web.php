<?php

// 后台管理主页渲染
Route::get('/', 'UserController@index')->name('index');
// 用户登录页面渲染
Route::get('login', 'UserController@login')->name('login');

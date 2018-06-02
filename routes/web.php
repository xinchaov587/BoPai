<?php

// 后台管理主页渲染
Route::get('/', 'StatusesController@index')->name('index');


// 管理员登录页面渲染
Route::get('login', 'AdminController@login_form')->name('login');
// 管理员登录逻辑
Route::post('login', 'AdminController@login')->name('login');
// 管理员登出逻辑
Route::get('logout', 'AdminController@logout')->name('logout');


// 用户列表
Route::get('user_lists', 'TableController@user_lists')->name('user_lists');
// 商户列表
Route::get('merchant_lists', 'TableController@merchant_lists')->name('merchant_lists');
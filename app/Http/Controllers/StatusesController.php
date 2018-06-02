<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusesController extends Controller
{
    /**
     * 登录过滤中间件
     *
     * UserController constructor.
     */
    public function __construct()
    {
        $this->middleware('login');
    }

    /**
     * 后台管理首页页面渲染
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('index');
    }
}

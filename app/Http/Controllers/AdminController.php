<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * 中间件
     *
     * UserController constructor.
     */
    public function __construct()
    {
        $this->middleware('login')->only('logout');  // 过滤未登录
        $this->middleware('check')->except('logout');  // 过滤已登录
    }

    /**
     * 用户登录页面渲染
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login_form()
    {
        return view('login');
    }

    /**
     * 管理员登录逻辑
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $login_data = $this->validate($request, [
            'username' => 'required|max:50|string',
            'password' => 'required|between:6,12|string'
        ], [
            'username.required' => '账号必须填写',
            'username.max' => '账号长度不能超过50个字符',
            'username.string' => '账号必须为字符串格式',
            'password.required' => '密码必须填写',
            'password.between' => '密码长度必须在6到12位之间',
            'password.string' => '密码必须为字符串格式'
        ]);

        $status = Auth::guard('admin')->attempt($login_data, $request->has('remember'));

        if ($status) {
            return redirect()->intended(route('index'))->with('success', '尊敬的 ' . Auth::guard('admin')->user()->username .' 欢迎回来! ');
        } else {
            return redirect()->back()->with('danger', '账号或密码错误, 请核对后再试');
        }
    }

    /**
     * 管理员退出登录
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::guard('admin')->logout();
        session()->flash('success', '您已成功退出登录');
        return redirect()->route('login');
    }
}

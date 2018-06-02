<?php

namespace App\Http\Controllers;

use App\User;

class TableController extends Controller
{
    /**
     * 中间件
     *
     * TableController constructor.
     */
    public function __construct( )
    {
        $this->middleware('login');
    }

    /**
     * 用户列表
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function user_lists()
    {
        $page = User::paginate(20);
        $users = $page->all();
        return view('user_tables', compact('users', 'page'));
    }

    /**
     * 商户列表
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function merchant_lists()
    {
        return view('merchant_tables');
    }
}

@extends('layouts.main')
@section('title', '用户列表')

@section('content')
    <div class="page-content">
        <div id="portlet-config" class="modal hide">
            <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button"></button>
                <h3>portlet Settings</h3>
            </div>
            <div class="modal-body">
                <p>Here will be a configuration form</p>
            </div>
        </div>
        <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN STYLE CUSTOMIZER -->
                    <div class="color-panel hidden-phone">
                        <div class="color-mode-icons icon-color"></div>
                        <div class="color-mode-icons icon-color-close"></div>
                        <div class="color-mode">
                            <p>THEME COLOR</p>
                            <ul class="inline">
                                <li class="color-black current color-default" data-style="default"></li>
                                <li class="color-blue" data-style="blue"></li>
                                <li class="color-brown" data-style="brown"></li>
                                <li class="color-purple" data-style="purple"></li>
                                <li class="color-grey" data-style="grey"></li>
                                <li class="color-white color-light" data-style="light"></li>
                            </ul>
                            <label>
                                <span>Layout</span>
                                <select class="layout-option m-wrap small">
                                    <option value="fluid" selected>Fluid</option>
                                    <option value="boxed">Boxed</option>
                                </select>
                            </label>
                            <label>
                                <span>Header</span>
                                <select class="header-option m-wrap small">
                                    <option value="fixed" selected>Fixed</option>
                                    <option value="default">Default</option>
                                </select>
                            </label>
                            <label>
                                <span>Sidebar</span>
                                <select class="sidebar-option m-wrap small">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected>Default</option>
                                </select>
                            </label>
                            <label>
                                <span>Footer</span>
                                <select class="footer-option m-wrap small">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected>Default</option>
                                </select>
                            </label>
                        </div>
                    </div>

                    <h3 class="page-title">
                        用户列表
                    </h3>

                    {{--<ul class="breadcrumb">--}}
                        {{--<li>--}}
                            {{--<i class="icon-home"></i>--}}
                            {{--<a href="index.html">Home</a>--}}
                            {{--<i class="icon-angle-right"></i>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#">Data Tables</a>--}}
                            {{--<i class="icon-angle-right"></i>--}}
                        {{--</li>--}}
                        {{--<li><a href="#">Responsive Tables</a></li>--}}
                    {{--</ul>--}}

                </div>
            </div>

            <div class="row-fluid">

                <div class="span12">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption"><i class="icon-cogs"></i>Flip Scroll</div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>

                        <div class="portlet-body flip-scroll">
                            <table class="table-bordered table-hover table-condensed flip-content">
                                <thead class="flip-content">
                                    <tr class="portlet box yellow">
                                        <th>ID</th>
                                        <th class="numeric">用户名</th>
                                        <th class="numeric">头像</th>
                                        <th class="numeric">手机号</th>
                                        <th class="numeric">昵称</th>
                                        <th class="numeric">支付宝</th>
                                        <th class="numeric">余额</th>
                                        <th class="numeric">操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr style="text-align: center">
                                        <td>{{ $user['id'] }}</td>
                                        <td>{{ $user['username'] }}</td>
                                        <td class="numeric">{{ $user['headimg'] }}</td>
                                        <td class="numeric">{{ $user['tel'] }}</td>
                                        <td class="numeric">{{ $user['nickname'] }}</td>
                                        <td class="numeric">{{ $user['third_payment'] }}</td>
                                        <td class="numeric">{{ $user['balance'] }}</td>
                                        <td class="numeric">9,395</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{ $page->links() }}
                </div>
            </div>
        </div>
    </div>
@stop
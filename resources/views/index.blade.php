@extends('layouts.main')
@section('title', '首页')

@section('content')
    <div class="page-content">
        @include('layouts.hint')
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

        <div id="portlet-config" class="modal hide">

            <div class="modal-header">

                <button data-dismiss="modal" class="close" type="button"></button>

                <h3>Widget Settings</h3>

            </div>

            <div class="modal-body">

                Widget settings form goes here

            </div>

        </div>

        <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

        <!-- BEGIN PAGE CONTAINER-->

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

                    <!-- END BEGIN STYLE CUSTOMIZER -->

                    <!-- BEGIN PAGE TITLE & BREADCRUMB-->

                    <h3 class="page-title">

                        Dashboard <small>statistics and more</small>

                    </h3>

                    <ul class="breadcrumb">

                        <li>

                            <i class="icon-home"></i>

                            <a href="index.html">Home</a>

                            <i class="icon-angle-right"></i>

                        </li>

                        <li><a href="#">Dashboard</a></li>

                        <li class="pull-right no-text-shadow">

                            <div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" data-tablet="" data-desktop="tooltips" data-placement="top" data-original-title="Change dashboard date range">

                                <i class="icon-calendar"></i>

                                <span></span>

                                <i class="icon-angle-down"></i>

                            </div>

                        </li>

                    </ul>

                    <!-- END PAGE TITLE & BREADCRUMB-->

                </div>

            </div>

            <!-- END PAGE HEADER-->

            <div id="dashboard">

                <!-- BEGIN DASHBOARD STATS -->

                <div class="row-fluid">

                    <div class="span3 responsive" data-tablet="span6" data-desktop="span3">

                        <div class="dashboard-stat blue">

                            <div class="visual">

                                <i class="icon-comments"></i>

                            </div>

                            <div class="details">

                                <div class="number">

                                    1349

                                </div>

                                <div class="desc">

                                    New Feedbacks

                                </div>

                            </div>

                            <a class="more" href="#">

                                View more <i class="m-icon-swapright m-icon-white"></i>

                            </a>

                        </div>

                    </div>

                    <div class="span3 responsive" data-tablet="span6" data-desktop="span3">

                        <div class="dashboard-stat green">

                            <div class="visual">

                                <i class="icon-shopping-cart"></i>

                            </div>

                            <div class="details">

                                <div class="number">549</div>

                                <div class="desc">New Orders</div>

                            </div>

                            <a class="more" href="#">

                                View more <i class="m-icon-swapright m-icon-white"></i>

                            </a>

                        </div>

                    </div>

                    <div class="span3 responsive" data-tablet="span6  fix-offset" data-desktop="span3">

                        <div class="dashboard-stat purple">

                            <div class="visual">

                                <i class="icon-globe"></i>

                            </div>

                            <div class="details">

                                <div class="number">+89%</div>

                                <div class="desc">Brand Popularity</div>

                            </div>

                            <a class="more" href="#">

                                View more <i class="m-icon-swapright m-icon-white"></i>

                            </a>

                        </div>

                    </div>

                    <div class="span3 responsive" data-tablet="span6" data-desktop="span3">

                        <div class="dashboard-stat yellow">

                            <div class="visual">

                                <i class="icon-bar-chart"></i>

                            </div>

                            <div class="details">

                                <div class="number">12,5M$</div>

                                <div class="desc">Total Profit</div>

                            </div>

                            <a class="more" href="#">

                                View more <i class="m-icon-swapright m-icon-white"></i>

                            </a>

                        </div>

                    </div>

                </div>

                <!-- END DASHBOARD STATS -->

                <div class="clearfix"></div>

                <div class="row-fluid">

                    <div class="span6">

                        <!-- BEGIN PORTLET-->

                        <div class="portlet solid bordered light-grey">

                            <div class="portlet-title">

                                <div class="caption"><i class="icon-bar-chart"></i>Site Visits</div>

                                <div class="tools">

                                    <div class="btn-group pull-right" data-toggle="buttons-radio">

                                        <a href="" class="btn mini">Users</a>

                                        <a href="" class="btn mini active">Feedbacks</a>

                                    </div>

                                </div>

                            </div>

                            <div class="portlet-body">

                                <div id="site_statistics_loading">

                                    <img src="media/image/loading.gif" alt="loading" />

                                </div>

                                <div id="site_statistics_content" class="hide">

                                    <div id="site_statistics" class="chart"></div>

                                </div>

                            </div>

                        </div>

                        <!-- END PORTLET-->

                    </div>

                    <div class="span6">

                        <!-- BEGIN PORTLET-->

                        <div class="portlet solid light-grey bordered">

                            <div class="portlet-title">

                                <div class="caption"><i class="icon-bullhorn"></i>Activities</div>

                                <div class="tools">

                                    <div class="btn-group pull-right" data-toggle="buttons-radio">

                                        <a href="" class="btn blue mini active">Users</a>

                                        <a href="" class="btn blue mini">Orders</a>

                                    </div>

                                </div>

                            </div>

                            <div class="portlet-body">

                                <div id="site_activities_loading">

                                    <img src="media/image/loading.gif" alt="loading" />

                                </div>

                                <div id="site_activities_content" class="hide">

                                    <div id="site_activities" style="height:100px;"></div>

                                </div>

                            </div>

                        </div>

                        <!-- END PORTLET-->

                        <!-- BEGIN PORTLET-->

                        <div class="portlet solid bordered light-grey">

                            <div class="portlet-title">

                                <div class="caption"><i class="icon-signal"></i>Server Load</div>

                                <div class="tools">

                                    <div class="btn-group pull-right" data-toggle="buttons-radio">

                                        <a href="" class="btn red mini active">

                                            <span class="hidden-phone">Database</span>

                                            <span class="visible-phone">DB</span></a>

                                        <a href="" class="btn red mini">Web</a>

                                    </div>

                                </div>

                            </div>

                            <div class="portlet-body">

                                <div id="load_statistics_loading">

                                    <img src="media/image/loading.gif" alt="loading" />

                                </div>

                                <div id="load_statistics_content" class="hide">

                                    <div id="load_statistics" style="height:108px;"></div>

                                </div>

                            </div>

                        </div>

                        <!-- END PORTLET-->

                    </div>

                </div>

                <div class="clearfix"></div>

            </div>

        </div>

        <!-- END PAGE CONTAINER-->

    </div>
@endsection
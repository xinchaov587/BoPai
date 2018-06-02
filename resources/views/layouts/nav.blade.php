<div class="header navbar navbar-inverse navbar-fixed-top">

    <div class="navbar-inner">

        <div class="container-fluid">

            <a class="brand" href="index.html">
                <img src="media/image/logo.png" alt="logo"/>
            </a>

            <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                <img src="media/image/menu-toggler.png" alt="" />
            </a>

            <ul class="nav pull-right">
                <li class="dropdown user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img alt="" src="media/image/avatar1_small.jpg" />
                        <span class="username"> {{ Auth::guard('admin')->user()->username }}</span>
                        <i class="icon-angle-down"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="extra_profile.html"><i class="icon-user"></i> 我的资料</a></li>
                        <li><a href="{{ route('logout') }}"><i class="icon-key"></i> 登出</a></li>
                    </ul>
                </li>
            </ul>

        </div>

    </div>

</div>
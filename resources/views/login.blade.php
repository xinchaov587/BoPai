@include('layouts.header')

<body class="login">

<div class="logo">
    <img src="media/image/logo-big.png" alt="" />
</div>

<div class="content">

    <form method="post" action="{{ route('login') }}">

        {{ csrf_field() }}

        <h3 class="form-title">登录</h3>
        <div class="alert alert-error hide">
            <button class="close" data-dismiss="alert"></button>
            <span>请填写完整在进行提交.</span>
        </div>

        <div class="control-group">
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <div class="controls">
                <div class="input-icon left">
                    <i class="icon-user"></i>
                    <input class="m-wrap placeholder-no-fix" type="text" placeholder="账号" name="username" />
                </div>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <div class="controls">
                <div class="input-icon left">
                    <i class="icon-lock"></i>
                    <input class="m-wrap placeholder-no-fix" type="password" placeholder="密码" name="password" />
                </div>
            </div>
        </div>

        <div class="form-actions">
            <label class="checkbox">
                <input type="checkbox" name="remember" value="1" /> 记住
            </label>
            <button type="submit" class="btn blue pull-right">
                登录
                <i class="m-icon-swapright m-icon-white"></i>
            </button>
        </div>

        @include('layouts.hint')
        @include('layouts.errors')

    </form>

</div>

<div class="copyright">
    本系统由淄博聚淘生物有限公司独立制作
</div>

<script src="{{ asset('media/js/jquery-1.10.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('media/js/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('media/js/jquery-ui-1.10.1.custom.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('media/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('media/js/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('media/js/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('media/js/jquery.cookie.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('media/js/jquery.uniform.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('media/js/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('media/js/jquery.backstretch.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('media/js/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('media/js/login-soft.js') }}" type="text/javascript"></script>

<script>
    jQuery(document).ready(function () {
        App.init();
        Login.init();
    });
</script>

</body>

</html>
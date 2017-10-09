@extends('backend.layout.login-layout')
@section('page-content')
    <div class="logo">
        {{--<img src="{{ url()->asset('assets/backend/layout3/img/logo-default.png') }}" alt=""/>--}}
    </div>
    <div class="content">
        <!-- BEGIN LOGIN FORM -->
        <form class="login-form" action="{{ url()->to($bo_name.'/login/form') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <h3 class="form-title">Login to your account</h3>
            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span>
                Enter any username and password. </span>
            </div>
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">Username</label>
                <div class="input-icon">
                    <i class="fa fa-user"></i>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Username" name="username" value="" autocomplete="off"/>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                <div class="input-icon">
                    <i class="fa fa-lock"></i>
                    <input class="form-control placeholder-no-fix" type="password"  placeholder="Password" name="password" autocomplete="off"/>
                </div>
            </div>
            <div class="form-actions">
                <label class="checkbox">
                    <input type="checkbox" name="remember" value="1" checked/> Remember me </label>
                <button type="submit" class="btn green-haze pull-right">
                    Login <i class="m-icon-swapright m-icon-white"></i>
                </button>
            </div>
        </form>
        <!-- END LOGIN FORM -->
    </div>
@endsection

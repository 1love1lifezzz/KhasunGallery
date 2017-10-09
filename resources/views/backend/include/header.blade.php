<div class="page-header">
    <!-- BEGIN HEADER TOP -->
    <div class="page-header-top">
        <div class="container">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="{{ url()->to($bo_name) }}"><img src="{{ url()->asset('assets/backend/layout3/img/logo-default.png') }}" alt="logo" class="logo-default"></a>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler"></a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu hidden-xs">
                <ul class="nav navbar-nav pull-right">
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class="dropdown dropdown-extended">
                        <a href="#">{{ session()->get('s_admin_name') }}</a>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                    <li class="droddown dropdown-separator"><span class="separator"></span></li>
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class="dropdown dropdown-extended">
                        <a href="{{ url()->to($bo_name.'/logout') }}"><i class="icon-logout"></i> Logout</a>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
    </div>
    <!-- END HEADER TOP -->

    <!-- BEGIN HEADER MENU -->
    <div class="page-header-menu">
        <div class="container">
            <!-- BEGIN MEGA MENU -->
            <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
            <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
            <div class="hor-menu ">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ url()->to($bo_name) }}">Home</a>
                    </li>
                    {{--<li>--}}
                        {{--<a href="{{ url()->to($bo_name.'/default') }}">Sample Form Validate</a>--}}
                    {{--</li>--}}
                    <li class="menu-dropdown classic-menu-dropdown ">
                        <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;">
                            User Management <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-left">
                            <li>
                                <a href="{{ url()->to($bo_name.'/user-management') }}">User</a>
                            </li>
                            <li>
                                <a href="{{ url()->to($bo_name.'/role') }}">Role</a>
                            </li>
                        </ul>
                    </li>
                    <li class="visible-xs">
                        <a href="{{ url()->to($bo_name.'/logout') }}">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- END MEGA MENU -->
        </div>
    </div>
    <!-- END HEADER MENU -->
</div>

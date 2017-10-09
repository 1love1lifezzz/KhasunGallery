<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>Back Office</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
    {{ Html::style('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}
    {{ Html::style('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}
    {{ Html::style('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}
    {{ Html::style('assets/global/plugins/uniform/css/uniform.default.min.css') }}
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    @yield('page-style')
    <!-- END PAGE LEVEL STYLES -->

    <!-- BEGIN THEME STYLES -->
    {{ Html::style('assets/global/css/components-md.css') }}
    {{ Html::style('assets/global/css/plugins-md.css') }}
    {{ Html::style('assets/backend/layout3/css/layout.css') }}
    {{ Html::style('assets/backend/layout3/css/themes/default.css') }}
    {{ Html::style('assets/backend/layout3/css/custom.css') }}
    <!-- END THEME STYLES -->

    <!-- BEGIN MORE STYLES -->
    {{ Html::style('css/backend/main.css') }}
    @yield('more-style')
    <!-- END MORE STYLES -->

    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="page-md page-header-menu-fixed">
@include('backend.include.header')
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
    <!-- BEGIN PAGE HEAD -->
    <div class="page-head">
        <div class="container">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>@yield('page-title')</h1>
            </div>
            <!-- END PAGE TITLE -->
        </div>
    </div>
    <!-- END PAGE HEAD -->
    <!-- BEGIN PAGE CONTENT -->
    <div class="page-content">
        <div class="container">
            <!-- BEGIN PAGE CONTENT INNER -->
            <div class="row">
                @yield('page-content')
            </div>
            <!-- END PAGE CONTENT INNER -->
        </div>
    </div>
    <!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->
@include('backend.include.footer')
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
{{ Html::script('assets/global/plugins/respond.min.js') }}
{{ Html::script('assets/global/plugins/excanvas.min.js') }}
<![endif]-->
{{ Html::script('assets/global/plugins/jquery.min.js') }}
{{ Html::script('assets/global/plugins/jquery-migrate.min.js') }}
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
{{ Html::script('assets/global/plugins/jquery-ui/jquery-ui.min.js') }}
{{ Html::script('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}
{{ Html::script('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}
{{ Html::script('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}
{{ Html::script('assets/global/plugins/jquery.blockui.min.js') }}
{{ Html::script('assets/global/plugins/jquery.cokie.min.js') }}
{{ Html::script('assets/global/plugins/uniform/jquery.uniform.min.js') }}
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
@yield('page-plugin')
{{ Html::script('assets/global/plugins/bootbox/bootbox.min.js') }}
<!-- END PAGE LEVEL PLUGINS -->

{{ Html::script('assets/global/scripts/metronic.js') }}
{{ Html::script('assets/backend/layout3/scripts/layout.js') }}
{{ Html::script('assets/backend/layout3/scripts/demo.js') }}

{{ Html::script('js/backend/main.js') }}
<script>
    var url = '{{ request()->getBaseUrl().'/'.config()->get('constants.BO_NAME') }}';
    var api_url = url+'/api';
    var _token = '{{ csrf_token() }}';
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Demo.init(); // init demo features
    });
</script>
@yield('more-script')

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
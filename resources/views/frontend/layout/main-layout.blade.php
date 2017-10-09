<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}

    <link rel="icon" href="{{ url()->asset('favicon.ico') }}" type="image/x-icon" />
    <!-- Responsive Window -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Files -->
    {!! Html::style('css/frontend/awesome.css') !!}
    {!! Html::style('css/frontend/main.css') !!}
    @yield('css')
  </head>

  <body>
    @include('frontend.include.header')

    <div id="ui-main">
      @yield('content')
    </div>

    @include('frontend.include.footer')
    <script>
      var url = '{{ request()->getBaseUrl() }}';
      var api_url = url+'/api';
      var _token = '{{ csrf_token() }}';
      var lang = '{{ $lang }}';
    </script>
    {!! Html::script('js/frontend/jquery.min.js') !!}
    {!! Html::script('js/frontend/bootstrap.min.js') !!}
    {!! Html::script('js/frontend/main.js') !!}

    @yield('script')
  </body>
</html>

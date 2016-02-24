<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    {{--{!! Html::style('css/app.css') !!}
    {!! Html::style('css/style.css') !!}

    {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}--}}
    {{--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">--}}
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>--}}
    {{--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>--}}
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
    <script rel="script" src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
    <script rel="script" src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>

</head>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Laravel Project</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="http://localhost/test-laravel-5-project/public/work">Home</a></li>
                <li><a href="{{action('QuesController@showLoginCk')}}">Question</a></li>
                <li><a href="@if(Auth::check()) {{URL::to('logout')}} @else {{URL::to('login')}} @endif">@if(Auth::check())Logout @else Login @endif</a> </li>
                <li><a href="http://localhost/test-laravel-5-project/public/registration">Sign up</a> </li>

            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>

<body>
<div class="container">
    @yield('content')
</div>
<!-- /.container -->
</body>
</html>
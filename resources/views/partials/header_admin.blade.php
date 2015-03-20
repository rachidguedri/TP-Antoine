<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{url('favicon.ico')}}">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('assets/css/dashboard.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/style.css')}}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="{{url('assets/js/ie8-responsive-file-warning.js')}}"></script><![endif]-->
    <script src="{{url('assets/js/ie-emulation-modes-warning.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="{{url('assets/js/jquery.min.js')}}"></script>
    <script src="{{url('assets/js/ie10-viewport-bug-workaround.js')}}"></script>
    <script src="{{url('assets/js/search.js')}}"></script>
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Blog Laravel5</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('dashboard')}}"><span
                                class="glyphicon glyphicon-home">{{trans('blog.dashboard')}}</span></a></li>
                <li><a href="#">{{trans('blog.settings')}}</a></li>
                <li><a href="{{url('/')}}">{{trans('blog.public')}}</a></li>
                <li><a href="{{url('auth/logout')}}">{{trans('blog.logout')}}</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <input name="search" data-url="search" id="search" type="text" class="form-control" placeholder="Search...">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </form>
        </div>
    </div>
</nav>
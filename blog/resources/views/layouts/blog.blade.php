<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BIGO技术博客</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/nprogress.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo.ico') }}">
    <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('js/nprogress.js') }}"></script>
    <script src="{{ asset('js/jquery.lazyload.min.js') }}"></script>
    <!--[if gte IE 9]>
    <script src="{{ asset('js/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/html5shiv.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/respond.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/selectivizr-min.js') }}" type="text/javascript"></script>

    <![endif]-->
    <!--[if lt IE 9]>
    <script>window.location.href='upgrade-browser.html';</script>
    <![endif]-->
</head>
<body class="user-select single">
<header class="header">
    <nav class="navbar navbar-default" id="navbar">
        <div class="container">
            <div class="header-topbar hidden-xs link-border">
                <ul class="site-nav topmenu">
                    <li>
                        @if( Auth::user() )
                            <a href="{{ url('home') }}" >你好 {{ Auth::user()->name }}</a>
                        @else()
                            <a href="{{ url('/login') }}" >Login</a>
                        @endif
                    </li>
                    <li>
                        @if( Auth::user() )
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">退出
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @else()
                            <a href="{{ url('/register') }}" rel="nofollow" >Register</a>
                        @endif
                    </li>
                    <li><a href="#" title="RSS订阅" >
                            <i class="fa fa-rss">
                            </i> RSS订阅
                        </a></li>
                </ul>
                勤记录 懂分享</div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar" aria-expanded="false"> <span class="sr-only"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <h1 class="logo hvr-bounce-in"><a href="{{ url('home/index') }}" title="BIGO技术论坛"><img height="50" src="{{ asset('images/weblogo.jpg') }}" alt="木庄网络博客"></a></h1>
            </div>
            <div class="collapse navbar-collapse" id="header-navbar">
                <form class="navbar-form visible-xs" action="/Search" method="post">
                    <div class="input-group">
                        <input type="text" name="keyword" class="form-control" placeholder="请输入关键字" maxlength="20" autocomplete="off">
		<span class="input-group-btn">
		<button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
		</span> </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a data-cont="木庄网络博客" title="木庄网络博客" href="{{ url('home/index') }}">首页</a></li>
                    <li><a data-cont="列表页" title="列表页" href="{{ url('home/list') }}">技术博文</a></li>
                    <li><a data-cont="详细页" title="详细页" href="{{ url('home/show') }}">博文详情</a></li>
                    <li><a data-cont="我的博客" title="我的博客" href="{{ url('home/myblog') }}">我的博客</a></li>
                    <li><a data-cont="MZ-NetBolg主题" title="404" href="#" >404</a></li>
                    <li><a data-cont="IT技术笔记" title="404" href="#" >404</a></li>
                    <li><a data-cont="源码分享" title="404" href="#" >404</a></li>
                    <li><a data-cont="靠谱网赚" title="404" href="#" >404</a></li>
                    <li><a data-cont="资讯分享" title="404" href="#" >404</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
@yield('content')
<footer class="footer">
    <div class="container">
        <p>Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a> </p>
    </div>
    <div id="gotop"><a class="gotop"></a></div>
</footer>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.ias.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
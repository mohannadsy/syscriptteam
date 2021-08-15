<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">


    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" />
    <!-- FLEXSLIDER CSS -->
    <link href="{{asset('assets/css/flexslider.css')}}" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />




</head>
<body>
<div class=" navbar-inverse" id="menu">
    <div class="container">
        <div class="navbar-header navbar-right">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img class="logo-custom hidden-xs" src="{{asset('assets/img/syscriptteam-logo.png')}}" alt=""  /> </a>
        </div>
        <div class="navbar-collapse nav navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="{{route('home')}}">{{__('nav.home')}}</a></li>
                <li><a href="{{route('services')}}">{{__('nav.services')}}</a></li>
                <li><a href="{{route('about.us')}}">{{__('nav.about-us')}}</a></li>
                <li><a href="{{route('contact.us')}}">{{__('nav.contact-us')}}</a></li>
                <li class="dropdown">
                    <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'>{{__('nav.language')}}<span class='caret'></span></a>
                    <ul class='dropdown-menu' role='menu'>
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a class="dropdown-item" hreflang=" {{$localeCode}} "
                                   href=" {{LaravelLocalization::getLocalizedURL($localeCode , null , [] , true)}} ">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                @if(\Illuminate\Support\Facades\Auth::user())
                <li class='dropdown'>
                    <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'>{{\Illuminate\Support\Facades\Auth::user()->name}}<span class='caret'></span></a>
                    <ul class='dropdown-menu' role='menu'>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                {{ __('nav.logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        @if(\App\Traits\Admin::isAdmin())
                        <li><a href="{{route('create.service')}}">Create Service</a></li>
                            @endif
                    </ul>
                </li>
                @else
                    <li><a href="{{route('login')}}">{{__('nav.login')}}</a></li>
                    <li><a href="{{route('register')}}">{{__('nav.register')}}</a></li>
                @endif
            </ul>

        </div>
    </div>
</div>

    <div>
        @yield('content')
    </div>

<div id="footer">
    CopyRight To <a style="color: #fff" href="{{route('about.us')}}">SyScriptTeam</a>  &copy {{date('Y')}} |  <a href="#" style="color: #fff" target="_blank">Designed & Developed by : Eng. Mohannad Mahmoud</a>
</div>


</body>
<script src="{{asset('assets/js/jquery-1.10.2.js')}}"></script>
<!--  Core Bootstrap Script -->
<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<!--  Flexslider Scripts -->
<script src="{{asset('assets/js/jquery.flexslider.js')}}"></script>
<!--  Scrolling Reveal Script -->
<script src="{{asset('assets/js/scrollReveal.js')}}"></script>
<!--  Scroll Scripts -->
<script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
<!--  Custom Scripts -->
<script src="{{asset('assets/js/custom.js')}}"></script>
<!-- BOOTSTRAP CORE STYLE CSS -->
<!-- Styles -->

</html>

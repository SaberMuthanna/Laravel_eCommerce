<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     @if (config('app.locale')=='ar')
        <link href="{{ asset('css/bootstrap-rtl.css') }}" rel="stylesheet">
     @endif

    <link  rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap">
    {{--  <script src="https://kit.fontawesome.com/98c0e3e784.js" crossorigin="anonymous"></script>  --}}
    @yield('css')
    
    <!-- Favicons -->
<link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
<link rel="icon" href="{{asset('img/favicon.png')}}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{__('lang.Home')}}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                         <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 {{--  {{__('lang.language')}}  --}}
                                 @if (config('app.locale')=='ar')
                                    اللغة العربية
                                 @else
                                 English
                                 @endif
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <a class="nav-link" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                    @endforeach
                                </div>
                            </li>
                        <!-- Authentication Links -->
                        @guest

                          <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 {{__('lang.Account')}}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                    <a class="nav-link  dropdown-item" href="{{ route('login') }}">{{ __('lang.Login') }}</a>
                                    @if (Route::has('register'))
                                      <a class="nav-link " href="{{ route('register') }}">{{ __('lang.Register') }}</a>
                                    @endif
                                </div>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('users.edit-profile')}}">
                                       {{__('lang.My Profile')}}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('lang.Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @auth
                <div class="container">
                    @if(session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{session()->get('success')}}
                        </div>
                    @endif
                    @if(session()->has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{session()->get('error')}}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-4">
                            <ul class="list-group">
                                @if (auth()->user()->isAdmin())
                                    <li class="list-group-item">
                                    <a href="{{route('users.index')}}"> Users</a>
                                </li>
                                @endif
                                <li class="list-group-item">
                                    <a href="{{ route('posts.index') }}"> POST</a>
                                </li>

                                <li class="list-group-item">
                                    <a href="{{ route('categories.index') }}"> Category</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('tags.index') }}"> Tags</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('dashboard') }}"> Dashboard</a>
                                </li>
                            </ul>
                            <ul class="list-group mt-5">
                                <li class="list-group-item">
                                    <a href="{{ route('trashed') }}"> Trashed Post</a>
                                </li>

                            </ul>

                        </div>
                        <div class="col-md-8">

                            @yield('content')
                        </div>
                    </div>
                </div>
            @else
             @yield('content')
            @endauth
        </main>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    @yield('scripts')
</body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
      content="No page can go online without having an eye catching cover to keep your visitors in the page.">
    <meta name="keywords" content="cover, header, block, html code">
    <title>@yield('title')</title>
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{asset('css/core.min.css')}}" rel="stylesheet">
     <link href="{{asset('css/thesaas.min.css')}}" rel="stylesheet">
    <link href=" {{asset('css/style.css')}}" rel="stylesheet">
    @if (config('app.locale')=='ar')
    <link href="{{ asset('css/bootstrap-rtl.css') }}" rel="stylesheet">
    @endif
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="icon" href="{{asset('img/favicon.png')}}">
  </head>
  <!-- Favicons -->
  <body>
    <!-- Topbar -->
    <nav class="topbar topbar-inverse topbar-expand-md topbar-sticky">
      <div class="container"> 
        <div class="topbar-left">
          <button class="topbar-toggler">&#9776;</button>
          <a class="topbar-brand" href="/">
            <img class="logo-default" src=" {{asset('img/logo.png')}}" alt="logo">
            <img class="logo-inverse" src="{{asset('img/logo-light.png')}}" alt="logo">
          </a>
        </div>
        <div class="topbar-right">
          <ul class="topbar-nav nav">
              <li class="nav-item"><a class="nav-link" href="{{route('welcome')}}"> {{ __('lang.Home') }}</a></li>
              <li class="nav-item">
                <a class="nav-link mr-3" href="#"> @if (config('app.locale')=='ar')
                        اللغة العربية
                    @else
                        English
                    @endif <i class="fa fa-caret-down"></i>
                </a>
                <div class="nav-submenu">                  
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <a class="nav-link" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                    @endforeach 
                </div>     
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{route('login')}}">{{ __('lang.Login') }}</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- END Topbar -->
    <!--start Header -->
    @yield('header')
    <!-- /. end header -->
    <!-- Start Main Content -->
    @yield('content')
    <!--end  Main Content -->
    <!-- Footer -->
    <footer class="footer text-white bg-dark py-7">
      <div class="container">
        <div class="row gap-y align-items-center">
          <div class="col-md-6">
            <div class="nav nav-bold nav-uppercase justify-content-center justify-content-md-end">
             <a  class="nav-link" href="/">{{ __('lang.Home') }}</a>
              <a class="nav-link" href="#">{{ __('lang.About') }}
              <a class="nav-link" href="#">{{ __('lang.Contact') }}</a>
            </div>
          </div>
          <div class="col-md-6 text-center text-md-left mt-5 mt-md-0">
            <div class="social social-bg-dark">
              <a class="social-facebook" href="#"><i class="fa fa-facebook"></i></a>
              <a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a>
              <a class="social-instagram" href="#"><i class="fa fa-instagram"></i></a>
              <a class="social-youtube" href="#"><i class="fa fa-youtube"></i></a>
              <a class="social-dribbble" href="#"><i class="fa fa-dribbble"></i></a>
            </div>
          </div>

          <div class="col-12 text-center">
            <br>
            <small>© TheThemeio 2019, All rights reserved.</small>
          </div>

        </div>
      </div>
    </footer>
    <!-- /.footer -->
    <!-- Scripts -->
    <script src="{{ asset('js/page.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
     <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f44d05a34553fb6"></script>
  </body>
</html>

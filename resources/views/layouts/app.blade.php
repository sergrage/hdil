<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A website that helps you find the best way to learn something new."> 

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">

    <!-- Styles -->
    <link href="{{ mix('/app/css/app.css') }}" rel="stylesheet">
</head>
<body>
  <header class="container-fluid header">
    <div class="d-flex justify-content-around align-items-center">
      <div class="d-flex" style="margin: auto auto auto 0;">
        <a class="logo_link" href="{{ url('/') }}">How did I Learn</a>
        <img class="logo" src="/app/img/logo.png">
      </div>
      @guest
      <div class="main_menu">
        <ul class="nav nav-guest">
            <li class="nav-item m-1"><a class="nav-link" href="#">Categories</a></li>
            <li class="nav-item m-1"><a class="nav-link" href="#">Features</a></li>
            <li class="nav-item m-1"><a class="nav-link" href="#">About</a></li>
        </ul>
      </div>
      <div class="mobile_menu mobile_menu_guest">
        <form class="form-inline header__form header__form_guest">
            <div class="input-group">
              <input type="text" class="form-control header__form_input" placeholder="Search...">
              <div class="input-group-prepend">
                <span class="input-group-text header__find_icon">
                  <i class="fa fa-search"></i>
                </span>
              </div>
          </div>
        </form>
        <ul class="nav nav-guest">
            <li class="nav-item m-1"><a class="nav-link border-white" href="{{ route('login') }}">login <i class="fas fa-sign-in-alt float-right float-xl-none"></i></a></li>
            <li class="nav-item m-1"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
            <li class="nav-item m-1 mt-4 none-1200"><a class="nav-link" href="#">Categories</a></li>
            <li class="nav-item m-1 none-1200"><a class="nav-link" href="#">Features</a></li>
            <li class="nav-item m-1 none-1200"><a class="nav-link" href="#">About</a></li>
        </ul>
      </div>
      @endguest
      @auth
      <div class="mobile_menu">
        <form class="form-inline header__form">
            <div class="input-group">
              <input type="text" class="form-control header__form_input" placeholder="Search...">
              <div class="input-group-prepend">
                <span class="input-group-text header__find_icon">
                  <i class="fa fa-search"></i>
                </span>
              </div>
          </div>
        </form>
        <ul class="nav nav-auth">
            <li class="nav-item m-1"><a class="nav-link" href="{{ route('cabinet.home') }}">Cabinet <i class="far fa-user float-right"></i></a></li>
            <li class="nav-item pl-4"><a class="nav-link header__cabinet-link" href="{{ route('cabinet.home') }}"><i class="fas fa-home"></i> Home page </a></li>
            <li class="nav-item pl-4"><a class="nav-link header__cabinet-link" href="{{ route('cabinet.user.edit', $user) }}"> <i class="far fa-edit"></i> Edit profile </a></li>
            <li class="nav-item pl-4"><a class="nav-link header__cabinet-link border-white-none" href="{{ route('messages.index') }}"><i class="far fa-comment"></i> Message</a></li>
            @can('admin-panel')
            <li class="nav-item m-1"><a class="nav-link admin-bg" href="{{ route('admin.admin') }}">Admin <i class="fas fa-unlock-alt float-right"></i></a></li>
            @endcan
            <li class="nav-item m-1"><a class="nav-link logout-bg" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }} <i class="fas fa-sign-out-alt float-right"></i>
            </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <li class="nav-item m-1 mt-4"><a class="nav-link" href="#">Categories</a></li>
            <li class="nav-item m-1"><a class="nav-link" href="#">Features</a></li>
            <li class="nav-item m-1"><a class="nav-link" href="#">About</a></li>
        </ul>
      </div>
      @endauth
      @guest
      <div class="header__menu-icon header__menu-icon_guest">
          <div class="header__menu-icon__middle"></div>
      </div>
      @endguest
      @auth
      <div class="header__menu-icon">
        <div class="header__online"></div>
          <div class="header__menu-icon__middle"></div>
      </div>
      @endauth
    </div>
  </header>


    @yield('content')
    
    <div class="container">
<!-- тут выводятся ошибки заполнения формы -->
        @if ($errors->any())
        <ul class="alert alert-danger mt-lg-4">
            @foreach($errors->all() as $e)
            <li> {{ $e }} </li>
            @endforeach
        </ul>
        @endif


<!-- тут флеш сообщение  -->
        @if (session('success'))
            <div class="alert alert-success mt-lg-4" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger mt-lg-4" role="alert">
                {{ session('error') }}
            </div>
        @endif
    </div>


        <!-- REQUIRED SCRIPTS -->

<footer class="footer-distributed">

      <div class="footer-right">

        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-linkedin"></i></a>
        <a href="#"><i class="fab fa-github"></i></a>

      </div>

      <div class="footer-left">

        <p class="footer-links">
          <a href="#">Home</a>
          ·
          <a href="#">Blog</a>
          ·
          <a href="#">Pricing</a>
          ·
          <a href="#">About</a>
          ·
          <a href="#">Faq</a>
          ·
          <a href="#">Contact</a>
        </p>

        <p>How did I Learn &copy; 2019</p>
      </div>

    </footer>


<script src="{{ mix('/app/js/app.js') }}"></script>
</body>
</html>


@yield('modal')
@yield('ClassicEditor')


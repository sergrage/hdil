<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">

    <!-- Styles -->
    <link href="{{ mix('/app/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
            <nav class="navbar navbar-expand-md header">
            <div class="container">
                <a class="navbar-brand header__brand" href="{{ url('/') }}">
                    How Did I Learn
                </a>
                <img src="/app/img/logo.png" alt="Logo" class="pr-lg-5">

                <ul class="navbar-nav ml-lg-5">
                  <li class="nav-item active">
                    <a class="nav-link header__link" href="#">Categories</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link header__link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link header__link" href="#">About</a>
                  </li>
                </ul>

                <form class="form-inline header__form">
                    <div class="input-group">
                      <input type="text" class="form-control header__form" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon1">
                      <div class="input-group-prepend header__find">
                        <span class="input-group-text header__find__icon" id="basic-addon1"><i class="fa fa-search"></i></span>
                      </div>
                    </div>
                </form>


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link header__link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link header__link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle header__link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @can('admin-panel')
                                        <a class="dropdown-item" href="{{ route('admin.admin') }}">Admin</a>
                                    @endcan
                                    <a class="dropdown-item" href="{{ route('cabinet') }}">Cabinet</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
    </div>



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
    <script src="{{ mix('/app/js/app.js') }}"></script>
</body>
</html>


@yield('modal')


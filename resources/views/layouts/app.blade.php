<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- @toastr_js -->

    <!-- Fonts -->
    <!-- <link 
    rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    /> -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- Styles -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- @toastr_css -->

    @stack('page-style')
</head>
<body>
<div class="container-fluid">
      <!-- First section -->
      <nav class="navbar navbar-dark bg-dark">
        <div class="container">
          <h1>
            <a href="#" class="navbar-brand">Test</a>
          </h1>
          <form action="#" class="form-inline mr-3 mb-2 mb-sm-0">
            <input type="text" class="form-control" placeholder="search" />
            <button type="submit" class="btn btn-success">Search Forum</button>
          </form>

          @guest
            <a class="nav-item nav-link text-white btn btn-dark" href="{{ route('login') }}">Login</a>
            <a class="nav-item nav-link text-white btn btn-dark" href="{{ route('register') }}">Register</a>
          @endguest
          <a class="nav-item nav-link text-white">
            @auth
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="btn btn-outline-danger">Logout</button>
            </form>
            @endauth
          </a>
        </div>
      </nav>

      <!-- first section end -->
    </div>
    <div class="container">
      <nav class="breadcrumb">
        <a href="#" class="breadcrumb-item active"> Dashboard</a>
      </nav>

      @yield('content')


    <div class="container-fluid">
      <footer class="small bg-dark text-white">
        <div class="container py-4">
          <ul class="list-inline mb-0 text-center">
            <li class="list-inline-item">
              &copy; 2021 Simon's tech school forum
            </li>
            <li class="list-inline-item">All rights reserved</li>
            <li class="list-inline-item">Terms and privacy policy</li>
          </ul>
        </div>
      </footer>
    </div>

    <script src="{{ asset('admin/js/vender/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/vender/jquery.form.js') }}"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <!-- @toastr_js
    @toastr_render -->

    @stack('page-script')
</body>
</html>

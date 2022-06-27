<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    {{-- Metarial Icon --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>
    {{-- fontawsome link --}}
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/regular.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/solid.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/brands.min.css')}}">
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> --}}
    {{-- Bootsrap icon list --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}">
    <link href="/css/main.css" rel="stylesheet" media="all">
    {{-- jquery --}}
    <script language="JavaScript" type="text/javascript" src="/js/jquery.min.js"></script>
    {{-- jquery -ui --}}
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"
     integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY="
    crossorigin="anonymous"></script>
    {{-- data table --}}
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" defer></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- Vendor CSS-->
    <link href="/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    {{-- @yield('third_party_stylesheets') --}}
    @yield('css')
    @stack('page_css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light py-2">
             <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                           
                {{-- <li class="ml-5">
                    <a href="">
                    <div>
                        <h6 class="m-0 p-0 text-navy">Mehadi jaman</h6>
                    </div>
                    <div>
                        <p class="text-right text-navy">admin</p>
                    </div>
                    </a>
                </li>
                <li class="ml-3 mr-2">
                    <span>
                        <img src="{{ asset('img/nav_profile.jpeg') }}" alt="" width="60px" height="60px" class="rounded-circle">
                        <span class="position-absolute top-0 start-100 translate-middle p-2 bg-success border border-light rounded-circle nav__profile__circle">
                        </span>
                    </span>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                        <div class="input-group input-group-lg">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </li>
               <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        @if(Auth::user()->Photo)
                            <img src="/uploads/{{ Auth::user()->Photo }}" class="user-image img-circle elevation-2" alt="User Photo">
                        @endif
                        <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <!-- User image -->
                        <li class="user-header bg-primary">
                            @if(Auth::user()->Photo)
                                <img src="/uploads/{{ Auth::user()->Photo }}" class="user-image img-circle elevation-2" alt="User Photo">
                            @endif
                            <p>
                                {{ Auth::user()->name }}
                                <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                            <a href="#" class="btn btn-default btn-flat float-right"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Sign out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div> 


        <!-- Left side column. contains the logo and sidebar -->
        @include('layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content">
                @yield('content')
            </section>
        </div>

        <!-- Main Footer -->
        <footer class="main-footer custom__main__footer">
            <div class="float-right d-none d-sm-block">
                <b>Hand-crafted & Made with  </b>
                <i class="bi bi-heart text-danger fs-5"></i>
            </div>
            <strong>Copyright &copy; Creative Software Tim</strong> All rights
            Reserved.
        </footer>
    </div>

    {{-- bootsstrap --}}
    {{-- <script src="{{ URL::asset('/js/bootstrap.esm.min.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    {{-- custom js --}}
    <script src="{{ URL::asset('/js/custom.js') }}"></script>
    <!-- Vendor JS-->
    <script src="/vendor/select2/select2.min.js"></script>
    <script src="/vendor/datepicker/moment.min.js"></script>
    <script src="/vendor/datepicker/daterangepicker.js"></script>
    <!-- Main JS-->
    <script src="/js/global.js"></script>
    @yield('third_party_scripts')
    {{-- @stack('page_scripts') --}}
    @stack('scripts')
</body>
</html>

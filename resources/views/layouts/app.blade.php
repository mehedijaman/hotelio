<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    {{-- fontawsome link --}}
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/regular.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/solid.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/brands.min.css')}}">
    {{-- fontawsome link --}}
    {{-- Bootsrap icon list --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}">     
    {{-- Bootsrap icon list --}}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @yield('third_party_stylesheets')
    @stack('page_css')
</head>

<body class="hold-transition sidebar-mini layout-fixed dashbroad__bg">

    <div class="wrapper">
        <!-- Main Header -->
        <div class="custom__container">
            <nav class="main-header custom__main__header navbar navbar-expand  dashbroad__nav__custom">
                <!-- Left navbar links -->
                <ul class="custom__main__header navbar-nav custom__navber__list">
                        <div class="d-flex align-items-center">
                            <li class="nav-item">
                                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                            </li>
                            <li value="">
                                <a href="">
                                    <svg data-v-1134b199="" xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect data-v-1134b199="" x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line data-v-1134b199="" x1="16" y1="2" x2="16" y2="6"></line><line data-v-1134b199="" x1="8" y1="2" x2="8" y2="6"></line><line data-v-1134b199="" x1="3" y1="10" x2="21" y2="10"></line></svg>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <svg data-v-1134b199="" xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path data-v-1134b199="" d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <svg data-v-1134b199="" xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path data-v-1134b199="" d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline data-v-1134b199="" points="22,6 12,13 2,6"></polyline></svg>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <svg data-v-1134b199="" xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square"><polyline data-v-1134b199="" points="9 11 12 14 22 4"></polyline><path data-v-1134b199="" d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                </a>
                            </li>
                            <li>
                            <a href="" class="star">
                                <svg data-v-1134b199="" xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-warning feather feather-star"><polygon data-v-1134b199="" points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            </a>
                            </li>
                        </div>
                    </ul>
                
                <ul class="navbar-nav ml-auto custom__navber__list ">
                    <div class="d-flex align-items-center p-0 m-0">
                        <li>
                            <a href="">
                                <img src="{{asset('img/flag_nav.png')}}" alt="nav-flag" height="14px" width="22px">
                                <span class="ml-2">English</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <svg data-v-0e8a7f4f="" xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle data-v-0e8a7f4f="" cx="11" cy="11" r="8"></circle><line data-v-0e8a7f4f="" x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <span data-v-a58fee00="" class="feather-icon position-relative"><svg data-v-a58fee00="" xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-body feather feather-shopping-cart"><circle data-v-a58fee00="" cx="9" cy="21" r="1"></circle><circle data-v-a58fee00="" cx="20" cy="21" r="1"></circle><path data-v-a58fee00="" d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg><span data-v-a58fee00="" class="badge badge__up badge-pill badge-primary">5</span></span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="feather-icon position-relative"><svg xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-body feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class="badge badge__up badge-pill bg-danger position-absulate">6</span></span>
                            </a>
                        </li>
                        <li class="ml-5">
                            <a href="">
                            <div>
                                <h6 class="m-0 p-0 text-white">Mehadi jaman</h6>
                            </div>
                            <div>
                                <p class="text-right text-white">admin</p>
                            </div>
                            </a>
                        </li>
                        <li class="ml-3 mr-2">
                            <span>
                                <img src="{{ asset('img/nav_profile.jpeg') }}" alt="" width="60px" height="60px" class="rounded-circle">
                                <span class="position-absolute top-0 start-100 translate-middle p-2 bg-success border border-light rounded-circle nav__profile__circle">
                                </span>
                            </span>
                        </li>
                    </div>

                    {{-- <li class="nav-item dropdown user-menu">
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
                    </li> --}}
                </ul>
            </nav>
        </div>

        <!-- Left side column. contains the logo and sidebar -->
    @include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper content__wrapper__body__bg">
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


<script src="{{ mix('js/app.js') }}" defer></script>

<script src="/js/jquery.js"></script>
<script src="{{URL::asset('/js/custom.js')}}"></script>
 
@yield('third_party_scripts')

@stack('page_scripts')
</body>
</html>

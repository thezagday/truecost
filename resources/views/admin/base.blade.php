@extends('layouts.app')

@section('content')
    <div class="sidebar">
        <div class="sidebar-inner">
                <!-- ### $Sidebar Header ### -->
                <div class="sidebar-logo">
                    <div class="peers ai-c fxw-nw">
                        <div class="peer peer-greed">
                            <a class="sidebar-link td-n" href="/">
                                <div class="peers ai-c fxw-nw">
                                    <div class="peer">
                                        <div class="logo">
                                            <img src="{{ asset('/images/default-logo.png') }}" alt="">
                                        </div>
                                    </div>
{{--                                    <div class="peer peer-greed">--}}
{{--                                        <h5 class="lh-1 mB-0 logo-text">truecost</h5>--}}
{{--                                    </div>--}}
                                </div>
                            </a>
                        </div>
                        <div class="peer">
                            <div class="mobile-toggle sidebar-toggle">
                                <a href="" class="td-n">
                                    <i class="ti-arrow-circle-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ### $Sidebar Menu ### -->
                <ul class="sidebar-menu scrollable pos-r">
                    <li class="nav-item">
                        <a class='sidebar-link' href="/categories">
                            <span class="icon-holder">
                              <i class="c-blue-500 ti-layers-alt"></i>
                            </span>
                            <span class="title">Categories</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class='sidebar-link' href="/levels">
                            <span class="icon-holder">
                              <i class="c-brown-500 ti-bar-chart"></i>
                            </span>
                            <span class="title">Levels</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class='sidebar-link' href="/bids">
                            <span class="icon-holder">
                              <i class="c-blue-500 ti-rocket"></i>
                            </span>
                            <span class="title">Bids</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class='sidebar-link' href="/orders">
                            <span class="icon-holder">
                              <i class="c-deep-orange-500 ti-home"></i>
                            </span>
                            <span class="title">Orders</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class='sidebar-link' href="/lots">
                            <span class="icon-holder">
                              <i class="c-deep-purple-500 ti-package"></i>
                            </span>
                            <span class="title">Lots</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class='sidebar-link' href="/auction">
                            <span class="icon-holder">
                              <i class="c-indigo-500 ti-hummer"></i>
                            </span>
                            <span class="title">Auction</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class='sidebar-link' href="/reviews">
                            <span class="icon-holder">
                              <i class="c-blue-500 ti-comments-smiley"></i>
                            </span>
                            <span class="title">Reviews</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class='sidebar-link' href="/users">
                            <span class="icon-holder">
                              <i class="c-blue-500 ti-user"></i>
                            </span>
                            <span class="title">Users</span>
                        </a>
                    </li>


                    <li class="nav-item mT-30 actived">
                        <a class="sidebar-link" href="/dashboard">
                            <span class="icon-holder">
                              <i class="c-blue-500 ti-home"></i>
                            </span>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class='sidebar-link' href="/email">
                            <span class="icon-holder">
                              <i class="c-brown-500 ti-email"></i>
                            </span>
                            <span class="title">Email</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class='sidebar-link' href="/compose">
                            <span class="icon-holder">
                              <i class="c-blue-500 ti-share"></i>
                            </span>
                            <span class="title">Compose</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class='sidebar-link' href="/calendar">
                            <span class="icon-holder">
                              <i class="c-deep-orange-500 ti-calendar"></i>
                            </span>
                            <span class="title">Calendar</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class='sidebar-link' href="/chat">
                            <span class="icon-holder">
                              <i class="c-deep-purple-500 ti-comment-alt"></i>
                            </span>
                            <span class="title">Chat</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class='sidebar-link' href="/charts">
                            <span class="icon-holder">
                              <i class="c-indigo-500 ti-bar-chart"></i>
                            </span>
                            <span class="title">Charts</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class='sidebar-link' href="/forms">
                            <span class="icon-holder">
                              <i class="c-light-blue-500 ti-pencil"></i>
                            </span>
                            <span class="title">Forms</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="sidebar-link" href="/ui">
                            <span class="icon-holder">
                                <i class="c-pink-500 ti-palette"></i>
                            </span>
                            <span class="title">UI Elements</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="javascript:void(0);">
                            <span class="icon-holder">
                              <i class="c-orange-500 ti-layout-list-thumb"></i>
                            </span>
                            <span class="title">Tables</span>
                            <span class="arrow">
                                <i class="ti-angle-right"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class='sidebar-link' href="basic-table">Basic Table</a>
                            </li>
                            <li>
                                <a class='sidebar-link' href="datatable">Data Table</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="javascript:void(0);">
                            <span class="icon-holder">
                                <i class="c-purple-500 ti-map"></i>
                            </span>
                            <span class="title">Maps</span>
                            <span class="arrow">
                                <i class="ti-angle-right"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="google-maps">Google Map</a>
                            </li>
                            <li>
                                <a href="vector-maps">Vector Map</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="javascript:void(0);">
                            <span class="icon-holder">
                                <i class="c-red-500 ti-files"></i>
                            </span>
                            <span class="title">Pages</span>
                            <span class="arrow">
                                <i class="ti-angle-right"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class='sidebar-link' href="blank">Blank</a>
                            </li>
                            <li>
                                <a class='sidebar-link' href="404">404</a>
                            </li>
                            <li>
                                <a class='sidebar-link' href="500">500</a>
                            </li>
                            <li>
                                <a class='sidebar-link' href="signin">Sign In</a>
                            </li>
                            <li>
                                <a class='sidebar-link' href="signup">Sign Up</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="javascript:void(0);">
                            <span class="icon-holder">
                              <i class="c-teal-500 ti-view-list-alt"></i>
                            </span>
                            <span class="title">Multiple Levels</span>
                            <span class="arrow">
                                <i class="ti-angle-right"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item dropdown">
                                <a href="javascript:void(0);">
                                    <span>Menu Item</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="javascript:void(0);">
                                    <span>Menu Item</span>
                                    <span class="arrow">
                                        <i class="ti-angle-right"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="javascript:void(0);">Menu Item</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Menu Item</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
        </div>
    </div>
    <div class="page-container">
        <!-- ### $Topbar ### -->
        <div class="header navbar">
            <div class="header-container">
                <ul class="nav-left">
                    <li>
                        <a id='sidebar-toggle' class="sidebar-toggle" href="javascript:void(0);">
                            <i class="ti-menu"></i>
                        </a>
                    </li>
                    <li class="search-box">
                        <a class="search-toggle no-pdd-right" href="javascript:void(0);">
                            <i class="search-icon ti-search pdd-right-10"></i>
                            <i class="search-icon-close ti-close pdd-right-10"></i>
                        </a>
                    </li>
                    <li class="search-input">
                        <input class="form-control" type="text" placeholder="Search...">
                    </li>
                </ul>
                <ul class="nav-right">
                    <li class="notifications dropdown">
                        <span class="counter bgc-red">3</span>
                        <a href="" class="dropdown-toggle no-after" data-toggle="dropdown">
                            <i class="ti-bell"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li class="pX-20 pY-15 bdB">
                                <i class="ti-bell pR-10"></i>
                                <span class="fsz-sm fw-600 c-grey-900">Notifications</span>
                            </li>
                            <li>
                                <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                                    <li>
                                        <a href="" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                            <div class="peer mR-15">
                                                <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/1.jpg" alt="">
                                            </div>
                                            <div class="peer peer-greed">
                            <span>
                              <span class="fw-500">John Doe</span>
                              <span class="c-grey-600">liked your <span class="text-dark">post</span>
                              </span>
                            </span>
                                                <p class="m-0">
                                                    <small class="fsz-xs">5 mins ago</small>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                            <div class="peer mR-15">
                                                <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/2.jpg" alt="">
                                            </div>
                                            <div class="peer peer-greed">
                            <span>
                              <span class="fw-500">Moo Doe</span>
                              <span class="c-grey-600">liked your <span class="text-dark">cover image</span>
                              </span>
                            </span>
                                                <p class="m-0">
                                                    <small class="fsz-xs">7 mins ago</small>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                            <div class="peer mR-15">
                                                <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/3.jpg" alt="">
                                            </div>
                                            <div class="peer peer-greed">
                            <span>
                              <span class="fw-500">Lee Doe</span>
                              <span class="c-grey-600">commented on your <span class="text-dark">video</span>
                              </span>
                            </span>
                                                <p class="m-0">
                                                    <small class="fsz-xs">10 mins ago</small>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pX-20 pY-15 ta-c bdT">
                    <span>
                      <a href="" class="c-grey-600 cH-blue fsz-sm td-n">View All Notifications <i class="ti-angle-right fsz-xs mL-10"></i></a>
                    </span>
                            </li>
                        </ul>
                    </li>
                    <li class="notifications dropdown">
                        <span class="counter bgc-blue">3</span>
                        <a href="" class="dropdown-toggle no-after" data-toggle="dropdown">
                            <i class="ti-email"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li class="pX-20 pY-15 bdB">
                                <i class="ti-email pR-10"></i>
                                <span class="fsz-sm fw-600 c-grey-900">Emails</span>
                            </li>
                            <li>
                                <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                                    <li>
                                        <a href="" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                            <div class="peer mR-15">
                                                <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/1.jpg" alt="">
                                            </div>
                                            <div class="peer peer-greed">
                                                <div>
                                                    <div class="peers jc-sb fxw-nw mB-5">
                                                        <div class="peer">
                                                            <p class="fw-500 mB-0">John Doe</p>
                                                        </div>
                                                        <div class="peer">
                                                            <small class="fsz-xs">5 mins ago</small>
                                                        </div>
                                                    </div>
                                                    <span class="c-grey-600 fsz-sm">
                                Want to create your own customized data generator for your app...
                              </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                            <div class="peer mR-15">
                                                <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/2.jpg" alt="">
                                            </div>
                                            <div class="peer peer-greed">
                                                <div>
                                                    <div class="peers jc-sb fxw-nw mB-5">
                                                        <div class="peer">
                                                            <p class="fw-500 mB-0">Moo Doe</p>
                                                        </div>
                                                        <div class="peer">
                                                            <small class="fsz-xs">15 mins ago</small>
                                                        </div>
                                                    </div>
                                                    <span class="c-grey-600 fsz-sm">
                                Want to create your own customized data generator for your app...
                              </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                            <div class="peer mR-15">
                                                <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/3.jpg" alt="">
                                            </div>
                                            <div class="peer peer-greed">
                                                <div>
                                                    <div class="peers jc-sb fxw-nw mB-5">
                                                        <div class="peer">
                                                            <p class="fw-500 mB-0">Lee Doe</p>
                                                        </div>
                                                        <div class="peer">
                                                            <small class="fsz-xs">25 mins ago</small>
                                                        </div>
                                                    </div>
                                                    <span class="c-grey-600 fsz-sm">
                                Want to create your own customized data generator for your app...
                              </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pX-20 pY-15 ta-c bdT">
                    <span>
                      <a href="email.html" class="c-grey-600 cH-blue fsz-sm td-n">View All Email <i class="fs-xs ti-angle-right mL-10"></i></a>
                    </span>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                            <div class="peer mR-10">
                                <img class="w-2r bdrs-50p" src="{{ asset('/images/zagday.jpg') }}" alt="Roman Zagday">
                            </div>
                            <div class="peer">
                                <span class="fsz-sm c-grey-900">{{ Auth::user()->name }}</span>
                            </div>
                        </a>
                        <ul class="dropdown-menu fsz-sm">
                            <li>
                                <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                                    <i class="ti-settings mR-10"></i>
                                    <span>Setting</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('users.show', Auth::user()->id) }}" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                                    <i class="ti-user mR-10"></i>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="email.html" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                                    <i class="ti-email mR-10"></i>
                                    <span>Messages</span>
                                </a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="javascript:void(0);" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700" id="logout">
                                    <i class="ti-power-off mR-10"></i>
                                    <span>Logout</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <!-- ### $App Screen Content ### -->
        <main class='main-content bgc-grey-100'>
            <div id='mainContent'>
                @yield('main')
            </div>
        </main>

        <!-- ### $App Screen Footer ### -->
        <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
            <span>Copyright © 2019 Designed by <a href="https://colorlib.com" target='_blank' title="Colorlib">Colorlib</a>. All rights reserved.</span>
        </footer>
    </div>
@endsection

@section('javascript')
    <script>
        $('#logout').click(function() {
            document.getElementById('logout-form').submit();
        });
    </script>
@endsection
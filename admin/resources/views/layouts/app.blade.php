<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ICP - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{asset('/assets')}}/images/icon/logo.png">
    <link rel="stylesheet" href="{{asset('/assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/assets')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('/assets')}}/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('/assets')}}/css/metisMenu.css">
    <link rel="stylesheet" href="{{asset('/assets')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('/assets')}}/css/slicknav.min.css">
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets')}}/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets')}}/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets')}}/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets')}}/css/responsive.jqueryui.min.css">


    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('/assets')}}/css/typography.css">
    <link rel="stylesheet" href="{{asset('/assets')}}/css/default-css.css">
    <link rel="stylesheet" href="{{asset('/assets')}}/css/styles.css">
    <link rel="stylesheet" href="{{asset('/assets')}}/css/responsive.css">
    <script src="{{asset('/assets')}}/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>


<div id="preloader">
    <div class="loader"></div>
</div>


<div class="page-container">
    <!-- sidebar menu area start -->
    <div class="sidebar-menu">
        <div class="sidebar-header">
            <div class="logo">
                <a href="{{route('dashboard')}}"><img src="{{asset('/assets')}}/images/icon/logo.png" alt="logo"></a>
            </div>
        </div>
        <div class="main-menu">
            <div class="menu-inner">
                <nav>
                    <ul class="metismenu" id="menu">
                        <li class="active">
                            <a href="{{route('dashboard')}}" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                        </li>

                        <li>
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Website</span></a>
                            <ul class="collapse">
                                <li><a href="{{route('admin.web.carousel.view')}}">Carousel</a></li>
                                <li><a href="{{route('admin.web.blog.view')}}">Blog</a></li>
                                <li><a href="{{route('admin.web.bp.view')}}">Business Partner </a></li>
                                <li><a href="{{route('admin.web.about.view')}}">About us</a></li>
                                <li><a href="{{route('admin.web.service.view')}}">Our Service</a></li>
                                <li><a href="{{route('contact')}}">Contact Us</a></li>
                                <li><a href="{{route('socialMedia')}}">Social Media</a></li>
                                <li><a href="{{route('admin.web.gallery.view')}}">Gallery Image</a></li>
                            </ul>
                        </li>

                        <li><a href="{{route('carousel')}}"><i class="ti-pie-chart"></i><span>Carousel</span></a></li>
                        <li><a href="{{route('category')}}"><i class="ti-pie-chart"></i><span>Category</span></a></li>
                        <li><a href="{{route('subCategory')}}"><i class="ti-palette"></i><span>Sub Category</span></a></li>
                        <li><a href="{{route('brand')}}"><i class="ti-slice"></i><span>Brand</span></a></li>
                        <li><a href="{{route('unit')}}"><i class="fa fa-table"></i><span>Unit</span></a></li>
                        <li><a href="{{route('product')}}"><i class="ti-map-alt"></i> <span>Product</span></a></li>
                        <li><a href="{{route('customer')}}"><i class="ti-receipt"></i> <span>Customer</span></a></li>
                        <li><a href="{{route('order')}}"><i class="ti-receipt"></i> <span>Orders</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>


    <div class="main-content">
        <!-- header area start -->
        <div class="header-area">
            <div class="row align-items-center">
                <!-- nav and search button -->
                <div class="col-md-6 col-sm-8 clearfix">
                    <div class="nav-btn pull-left">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="search-box pull-left">
                        <form action="#">
                            <input type="text" name="search" placeholder="Search..." required>
                            <i class="ti-search"></i>
                        </form>
                    </div>
                </div>
                <!-- profile info & task notification -->
                <div class="col-md-6 col-sm-4 clearfix">
                    <ul class="notification-area pull-right">
                        <li id="full-view"><i class="ti-fullscreen"></i></li>
                        <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                        <li class="dropdown">
                            <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                <span>0</span>
                            </i>
                        </li>
                        <li class="dropdown">
                            <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>0</span></i>
                        </li>
                        <li class="settings-btn">
                            <i class="ti-settings"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- header area end -->
        <!-- page title area start -->
        <div class="page-title-area">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumbs-area clearfix">
                        <h4 class="page-title pull-left">@yield('title')</h4>
                    </div>
                </div>
                <div class="col-sm-6 clearfix">
                    <div class="user-profile pull-right">
                        <img class="avatar user-thumb" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                        <h4 class="user-name dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }} <i class="fa fa-angle-down"></i></h4>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Message</a>
                            <a class="dropdown-item" href="#">Settings</a>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" class="dropdown-item">{{ __('Log Out') }}</a>
                            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page title area end -->

        @yield('body')

    </div>
    <!-- main content area end -->
    <!-- footer area start-->
    <footer>
        <div class="footer-area">
            <p>© Copyright {{ date('Y') }}. All right reserved by <a href="#">ICP</a>.</p>
        </div>
    </footer>
    <!-- footer area end-->
</div>


<script src="{{asset('/assets')}}/js/vendor/jquery-2.2.4.min.js"></script>
<script src="{{asset('/assets')}}/js/popper.min.js"></script>
<script src="{{asset('/assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('/assets')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('/assets')}}/js/metisMenu.min.js"></script>
<script src="{{asset('/assets')}}/js/jquery.slimscroll.min.js"></script>
<script src="{{asset('/assets')}}/js/jquery.slicknav.min.js"></script>
<script src="{{asset('/assets')}}/js/Chart.min.js"></script>
<script src="{{asset('/assets')}}/js/highcharts.js"></script>
<script src="{{asset('/assets')}}/js/zingchart.min.js"></script>
<script src="{{asset('/assets')}}/js/line-chart.js"></script>
<script src="{{asset('/assets')}}/js/pie-chart.js"></script>

<!-- Start datatable js -->
<script src="{{asset('/assets')}}/js/jquery.dataTables.js"></script>
<script src="{{asset('/assets')}}/js/jquery.dataTables.min.js"></script>
<script src="{{asset('/assets')}}/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('/assets')}}/js/dataTables.responsive.min.js"></script>
<script src="{{asset('/assets')}}/js/responsive.bootstrap.min.js"></script>

<script src="{{asset('/assets')}}/js/plugins.js"></script>
<script src="{{asset('/assets')}}/js/scripts.js"></script>
</body>
</html>

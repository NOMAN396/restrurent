<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords"
        content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{ asset('public/theme-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/theme-assets/images/ico/favicon.ico') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/theme-assets/css/vendors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/theme-assets/vendors/css/charts/chartist.css') }}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/theme-assets/css/app-lite.css') }}">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/theme-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/theme-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/theme-assets/css/pages/dashboard-ecommerce.css') }}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
    @stack('styles')
</head>


<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    <!-- fixed-top-->
    <nav
        class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="collapse navbar-collapse show" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                href="#"><i class="ft-menu"></i></a></li>
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i
                                    class="ficon ft-maximize"></i></a></li>
                        <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide"
                                data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
                            <ul class="dropdown-menu">
                                <li class="arrow_box">
                                    <form>
                                        <div class="input-group search-box">
                                            <div class="position-relative has-icon-right full-width">
                                                <input class="form-control" id="search" type="text"
                                                    placeholder="Search here...">
                                                <div class="form-control-position navbar-search-close"><i
                                                        class="ft-x"> </i></div>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link"
                                id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span
                                    class="selected-language"></span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                                <div class="arrow_box"><a class="dropdown-item" href="#"><i
                                            class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item"
                                        href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a
                                        class="dropdown-item" href="#"><i class="flag-icon flag-icon-ru"></i>
                                        Russian</a><a class="dropdown-item" href="#"><i
                                            class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item"
                                        href="#"><i class="flag-icon flag-icon-es"></i> Spanish</a></div>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label"
                                href="#" data-toggle="dropdown"><i class="ficon ft-mail"> </i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="arrow_box_right"><a class="dropdown-item" href="#"><i
                                            class="ft-book"></i> Read Mail</a><a class="dropdown-item"
                                        href="#"><i class="ft-bookmark"></i> Read Later</a><a
                                        class="dropdown-item" href="#"><i class="ft-check-square"></i> Mark all
                                        Read </a></div>
                            </div>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a
                                class="dropdown-toggle nav-link dropdown-user-link" href="#"
                                data-toggle="dropdown"> <span class="avatar avatar-online"><img
                                        src="{{ asset('public/theme-assets/images/portrait/small/avatar-s-19.png') }}"
                                        alt="avatar"><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="arrow_box_right"><a class="dropdown-item" href="#"><span
                                            class="avatar avatar-online"><img
                                                src="{{ 'public/theme-assets/images/portrait/small/avatar-s-19.png' }}"
                                                alt="avatar"><span class="user-name text-bold-700 ml-1">John
                                                Doe</span></span></a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i
                                            class="ft-user"></i> Edit Profile</a><a class="dropdown-item"
                                        href="#"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item"
                                        href="#"><i class="ft-check-square"></i> Task</a><a
                                        class="dropdown-item" href="#"><i class="ft-message-square"></i>
                                        Chats</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item"
                                        href="{{ route('logOut') }}"><i class="ft-power"></i> Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true"
        data-img="{{ asset('public/theme-assets/images/backgrounds/02.jpg') }}">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo"
                            alt="Chameleon admin logo"
                            src="{{ asset('public/theme-assets/images/logo/logo.png') }}" />
                        <h3 class="brand-text">Chameleon</h3>
                    </a></li>
                <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
            </ul>
        </div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="active"><a href="{{ route('dashboard') }}"><i class="ft-home"></i><span
                            class="menu-title" data-i18n="">Dashboard</span></a>
                </li> 
                <br>    
                <li class="dropdown"><span class="pl-5">Users</span><i class="la la-chevron-right"></i> 
        <ul>
                <li><a href="{{ route('user.index') }}"><i class="ft-pie-chart"></i><span
                            class="menu-title" data-i18n="">Users</span></a></li>
                                    <li><a href="{{ route('role.index') }}"><i class="ft-pie-chart"></i><span
                            class="menu-title" data-i18n="">Role</span></a></li> 
                </ul>
        </li>
                                                                  
                                                                                      
                        <br>
                            <li class="dropdown"><span class="pl-5">Items</span><i class="la la-chevron-right"></i>

                           <ul>                                              
                           <li><a href="{{ route('items.index')}}"><i class="ft-credit-card"></i><span class="menu-title"
                            data-i18n="">Item</span></a></li>
                            <li><a href="{{route('item_varients.index')}}"><i class="ft-credit-card"></i><span class="menu-title"
                            data-i18n="">Item Varients</span></a></li>
                            <li><a href="{{route('purches_items.index')}}"><i class="ft-credit-card"></i><span class="menu-title"
                            data-i18n="">Purches_items</span></a></li>
                           </ul>
                        </li>
                        <br>


                        <li class="dropdown"><span class="pl-5">Catagories</span><i class="la la-chevron-right"></i>
                         <ul>
                         <li><a href="{{route('kitchens.index')}}"><i class="ft-box"></i><span class="menu-title"
                            data-i18n="">Kitchen</span></a></li>
                            <li><a href="{{ route('catagories.index') }}"><i class="ft-droplet"></i><span
                            class="menu-title" data-i18n="">Catagories</span></a></li>
                            <li><a href="{{route('kitchen_catagories.index')}}"><i class="ft-bold"></i><span class="menu-title"
                            data-i18n="">kichenCatagory</span></a></li>
                         </ul>
                        </li>
                        
                         <br>
                        <li class="dropdown"><span class="pl-5">Customers</span><i class="la la-chevron-right"></i>

                             <ul>
                                    <li><a href="{{route('order_details.index')}}"><i class="ft-credit-card"></i><span class="menu-title"
                            data-i18n="">Order_details</span></a></li>
                                    <li><a href="{{route('customers.index')}}"><i class="ft-credit-card"></i><span class="menu-title"
                            data-i18n="">Customers</span></a></li>
                                    <li><a href="{{route('order_payments.index')}}"><i class="ft-credit-card"></i><span class="menu-title"
                            data-i18n="">Payments</span></a></li>
                                    <li><a href="{{route('purches_payments.index')}}"><i class="ft-credit-card"></i><span class="menu-title"
                            data-i18n="">Purches</span></a></li>
                            </ul>
                            <li>
                                            <br>                    
   <li class="dropdown"><span class="pl-5">Row Item</span><i class="la la-chevron-right"></i>
   <ul>
                                    <li><a href="{{route('row_items.index')}}"><i class="ft-credit-card"></i><span class="menu-title"
                            data-i18n="">Row Item</span></a></li>
                                    <li><a href="{{route('stocks.index')}}"><i class="ft-credit-card"></i><span class="menu-title"
                            data-i18n="">Stocks</span></a></li>
                                    <li><a href="{{route('units.index')}}"><i class="ft-credit-card"></i><span class="menu-title"
                            data-i18n="">Units</span></a></li>
                                    <li><a href="{{route('purcheses.index')}}"><i class="ft-credit-card"></i><span class="menu-title"
                            data-i18n="">purchesss</span></a></li>
                                    <li><a href="{{route('purches_details.index')}}"><i class="ft-credit-card"></i><span class="menu-title"
                            data-i18n="">purches_details</span></a></li>
                            <li><a href="{{route('suppliers.index')}}"><i class="ft-credit-card"></i><span class="menu-title"
                            data-i18n="">Suppliers</span></a></li>
                            <li><a href="{{route('purches_items.index')}}"><i class="ft-credit-card"></i><span class="menu-title"
                            data-i18n="">Purches_items</span></a></li>
</ul>
 </li>   



                                  
                                    
                                    <li><a href="{{route('waiters.index')}}"><i class="ft-credit-card"></i><span class="menu-title"
                            data-i18n="">Waiters</span></a></li>
                                    <li><a href="{{route('fontendbookings.index')}}"><i class="ft-credit-card"></i><span class="menu-title"
                            data-i18n="">online Table</span></a></li>
                                    <li><a href="{{route('products.index')}}"><i class="ft-credit-card"></i><span class="menu-title"
                            data-i18n="">Add Products</span></a></li>
                            
                              
                       
                                    <li class=" nav-item"><a href="{{route('orders.index')}}"><i class="ft-layout"></i><span class="menu-title"
                                    data-i18n="">Orders</span></a>
                                    </li> 
                <li class=" nav-item"><a
                        href="{{route('bookingtables.index')}}"><i
                            class="ft-book"></i><span class="menu-title" data-i18n="">Booking Table</span></a>
                </li>
                <li class=" nav-item"><a
                        href="{{route('orderlists.index')}}"><i
                            class="ft-book"></i><span class="menu-title" data-i18n="">Din-In</span></a>
                </li>
            </ul>
        </div>
        <div class="navigation-background"></div>

    </div>
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">@yield('title')</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">@yield('title')
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body"><!-- Basic Alerts start -->
                @yield('content')
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span
                class="float-md-left d-block d-md-inline-block">2018 &copy; Copyright <a
                    class="text-bold-800 grey darken-2" href="https://themeselection.com"
                    target="_blank">ThemeSelection</a></span>
            <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
                <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/" target="_blank">
                        More themes</a></li>
                <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/support"
                        target="_blank"> Support</a></li>
                <li class="list-inline-item"><a class="my-1"
                        href="https://themeselection.com/products/chameleon-admin-modern-bootstrap-webapp-dashboard-html-template-ui-kit/"
                        target="_blank"> Purchase</a></li>
            </ul>
        </div>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('public/theme-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('public/theme-assets/vendors/js/charts/chartist.min.js') }}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="{{ asset('public/theme-assets/js/core/app-menu-lite.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/theme-assets/js/core/app-lite.js') }}" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('public/theme-assets/js/scripts/pages/dashboard-lite.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
</body>

</html>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="../../assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/icon2.png">
    <title>Administrator</title>

<style type="text/css">
		{
			background-image: url(images/L.jpg);
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
		}
</style>
</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper">
    <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="navbar-brand" href="{{ url('/') }}">
     
                        <b class="logo-icon p-l-10">
                            <img src="../../assets/images/icon2.png" href="{{ url('/') }}" class="light-logo" />
                        </b>
                        <span class="logo-text">                             
                             <img src="../../assets/images/admin logo.png" href="{{ url('/') }}" class="light-logo" />                             
                        </span>
                    </a>                   
                </div>



        <ul class="navbar-nav ml-auto">
                    @guest("admin")
                        <li class="nav-item">
                            <a class="navbar-brand" href="{{ route('admin.login') }}">
                                <button type="button" herf="{{ route('admin.login') }}"class="btn btn-secondary btn-sm" >{{ __('Login') }}</button>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="{{ route('admin.register') }}">
                                <button type="button" herf="{{ route('admin.register') }}"class="btn btn-secondary btn-sm" >{{ __('Register') }}</button>
                            </a>
                        </li>
                      @endguest

                     @auth("admin")
                        <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="{{route('logout')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                         <i class="fa fa-power-off m-r-5 m-l-5"></i>Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        </ul>
                    @endauth
        </ul>
    </nav>
</header>
        @auth("admin")
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/" aria-expanded="false"><i class="mdi mdi-home"></i><span class="hide-menu">Home</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin/dashboard" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/aprofile" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Profile</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Products</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="/admin/productcreate" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Add product </span></a></li>
                                <li class="sidebar-item"><a href="/viewproduct" class="sidebar-link"><i class="mdi mdi-home-modern"></i><span class="hide-menu"> Product List </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Categoris </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="/admin/categorycreate" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Add Category </span></a></li>
                                <li class="sidebar-item"><a href="/admin/viewcategory" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Categories List</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin/booking" aria-expanded="false"><i class="mdi mdi-book-multiple-variant"></i><span class="hide-menu">Orders</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin/customer" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Register Customer</span></a></li>      
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        @endauth
                        @yield('content')
        </div>
    
   <!-- <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    </script-->
    


    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="../../dist/js/waves.js"></script>
    <script src="../../dist/js/sidebarmenu.js"></script>
    <script src="../../dist/js/custom.min.js"></script>
    <script src="../../assets/libs/flot/excanvas.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.time.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="../../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../../dist/js/pages/chart/chart-page-init.js"></script>
    

</body>
</html>

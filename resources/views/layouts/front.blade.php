<!DOCTYPE html>
<html>

<!-- Mirrored from hoteliano.firebaseapp.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Nov 2020 09:17:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!---google fonts hear-->
    <link href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap" rel="stylesheet">
    <!-- favicon png -->
    <link rel="shortcut icon" href="{{ URL::to('assets/images/fav.png ') }}" type="image/x-icon">
    <!-- metro ui css -->
    <link rel="stylesheet" href="{{ url::to('assets/css/metro.min.css' ) }}">
    <!-- swipper css -->
    <link rel="stylesheet" href="{{ url::to('assets/css/swiper.min.css' ) }}">
    <!-- lightcase css -->
    <link rel="stylesheet" href="{{ url::to( 'assets/css/lightcase.css' ) }}">
    <!-- custom css -->
    <link rel="stylesheet" href="{{ url::to( 'assets/css/style.css') }}">

    <title>Fabric Emporium Online!</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    
    <!-- header area starting -->
    <header>
        <div class="fixed-header">
            <div class="container">
                <div class="header-item">
                    <div class="header-left">
                        <div class="side-menu">
                            <div class="menu-bar">
                                <a href="#0" class="bar-btn" data-role="popover" data-popover-text="All menus!" data-popover-position="bottom">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 32 24">
                                        <g transform="translate(-201 -70)"><rect width="24" height="4" transform="translate(201 80)" fill="#deb666"/><rect width="24" height="4" transform="translate(209 90)" fill="#262261"/><rect width="24" height="4" transform="translate(209 70)" fill="#262261"/></g>
                                    </svg>
                                </a>
                            </div>
                            <div class="overlay"></div>
                            <div class="menu-items">
                                <div class="items-inner">
                                    <div class="side-logo">
                                        <a href="/"><img src="{{url::to('assets/images/slgo.png')}}"></a>
                                    </div>
                                    <div class="crose-bar">
                                        <a href="#0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12.849" height="12.849"
                                                viewBox="0 0 8.849 8.849">
                                                <g id="Group_1481" data-name="Group 1481"
                                                    transform="translate(-96.393 -936.586)">
                                                    <line id="Line_211" data-name="Line 211" x1="8" y1="8"
                                                        transform="translate(96.817 937.011)" fill="none" stroke="#fff"
                                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                                    <line id="Line_212" data-name="Line 212" y1="2.332" x2="2.332"
                                                        transform="translate(96.817 942.679)" fill="none" stroke="#fff"
                                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                                    <line id="Line_213" data-name="Line 213" y1="2.332" x2="2.332"
                                                        transform="translate(102.484 937.011)" fill="none" stroke="#fff"
                                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="menu-list">
                                        <ul class="list-item" id="sidebar-menu">
                                            <li><a href="/">Home</a></li>
                                            <li><a href="/about">About</a></li>
                                            <li><a href="/contact">Contact</a></li>
                                            <li><a href="/product/view">Products</a></li>
                                            <li>
                                                <a href="#0">Product Categories</a>
                                                <ul class="m-submenu">
                                                  @foreach(\App\Category::all() as $category)
                                                    <li><a href="{{ route('category.show', $category->id) }}">{{ $category->name}} </a></li>
                                                  @endforeach
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="left-menu">
                            <ul>
                                <li>
                                    <a class="button"><img src="{{url::to('assets/images/flag/06.png')}}">Pakistan</a>
                                </li>
                                <li><a href="contant.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-logo">
                        <a href="/"><img src="{{url::to('assets/images/clgo.png')}}" alt=""></a>
                    </div>
                    <div class="header-right">
                        <ul class="right-menu">
                            <li><a href="">About Us</a></li>
                            <li>
                            @if(auth()->check())
                            <a href="/home" class="btn btn-warning" class="text-white">
                                    {{ __('Dashboard') }}
                                </a>

                        @else
                        <a class="dropdown-toggle"><img src="{{url::to('assets/images/icon/01.png')}}">Register / Sign In</a>
                                <ul class="d-menu" data-role="dropdown">
                                    <li><a href="/login">Log In</a></li>
                                    <li><a href="/register">Creat An Acount</a></li>
                                </ul>
                        
                        @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
     
            @yield('content')

            <footer>
        <div class="container">
            <div class="section-wrapper">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="quick-content">
                            <h4>QUICK LINKS</h4>
                            <ul class="list-items">
                                <li><a href="#0">Best Online Rate Guarantee</a></li>
                                <li><a href="#0">Destinations</a></li>
                                <li><a href="#0">Gift cards</a></li>
                                <li><a href="#0">New and upcoming hotels</a></li>
                                <li><a href="#0">Victoria Hotels App</a></li>
                                <li><a href="#0">Responsible Business</a></li>
                                <li><a href="#0">Sports Approved hotels</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="corporate-content">
                            <h4>CORPORATE</h4>
                            <ul class="list-items">
                                <li><a href="#0">Careers PPHE</a></li>
                                <li><a href="#0">Careers RHG</a></li>
                                <li><a href="#0">Development opportunities</a></li>
                                <li><a href="#0">Media</a></li>
                                <li><a href="#0">Victoria Hotel Group</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="legal-content">
                            <h4>LEGAL</h4>
                            <ul class="list-items">
                                <li><a href="#0">Ad and cookie policy</a></li>
                                <li><a href="#0">Digital Millennium Copyright Act</a></li>
                                <li><a href="#0">Legal notice</a></li>
                                <li><a href="privacy%26policy.html">Privacy policy</a></li>
                                <li><a href="trms.html">victoria Rewards terms and conditions</a></li>
                                <li><a href="#0">Site usage agreement</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="help-content">
                            <h4>HELP</h4>
                            <ul class="list-items">
                                <li><a href="#0">Consumer alerts</a></li>
                                <li><a href="contant.html">Contact</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="#0">Sitemap</a></li>
                            </ul>
                        </div>
                        <div class="socila-link">
                            <ul class="icon-list">
                                <li><a href="#0"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"width="48" height="48" viewBox="0 0 226 226" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,226v-226h226v226z" fill="none"></path><g><path d="M113,18.83333c-52.00681,0 -94.16667,42.15985 -94.16667,94.16667c0,52.00681 42.15985,94.16667 94.16667,94.16667c52.00681,0 94.16667,-42.15985 94.16667,-94.16667c0,-52.00681 -42.15985,-94.16667 -94.16667,-94.16667z" fill="#3b5998"></path><path d="M138.27433,113h-15.85767v56.5h-23.54167v-56.5h-14.125v-18.83333h14.125v-11.34708c0.00942,-16.51683 6.86946,-26.31958 26.329,-26.31958h16.046v18.83333h-10.76796c-7.57571,0 -8.06538,2.825 -8.06538,8.11246v10.72088h18.83333z" fill="#ffffff"></path></g></g></svg></a></li>
                                <li><a href="#0"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 226 226" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,226v-226h226v226z" fill="none"></path><g><path d="M113,18.83333c-52.00681,0 -94.16667,42.15985 -94.16667,94.16667c0,52.00681 42.15985,94.16667 94.16667,94.16667c52.00681,0 94.16667,-42.15985 94.16667,-94.16667c0,-52.00681 -42.15985,-94.16667 -94.16667,-94.16667z" fill="#007bb5"></path><path d="M65.91667,89.45833h18.83333v70.625h-18.83333zM75.27683,80.04167h-0.10358c-5.62175,0 -9.25658,-4.19042 -9.25658,-9.42137c0,-5.34396 3.74783,-9.41196 9.46846,-9.41196c5.73004,0 9.25658,4.068 9.36488,9.41196c0,5.23096 -3.63483,9.42137 -9.47317,9.42137zM164.79167,115.35417c0,-14.30392 -11.59192,-25.89583 -25.89583,-25.89583c-8.76692,0 -16.50271,4.36933 -21.1875,11.03633v-11.03633h-18.83333v70.625h18.83333v-37.66667c0,-7.80171 6.32329,-14.125 14.125,-14.125c7.80171,0 14.125,6.32329 14.125,14.125v37.66667h18.83333c0,0 0,-42.74696 0,-44.72917z" fill="#ffffff"></path></g></g></svg></a></li>
                                <li><a href="#0"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 226 226" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,226v-226h226v226z" fill="none"></path><g><path d="M113,18.83333c-52.00681,0 -94.16667,42.15985 -94.16667,94.16667c0,52.00681 42.15985,94.16667 94.16667,94.16667c52.00681,0 94.16667,-42.15985 94.16667,-94.16667c0,-52.00681 -42.15985,-94.16667 -94.16667,-94.16667z" fill="#2fb7df"></path><path d="M157.72917,103.58333c-29.90392,0 -54.14583,24.24192 -54.14583,54.14583c0,29.90392 24.24192,54.14583 54.14583,54.14583c29.90392,0 54.14583,-24.24192 54.14583,-54.14583c0,-29.90392 -24.24192,-54.14583 -54.14583,-54.14583zM68.27083,14.125c-29.90392,0 -54.14583,24.24192 -54.14583,54.14583c0,29.90392 24.24192,54.14583 54.14583,54.14583c29.90392,0 54.14583,-24.24192 54.14583,-54.14583c0,-29.90392 -24.24192,-54.14583 -54.14583,-54.14583z" fill="#3498db"></path><path d="M115.83442,169.5c-31.08442,0 -45.20942,-15.54221 -45.20942,-27.31304c0,-6.12554 4.22808,-10.35363 10.35363,-10.35363c13.18804,0 9.89692,19.31358 34.85108,19.31358c12.70779,0 19.77029,-7.0625 19.77029,-14.125c0,-4.24692 -1.89275,-8.95525 -10.35363,-11.30942l-27.78858,-7.0625c-22.12446,-5.65 -26.35254,-17.90108 -26.35254,-29.67192c0,-24.00308 22.12446,-32.47808 42.83642,-32.47808c19.30887,0 41.43333,10.35362 41.43333,24.47863c0,6.12554 -4.70833,9.89692 -10.83388,9.89692c-11.29058,0 -9.41667,-16.01775 -32.02138,-16.01775c-11.29058,0 -17.87754,5.18858 -17.87754,12.72662c0,7.52392 8.93642,9.87808 16.94058,11.77083l20.72608,4.70833c22.58588,5.16504 27.77446,18.35308 27.77446,31.06088c-0.48025,19.77029 -14.60525,34.37554 -44.24892,34.37554z" fill="#ffffff"></path></g></g></svg></a></li>
                                <li><a href="#0"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 226 226" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,226v-226h226v226z" fill="none"></path><g><path d="M113,18.83333c-52.00681,0 -94.16667,42.15985 -94.16667,94.16667c0,52.00681 42.15985,94.16667 94.16667,94.16667c52.00681,0 94.16667,-42.15985 94.16667,-94.16667c0,-52.00681 -42.15985,-94.16667 -94.16667,-94.16667z" fill="#55acee"></path><path d="M169.5,80.60667c-4.15275,1.84096 -9.41196,3.56892 -14.125,4.14333c4.79308,-2.84383 12.39704,-8.76692 14.125,-14.125c-4.47763,2.63196 -12.57596,5.44283 -17.85871,6.45983c-4.21867,-4.47292 -10.23592,-6.45983 -16.90292,-6.45983c-12.80667,0 -21.73837,10.85271 -21.73837,23.54167v9.41667c-18.83333,0 -37.19583,-14.34629 -48.62296,-28.25c-2.01046,3.39471 -3.14046,7.36854 -3.14046,11.56838c0,8.56446 7.86763,17.25604 14.09675,21.38996c-3.79963,-0.11771 -10.99396,-3.01804 -14.125,-4.70833c0,0.07533 0,0.1695 0,0.26837c0,11.14463 7.82054,18.71092 18.419,20.82025c-1.93512,0.53204 -4.294,2.45304 -13.37167,2.45304c2.94742,9.11063 17.76454,13.92725 27.911,14.125c-7.93825,6.15379 -22.0915,9.41667 -32.95833,9.41667c-1.87863,0 -2.89563,0.10358 -4.70833,-0.10829c10.25475,6.4975 24.5775,9.52496 37.66667,9.52496c42.64338,0 65.91667,-32.57225 65.91667,-62.95042c0,-0.99817 -0.03296,-4.34108 -0.08475,-5.32042c4.55767,-3.21108 6.40333,-6.57283 9.50142,-11.20583" fill="#ffffff"></path></g></g></svg></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>     
     <script src="{{ url::to('assets/js/jquery.js')}}"></script>
     <script src="{{url::to('assets/js/metro.min.js')}}"></script>
     <script src="{{url::to('assets/js/imagesloaded.pkgd.min.js')}}"></script>
     <script src="{{url::to('assets/js/isotope-min.js')}}"></script>
     <script src="{{url::to('assets/js/swiper.min.js')}}"></script>
     <script src="{{url::to('assets/js/lightcase.js')}}"></script>
     <script src="{{url::to('assets/js/function.js')}}"></script>
    
</body>

<!-- Mirrored from hoteliano.firebaseapp.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Nov 2020 09:18:45 GMT -->
</html>
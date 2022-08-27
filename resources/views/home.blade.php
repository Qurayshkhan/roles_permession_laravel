@extends('layouts.app')

@section('content')
<aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/" aria-expanded="false"><i class="mdi mdi-home"></i><span class="hide-menu">Home</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/home" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/uprofile" aria-expanded="false"><i class="mdi mdi-book-multiple-variant"></i><span class="hide-menu">Profile</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/viewbooking" aria-expanded="false"><i class="mdi mdi-star"></i><span class="hide-menu">Bookings</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <div class="page-wrapper">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
    <h1 
	        style="font-size:40px;color:darkBlue;text-align: center;
            text-decoration: underline;text-decoration-color: black;">A WARM WELCOME To Dear CUSTOMER 
	</h1>

    <h2 
	        style="font-size:30px;color:darkBlue;text-align: center;
            text-decoration: underline;text-decoration-color: black;">WE are Serving Our Servises TO YOU Here... 
	</h2>
    <h4 
	        style="font-size:20px;color:DarkSlateGrey;text-align: center;
            text-decoration: underline;text-decoration-color: black;"> REGARDS FEO Team
	</h4>

    
                            </div>
                        </div>
                    </div>
                </div>
        </div>
@endsection

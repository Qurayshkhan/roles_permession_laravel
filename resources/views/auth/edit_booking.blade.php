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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Booking') }}</div>

                <div class="card-body">
                    <form method="POST" action= "/bookingedit/{{$booking->id}}">
                        @csrf

                        {{--<div class="form-group row">--}}
                            {{--<label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{  $booking->type}}" required autocomplete="type" autofocus>--}}

                                {{--@error('type')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                {{--@enderror--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        
                        <div class="form-group row">
                            <label for="booking_date" class="col-md-4 col-form-label text-md-right">{{ __('Booking Date') }}</label>

                            <div class="col-md-6">
                                <input id="booking_date" type="date" class="form-control @error('booking_date') is-invalid @enderror" name="booking_date" value = "{{ date('Y-m-d', strtotime($booking->booking_date)) }}" required autocomplete="booking_date" autofocus>

                                @error('booking_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{  $booking->description }}" required autocomplete="description">

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> 
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-warning">
                                    {{ __('Apply Changes') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

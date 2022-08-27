@extends('layouts.app')

@section("styles")
    <style>
        i:hover {
            cursor: pointer;
        }
    </style>
@stop

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
                <div class="card-header"><h1>{{ __('Rate This Booking') }}</h1></div>

                <div class="card-body">
                    <form method="POST" action= "{{ route('userrating.store') }}" id="{{ $rating ? "" : "ratingForm"  }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="hall_id" value="{{ $booking->hall->id }}">
                        <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                        <input type="hidden" name="booking_id" value="{{ $booking->id }}">
                        <input type="hidden" name="rating_id" id="rating">
                        {{--<div class="form-group row">--}}
                                                  {{--<label for="type" class="col-md-4 col-form-label text-md-right">Type</label>--}}

                            {{--<div class="col-md-6">--}}
                                     {{--<input type="text" class="form-control" {{ $booking ? 'readonly' : ''}}  value="{{ $booking ? $booking->type : ''  }}">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="form-group row">
                       <label for="type" class="col-md-4 col-form-label text-md-right">Booking Date</label>

                            <div class="col-md-6">
                               <input type="text" class="form-control" {{ $booking ? 'readonly' : ''}}  value="{{ $booking ? $booking->booking_date : ''  }}">
                            </div>
                        </div>

                        <div class="form-group row">
                                 <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                  <input type="text" class="form-control" {{ $booking ? 'readonly' : ''}}  value="{{ $booking ? $booking->description : ''  }}">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rating" class="col-md-4 col-form-label text-md-right">{{ $rating ? "Rated" : "Rating" }}</label>

                            <div class="col-md-6">
                                @if($rating)
                                    @php
                                        $iteration = 0;
                                    @endphp
                                    @for($i=1; $i<= $rating->rating; $i++)
                                       @php $iteration++ @endphp
                                        <i class="fas fa-star text-warning"></i>
                                    @endfor
                                        @for($i=1; $i <= 5 - $iteration; $i++)
                                            <i class="far fa-star text-warning"></i>
                                        @endfor
                                @else
                                    <i data-id="1" class="far fa-star text-warning rating"></i>
                                    <i data-id="2" class="far fa-star text-warning rating"></i>
                                    <i data-id="3" class="far fa-star text-warning rating"></i>
                                    <i data-id="4" class="far fa-star text-warning rating"></i>
                                    <i data-id="5" class="far fa-star text-warning rating"></i>
                                @endif

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

@section("scripts")
    <script>
        $(document).ready(function () {
           $(".rating").click(function () {
                const id = $(this).data("id");
                $("#rating").val(id);
                $("#ratingForm").submit();
           });
        });
    </script>
@stop
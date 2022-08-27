@extends('layouts.admin')

@section("styles")
    <style>
        i:hover {
            cursor: pointer;
        }
    </style>
@stop

@section('content')
    <div class="page-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><h1>{{ __('Rating on this booking') }}</h1></div>

                        <div class="card-body">
                            <input type="hidden" name="hall_id" value="{{ $booking->hall ? $booking->hall->id : "" }}">
                            <input type="hidden" name="user_id" value="{{ auth('admin')->id() }}">
                            <input type="hidden" name="booking_id" value="{{ $booking->id }}">
                            <input type="hidden" name="rating_id" id="rating">
                            {{--<div class="form-group row">--}}
                                {{--<label for="type" class="col-md-4 col-form-label text-md-right">User</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input type="text" class="form-control" {{ $booking ? 'readonly' : ''}}  value="{{ $booking ? $booking->user->name : ''  }}">--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group row">--}}
                                {{--<label for="type" class="col-md-4 col-form-label text-md-right">Product</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input type="text" class="form-control" {{ $booking ? 'readonly' : ''}}  value="{{ $booking ? $booking->product->name : ''  }}">--}}
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
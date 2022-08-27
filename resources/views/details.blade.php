<?php 
    $user = auth()->user();
?>
@extends('layouts.front')

@section('content')

<section class="page-header style-two">
        <div class="overlays">
            <div class="container">
                <div class="banner-content">
                    <h3>Booking with FEO?</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- banner area ending   -->

    <!-- booking check out area -->
    <section class="booking-check">
        <div class="container">
            <div class="section-header text-center">
                <h4>Your booking preview only.</h4>
            </div>
            <div class="section-wrapper">
                <div class="row" style="justify-content: center;">
                    <div class="col-lg-4 col-md-6 col-12">
                         <div class="booking-sidebar">
                            <div class="booking-content">
                                <div class="check-thumb">
                                    <img src="{{URL::to('assets/images/booking/bookng-check.jpg')}}" alt="FEO" />
                                </div>
                                <div class="thumb-text">
                                    <h4>{{$product->name}}</h4>
                                    <h5>{{$product->type}}</h5>
                                    <h6>{{$product->charges}}</h6>
                                    <p>{{$product->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="col-lg-8 col-12">
                            <div class="booking-head">
                                <ul>
                                    <li><span>Already a member? Log in for faster booking. FEO</span></li>
                                </ul>
                            </div>
                        <div class="personal-information">
                            <h4>Personal Information</h4>
                            <div class="information-form">
                            <form method="post"action="/products" >
                            @csrf
            <input type="hidden" name='hall_id' value="{{ $product->id }}">
            <input type="hidden" name='user_id' value="{{ $user ? $user->id : '' }}">
            <div class="row">
                    <div class="col-12">
                       <label for="" class="font-weight-bold">Name</label>
                       <input type="text" class="form-control" {{ $user ? 'readonly' : ''}}  value="{{ $user ? $user->name : ''  }}">
                    </div>

                    <div class="col-12">
                       <label for="" class="font-weight-bold">Email</label>
                       <input type="text" class="form-control" {{ $user ? 'readonly' : ''}}  value="{{ $user ? $user->email : ''  }}">
                    </div>

                    <div class="col-12">
                       <label for="" class="font-weight-bold">Mobile</label>
                       <input type="text" class="form-control" {{ $user ? 'readonly' : ''}}  value="{{ $user ? $user->mobile : ''  }}">
                    </div>

                    <div class="col-12">
                       <label for="" class="font-weight-bold">Booking Date</label>
                        <input type="date" class="form-control"  name="booking_date" id="booking_date"  required="required">
                    </div>
            </div>

            <div class="booking-btn">
            @if(auth()->check())
            <button type="submit" class="btn btn-warning">
                                    {{ __('Booking Now') }}
                                </button>
                        @else
                        <a href="/login" class="btn btn-warning">
                                    {{ __('Pleasee login to book') }}
                                </a>
                        @endif
                        </div>

</form>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </section>
@endsection
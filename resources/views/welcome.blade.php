@extends('layouts.front')

@section('content')
  <section class="banner-area">
        <div class="banner-slide">
            <div class="swiper-wrapper">
                <div class="swiper-slide styel-one" style="background-image:url(assets/images/banner/01.jpg); background-position: center; background-size: cover;">
                    <div class="overlays">
                        <div class="container">
                            <div class="banner-position">
                                <div class="banner-content">
                                    <h2>FEO System!</h2>
                                    <p>Fabric Emporium Online...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image:url(assets/images/banner/02.jpg); background-position: center; background-size: cover;">
                    <div class="overlays">
                        <div class="container">
                            <div class="banner-position">
                                <div class="banner-content">
                                <h2>FEO System!</h2>
                                    <p>Fabric Emporium Online...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image:url(assets/images/banner/03.jpg); background-position: center; background-size: cover;">
                    <div class="overlays">
                        <div class="container">
                            <div class="banner-position">
                                <div class="banner-content">
                                <h2>FEO System!</h2>
                                    <p>Fabric Emporium Online...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
    </section>
    <!-- banner area ending   -->

    <!-- check box area start -->
    <div class="check-area">
        <div class="container">
            <div class="check-box">
                <form action="/search">
                    <div class="row">
                        <div class="col-10">
                            <input type="text" placeholder="Search Here" name="query">
                        </div>
                        <div class="col-2">
                            <div class="check-btn">
                            <button type="submit" class="btn btn-warning">
                                    {{ __('Search') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- check box area ending -->
    
    <!-- Hotel introduce area start -->
    <section class="hotel-introduce">
        <div class="container">
        <div class="section-wrapper">
                <div class="row" style="justify-content: center;">
                    @foreach($products as $hall)
                    <div class="col-lg-4 col-md-6 col-12">
                         <div class="booking-sidebar">
                            <div class="booking-content">
                                <div class="check-thumb">
                                <a href="{{ route('product.show', $hall->id) }}"><img src='{{URL::to("assets/images/product/$hall->id.jpg")}}'/></a>
                                </div>
                                <div class="thumb-text">
                                    <h4>{{$hall->name}}</h4>
                                    <h5>{{$hall->type}}</h5>
                                    <h6>{{$hall->charges}}</h6>
                                    <p>{{$hall->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
        </div>     
    </section>

    @endsection
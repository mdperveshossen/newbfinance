@extends('layouts.frontend_app')
@section('title')
    Testimonial | NEWB TOKEN WHITEPAPER
@endsection
@section('testimonial')
    active
@endsection
@section('frontend_content')

        <nav class="navbar navbar-expand-md navbar-light bg-faded cripto_nav">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <a class="navbar-brand" data-scroll href="{{ route('index') }}"><img src="{{ asset('uploads/logo') }}/{{ $logo->logo }}" alt=""></a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a data-scroll href="{{ route('index') }}" class="nav-link @yield('home')">Home</a></li>
                        <li class="nav-item"><a data-scroll href="{{ route('about') }}" class="nav-link @yield('about')">About Us</a></li>
                        <li class="nav-item"><a data-scroll href="{{ route('testimonial') }}" class="nav-link @yield('testimonial')">Testimonials</a>
                        </li>
                        <li class="nav-item"><a data-scroll href="{{ route('faq') }}" class="nav-link @yield('faq')">FAQ</a></li>
                    </ul>
                </div>
                {{-- <div class="language">
                    <a href="#" class="token">FORUM</a>

                </div> --}}
            </div>
        </nav>
    <!-- START about-banner -->
        <section id="about-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 text-center m-auto">
                        <h2>
                            Testimonials
                        </h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- END about-banner -->

        <span class="shape1 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/header6_shape_1.png" alt=""></span>
        <span class="shape5 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/header6_shape_5.png" alt=""></span>

        <span class="bubble1 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed1.png" alt=""></span>
        <span class="bubble2 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed1.png" alt=""></span>
        <span class="bubble3 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed2.png" alt=""></span>
        <span class="bubble4 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed4.png" alt=""></span>

        <div id="particles1-js" class="particles"></div>
    </header> <!-- End Header -->


    <section id="welcome_cryptonic_06">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="sub-title">
                        <h2 class=" wow fadeInUp" data-animate="fadeInUp" data-delay=".1s">
                            People who talk about us</h2>
                    </div>
                </div>
            </div>
            @foreach ($testimonials as $testimonial)
            <div class="row ">
                <div class="col-sm-12 col-md-10 col-lg-10 mx-auto">
                    <img class="test-img" src="{{ asset('uploads/testimonial') }}/{{ $testimonial->photo }}" alt="">
                    <div class="about_cryptonic-content">

                        <p class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.3s">
                            {!! $testimonial->description !!}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <span class="shape1 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/wel-map.png" alt=""></span>
        <span class="bubble1 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed1.png" alt=""></span>
        <span class="bubble2 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed1.png" alt=""></span>
        <div id="particles2-js" class="particles"></div>
    </section>
    <!-- End welcome_cryptonic -->
@endsection
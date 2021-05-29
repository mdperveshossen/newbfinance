@extends('layouts.frontend_app')
@section('title')
    Faq | NEWB TOKEN WHITEPAPER
@endsection
@section('faq')
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
                            FAQ
                        </h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- END about-banner -->


        <span class="shape1 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/header6_shape_1.png" alt=""></span>
        <span class="shape2 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/header6_shape_2.png" alt=""></span>
        <span class="shape5 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/header6_shape_5.png" alt=""></span>
        <div id="particles1-js" class="particles"></div>
    </header>



    <section id="faq-area-06" class="faq-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="sub-title">
                        <h2 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">{{ $detail->heading }}
                        </h2>
                        <p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s">{!! $detail->details !!}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <div class="faq-img  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                        <img src="{{ asset('frontend_asset') }}/images/fap-01.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <div class="faq-wrapper">
                        <!--Accordion wrapper-->
                        <div class="panel-group accordion-wrapper" id="accordion" role="tablist"
                            aria-multiselectable="true">
                            @foreach ($faqs as $faq)
                            <div class="panel accordion-single accordion-01  wow fadeInUp" data-wow-duration="2s"
                                data-wow-delay=".2s">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapse{{ $faq->id }}" aria-expanded="false" aria-controls="collapseTwo">
                                            {{ $faq->heading }}
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse{{ $faq->id }}" class="panel-collapse collapse  in" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="card-body  accordion-content">
                                        {!! $faq->details !!}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="particles10-js" class="particles"></div>
    </section><!-- End faq-area -->

    <section id="contact_06">
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto">
                        <div class="contact_heading">
                            <h2 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">Get in touch with us
                            </h2>
                        </div>
                        @if (session('message_send'))
                            <div class="alert alert-success">{{ session('message_send') }}</div>
                        @endif
                    <div class="contact_form">
                        <form action="{{ route('visitormessagepost') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-sm-12  form-group  wow fadeInUp" data-wow-duration="2s"
                                    data-wow-delay=".2s">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" name="name">
                                </div>
                                <div class="col-12 col-sm-12  form-group  wow fadeInUp" data-wow-duration="2s"
                                    data-wow-delay=".3s">
                                    <input type="email" class="form-control person-email" id="email"
                                        placeholder="E-mail Address" name="email">
                                </div>
                                <div class="col-12 col-sm-12 form-group  wow fadeInUp" data-wow-duration="2s"
                                    data-wow-delay=".4s">
                                    <textarea class="form-control" id="comment" placeholder="Message" name="messages"></textarea>
                                </div>
                                <div class="col-12 col-sm-12 form-group">
                                    <div class="submit-btn  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
                                        <input type="submit" value="Send Inquiry">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="particles11-js" class="particles"></div>
    </section><!-- End contact -->
@endsection
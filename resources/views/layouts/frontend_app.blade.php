
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Goole Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/assets/bootstrap.min.css">
    <!-- Font awsome CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/assets/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/fonts/flaticon/flaticon.css">
    <!-- popup-->
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/assets/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/assets/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/assets/owl.theme.css">
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/assets/jquery.countdown.css">
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/assets/animate.css">
    <!-- preloader css-->
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/assets/preloader.css">
    <!-- main style-->
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/cryptonio.css">
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/responsive.css">

</head>

<body class="body_06">


    <!-- Preloader -->
    <!-- <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div> -->

    <header id="header-06" class="header">

        <!-- START top-navbar  -->
        <!-- <section id="top-navbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>Need Help? Call us free. <a href="#">012 346 6789</a>  </p>
                    </div>
                    <div class="col-lg-6 text-right">
                        <a href="#" class="top-btn">Buy token</a>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- END top-navbar  -->


        <!-- START NAVBAR -->
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-faded cripto_nav">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <a class="navbar-brand" data-scroll href="{{ route('index') }}"><img src="{{ asset('frontend_asset') }}/images/logo-01.png" alt=""></a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a data-scroll href="{{ route('index') }}" class="nav-link @yield('home')">Home</a></li>
                        <li class="nav-item"><a data-scroll href="{{ route('about') }}" class="nav-link @yield('about')">About Us</a></li>
                        <li class="nav-item"><a data-scroll href="{{ route('testimonial') }}" class="nav-link @yield('testimonial')">Testimonials</a>
                        </li>
                        <li class="nav-item"><a data-scroll href="{{ route('faq') }}" class="nav-link @yield('faq')">FAQ</a></li>
                    </ul>
                </div>
                <div class="language">
                    <a href="#" class="token">FORUM</a>

                </div>
            </div>
        </nav> --}}
        <!-- END NAVBAR -->
        @yield('frontend_content')
        
    <footer id="footer-06" class="footer">
        <div class="container">
            <div class="row footer-btm-wrapper">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="footer_items text-center">
                        <div class="footer-single-col footer_single_list_1">
                            <h3 class="subtitle_1">&nbsp;<img src="{{ asset('uploads/logo') }}/{{ $logo->logo }}" alt=""></h3>
                            {{-- <ul class="social-links list-unstyled m-auto">
                                <li class="nav-item"><a href="https://www.facebook.com/newbofficial" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li class="nav-item"><a href="https://twitter.com/Newb_Token" target="_blank"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li class="nav-item"><a href="https://t.me/newbtokencommunity" target="_blank"><i
                                            class="fab fa-telegram"></i></a></li>
                                <li class="nav-item"><a href="https://www.instagram.com/newbtokenofficial/"
                                        target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li class="nav-item"><a href="https://cutt.ly/rbTS3FR" target="_blank"><i
                                            class="fab fa-reddit"></i></a></li>
                            </ul>
                            <ul class="m-auto" style="display: block;">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('testimonial') }}">Testimonials</a></li>
                                <li><a href="{{ route('faq') }}">FAQ</a></li>
                            </ul> --}}
                            <ul class="footer_links">
                                <a  class="footer_link" href="{{ route('about') }}">ABOUT</a>
                                <a  class="footer_link" href="{{ route('testimonial') }}">TESTIMONIAL</a>
                                <a  class="footer_link" href="{{ route('faq') }}">FAQ</a>
                                <a  class="footer_link" href="#contact_06">CONTACT US</a>
                                <a  class="footer_link" href="#">CRYPTO LEARNING</a>
                                <a  class="footer_link" href="#">LIVE CHAT</a>
                                <br>
                                <a class="footer_link" target="_blank" href="https://drive.google.com/file/d/1JnOuF_2lNyfCHwuBtqDTM8H6sO9-N0gt/view?usp=sharing">LITEPAPER</a>
                                <a class="footer_link" target="_blank" href="https://poocoin.app/tokens/0x982c05a6c9ce6107ccbc325ec3123f2d558a4904">CONTRACT</a>
                                <a class="footer_link" target="_blank" href="https://drive.google.com/file/d/1qot-Eb--fponc16IN0p6gWonfGHGNKUr/view?usp=drivesdk">AUDIT</a>
                                <a class="footer_link" href="#road_map">ROADMAP</a>
                                <a class="footer_link" href="#team_membar_06">MEET THE TEAM</a>
                                <a  class="footer_link" href="#">GET NEWB</a>
                            </ul>
                        </div>

                        {{-- <div class="footer-single-col footer_single_list_2">
                            <h3 class="subtitle_1">Company</h3>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('testimonial') }}">Testimonials</a></li>
                                <li><a href="{{ route('faq') }}">FAQ</a></li>
                            </ul>
                        </div>

                        <div class="footer-single-col footer_single_list_3">
                            <h3 class="subtitle_1">Information</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Customer Support</a></li>
                                <li><a href="#">Refund Policy</a></li>
                                <li><a href="#">Live Chat</a></li>
                                <li><a href="#">Support Policy</a></li>
                            </ul>
                        </div>

                        <div class="footer-single-col footer_single_list_4">
                            <h3 class="subtitle_1">Product</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Consumer</a></li>
                                <li><a href="#">Terms Condition</a></li>
                                <li><a href="#">Help & Faq</a></li>
                                <li><a href="#">Priceing</a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p> Copyright &copy; 2021, All rights reserved by NEWB, Created by <span> <a style="text-decoration: underline" href="http://futureinltd.com/"
                        target="_blank">Futurein LTD</a> </span></p>
        </div>
    </footer>
    <!-- ./ End Footer Area-->

    <!-- JavaScript Files -->
    <script src="{{ asset('frontend_asset') }}/js/assets/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/assets/popper.min.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/assets/bootstrap.min.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/assets/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/assets/jquery.sticky.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/assets/isotope.pkgd.min.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/assets/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/assets/jquery.downCount2.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/assets/jquery.countdown.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/assets/particles.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/assets/app.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/assets/smooth-scroll.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/assets/wow.min.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/chart.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/custom.js"></script>
    @yield('footer_scripts')
    
</body>


</html>
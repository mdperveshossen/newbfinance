@extends('layouts.frontend_app')
@section('title')
    About | NEWB TOKEN WHITEPAPER
@endsection
@section('about')
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
     <!-- End Header -->

    <section id="welcome_cryptonic_06">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="sub-title">
                        <h2 class=" wow fadeInUp" data-animate="fadeInUp" data-delay=".1s">{{ $detail->heading }}</h2>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-sm-12 col-md-10 col-lg-10 mx-auto">
                    <div class="about_cryptonic-content">
                        <img src="{{ asset('frontend_asset') }}/images/welcome-6.png" alt="" class="wow ZoomInUp" data-animate="ZoomInUp"
                            data-delay=".3s">
                        <p class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.3s">
                            {{ $detail->description }}
                         </p>
                            <a href="{{ $detail->btn1 }}" class="btn btn-default btn-default-style">Roadmap</a>
                            <a href="{{ $detail->btn2 }}" class="btn btn-default btn-default-style">Accomplishments”</a>
                    </div>
                </div>
            </div>
        </div>
        <span class="shape1 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/wel-map.png" alt=""></span>
        <span class="bubble1 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed1.png" alt=""></span>
        <span class="bubble2 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed1.png" alt=""></span>
        <div id="particles2-js" class="particles"></div>
    </section>
    <!-- End welcome_cryptonic -->
    @foreach ($services as $service)
    
        @php
        $width_round = round($loop->index/2);
        $width_out_round = $loop->index/2;
        @endphp
        @if ($width_out_round == $width_round)
        <section id="about_cryptonic_06">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-5 col-lg-7 mobile-device">
                        <div class="about-img">
                            <div class="img-wrapper">
                                <img src="{{ asset('uploads/about/service') }}/{{ $service->photo }}" alt="" class="wow fadeInUp" data-animate="fadeInUp"
                                    data-delay=".3s">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7 col-lg-5 padding-none">
                        <div class="about_cryptonic-content">
                            <h2 class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.2s">{{ $service->heading }}</h2>
                            <p class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.3s">
                                {!! $service->description !!}
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-5 col-lg-7  web-device">
                        <div class="about-img">
                            <div class="img-wrapper">
                                <img src="{{ asset('uploads/about/service') }}/{{ $service->photo }}" alt="" class="wow fadeInUp" data-animate="fadeInUp"
                                    data-delay=".3s">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="shape1 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/about-light-1.png" alt=""></span>
            <span class="shape2 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/about-light-2.png" alt=""></span>
            <span class="bubble1 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed1.png" alt=""></span>
            <span class="bubble2 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed2.png" alt=""></span>
            <span class="bubble3 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed3.png" alt=""></span>
            <div id="particles3-js" class="particles"></div>
        </section>
            
        @else
            
    <section id="about_cryptonic_06">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-5 col-lg-7 responsive-padding">
                    <div class="about-img">
                        <div class="img-wrapper">
                            <img src="{{ asset('uploads/about/service') }}/{{ $service->photo }}" alt="" class="wow fadeInUp" data-animate="fadeInUp"
                                data-delay=".3s">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-7 col-lg-5 padding-none">
                    <div class="about_cryptonic-content">
                        <h2 class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.2s">{{ $service->heading }}</h2>
                        <p class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.3s">
                            {!! $service->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <span class="shape1 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/about-light-1.png" alt=""></span>
        <span class="shape2 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/about-light-2.png" alt=""></span>
        <span class="bubble1 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed1.png" alt=""></span>
        <span class="bubble2 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed2.png" alt=""></span>
        <span class="bubble3 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed3.png" alt=""></span>
        <div id="particles3-js" class="particles"></div>
    </section>
        @endif
    @endforeach


    {{-- <section id="about_cryptonic_06">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-5 col-lg-7 responsive-padding">
                    <div class="about-img">
                        <div class="img-wrapper">
                            <img src="{{ asset('frontend_asset') }}/images/banner-img.png" alt="" class="wow fadeInUp" data-animate="fadeInUp"
                                data-delay=".3s">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-7 col-lg-5 padding-none">
                    <div class="about_cryptonic-content">
                        <h2 class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.2s">Learn from the Best</h2>
                        <p class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.3s">The learning resource center
                            will feature myriad, well-reviewed, well-respected crypto traders
                            and mentors. Courses will range from beginner to advanced and will feature a preview video
                            for
                            each course as well as a link to the previewed trader/mentor course.</p>
                    </div>
                    <div class="about_cryptonic-content heading-padding">
                        <h2 class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.2s">Rugpull Education</h2>
                        <p class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.3s">The website will feature a
                            section of informative warning signs in rugpull operations. Users will
                            be able to prepare themselves as best as they can to avoid investing their money into coins
                            that
                            plan to dump once the coin has increased in value.</p>
                    </div>
                </div>
            </div>
        </div>
        <span class="shape1 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/about-light-1.png" alt=""></span>
        <span class="shape2 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/about-light-2.png" alt=""></span>
        <span class="bubble1 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed1.png" alt=""></span>
        <span class="bubble2 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed2.png" alt=""></span>
        <span class="bubble3 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed3.png" alt=""></span>
        <div id="particles3-js" class="particles"></div>
    </section>


    <section id="about_cryptonic_06">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-5 col-lg-7 mobile-device responsive-padding">
                    <div class="about-img img-padding">
                        <div class="img-wrapper">
                            <img src="{{ asset('frontend_asset') }}/images/about-2.png" alt="" class="wow fadeInUp" data-animate="fadeInUp"
                                data-delay=".3s">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-7 col-lg-5 padding-none">
                    <div class="about_cryptonic-content">
                        <h2 class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.2s">Power to the NEWbs!</h2>
                        <p class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.3s">Polls will be administered in
                            the community chat to give members a voice in NEWb Token’s
                            decisions. Each poll will be introduced with an opening and closing date/time for voters to
                            participate. Members are always encouraged to share ideas for polls!</p>
                    </div>
                    <div class="about_cryptonic-content heading-padding">
                        <h2 class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.2s">Help is on the Way</h2>
                        <p class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.3s">The NEWb Community is one of
                            support and encouragement. Any and all in the crypto verse
                            are encouraged to participate with a helping hand in mind. Our community strives to provide
                            answers to questions and helpful, accurate and current crypto information to its peers. From
                            beginner to veteran, we constantly want our NEWbs to stay involved so we can help each
                            other!</p>
                    </div>
                    <div class="about_cryptonic-content heading-padding">
                        <h2 class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.2s">Transparency</h2>
                        <p class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.3s">In addition to giving members
                            a voice, our polls also keep members in the loop on NEWb
                            Token’s future decisions. To ascertain our transparency, our contract addresses are
                            available to
                            the public and can be tracked on BSC Scan. Our holder’s security is our top priority thus,
                            we
                            have submitted our contract for 2 audits to date!</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5 col-lg-7 web-device">
                    <div class="about-img img-padding">
                        <div class="img-wrapper">
                            <img src="{{ asset('frontend_asset') }}/images/about-2.png" alt="" class="wow fadeInUp" data-animate="fadeInUp"
                                data-delay=".3s">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span class="shape1 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/about-light-1.png" alt=""></span>
        <span class="shape2 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/about-light-2.png" alt=""></span>
        <span class="bubble1 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed1.png" alt=""></span>
        <span class="bubble2 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed2.png" alt=""></span>
        <span class="bubble3 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed3.png" alt=""></span>
        <div id="particles3-js" class="particles"></div>
    </section> --}}



<section id="tokenomics">
    <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="sub-title">
                        <h2 class=" wow fadeInUp" data-animate="fadeInUp" data-delay=".1s">TOKENOMICS</h2>
                    </div>
                </div>
                  <div class="col-6 col-md-6 col-12 col-sm-12 col-lg-6">
                    <h3 class="text-white" style="padding-top: 20px; text-align: left;">Total Supply: 10,000,000,000,000</h3>
                    <div class="chart">
                        
                      <canvas id="dashboard_chart_2"  style="margin-top:80px;"></canvas>
                    </div>
                  </div>
                <div class="col-6 col-md-6 col-12 col-sm-12 col-lg-6">
                    <div class="chart" style="padding-top:65px">
                        
                      <canvas id="dashboard_chart_1"></canvas>
                      <ul>
                          <li>1% will be allotted and redistributed proportionally among holders</li>
                          <li>1% is taken away from every transaction to burn</li>
                          <li>5% of each transaction is added to the liquidity pool</li>
                      </ul>
                    </div>
                  </div>
            </div>
    </div>
    
        <span class="shape1 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/wel-map.png" alt=""></span>
        <span class="bubble1 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed1.png" alt=""></span>
        <span class="bubble2 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed1.png" alt=""></span>
        <div id="particles2-js" class="particles"></div>
</section>




    @foreach ($methods as $method)
    
        @php
        $width_round = round($loop->index/2);
        $width_out_round = $loop->index/2;
        @endphp
        @if ($width_out_round == $width_round)
        <section id="about_cryptonic_06">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-5 col-lg-7 mobile-device">
                        <div class="about-img">
                            <div class="img-wrapper">
                                <img src="{{ asset('uploads/about/method') }}/{{ $method->photo }}" alt="" class="wow fadeInUp" data-animate="fadeInUp"
                                    data-delay=".3s">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7 col-lg-5 padding-none">
                        <div class="about_cryptonic-content">
                            <h2 class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.2s">{{ $method->heading }}</h2>
                            <p class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.3s">
                                {!! $method->description !!}
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-5 col-lg-7  web-device">
                        <div class="about-img">
                            <div class="img-wrapper">
                                <img src="{{ asset('uploads/about/method') }}/{{ $method->photo }}" alt="" class="wow fadeInUp" data-animate="fadeInUp"
                                    data-delay=".3s">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="shape1 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/about-light-1.png" alt=""></span>
            <span class="shape2 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/about-light-2.png" alt=""></span>
            <span class="bubble1 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed1.png" alt=""></span>
            <span class="bubble2 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed2.png" alt=""></span>
            <span class="bubble3 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed3.png" alt=""></span>
            <div id="particles3-js" class="particles"></div>
        </section>
            
        @else
            
    <section id="about_cryptonic_06">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-5 col-lg-7 responsive-padding">
                    <div class="about-img">
                        <div class="img-wrapper">
                            <img src="{{ asset('uploads/about/method') }}/{{ $method->photo }}" alt="" class="wow fadeInUp" data-animate="fadeInUp"
                                data-delay=".3s">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-7 col-lg-5 padding-none">
                    <div class="about_cryptonic-content">
                        <h2 class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.2s">{{ $method->heading }}</h2>
                        <p class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.3s">
                            {!! $method->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <span class="shape1 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/about-light-1.png" alt=""></span>
        <span class="shape2 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/about-light-2.png" alt=""></span>
        <span class="bubble1 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed1.png" alt=""></span>
        <span class="bubble2 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed2.png" alt=""></span>
        <span class="bubble3 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed3.png" alt=""></span>
        <div id="particles3-js" class="particles"></div>
    </section>
        @endif
    @endforeach

    {{-- <section id="about_cryptonic_06">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-5 col-lg-7 mobile-device responsive-padding">
                    <div class="about-img">
                        <div class="img-wrapper">
                            <img src="{{ asset('frontend_asset') }}/images/02.png" alt="" class="wow fadeInUp" data-animate="fadeInUp"
                                data-delay=".3s">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-7 col-lg-5 padding-none">
                    <div class="about_cryptonic-content">
                        <h2 class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.2s">Manual Burns</h2>
                        <p class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.3s">At the time of writing,
                            NEWbOfficial team has burned 30% of the current supply. It can be
                            tracked on BSC Scan through this address:
                        </p>

                        <p class=" wow fadeInUp left-padding" data-animate="fadeInUp" data-delay="0.4s">
                            ● 0x0000000000000000000000 <br>  00000000000000dead.
                        </p>
                        <p class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.4s">
                            This manual burn is executed by the NEWbOfficial team based on every milestone the
                            community has reached. This strategy mitigates the pressure from the community inevitably
                            done by panic sellers when the price collapses.
                            Since the launching of NEWb, we have allocated 10% for our airdrop campaign. This was done
                            to attract and reward the community for participating during the early release of NEWb. This
                            airdrop wallet can also be tracked through this contract address:
                        </p>
                        <p class=" wow fadeInUp left-padding" data-animate="fadeInUp" data-delay="0.4s">
                            ● 0x163212c9cb6b711176 <br>  8a97319172e62f0f2d50af.
                        </p>

                    </div>
                </div>
                <div class="col-sm-12 col-md-5 col-lg-7 web-device">
                    <div class="about-img">
                        <div class="img-wrapper">
                            <img src="{{ asset('frontend_asset') }}/images/02.png" alt="" class="wow fadeInUp" data-animate="fadeInUp"
                                data-delay=".3s">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span class="shape1 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/about-light-1.png" alt=""></span>
        <span class="shape2 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/about-light-2.png" alt=""></span>
        <span class="bubble1 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed1.png" alt=""></span>
        <span class="bubble2 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed2.png" alt=""></span>
        <span class="bubble3 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed3.png" alt=""></span>
        <div id="particles3-js" class="particles"></div>
    </section>

    <section id="about_cryptonic_06">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-5 col-lg-6 responsive-padding">
                    <div class="about-img">
                        <div class="img-wrapper">
                            <img src="{{ asset('frontend_asset') }}/images/about-img.svg" alt="" class="wow fadeInUp" data-animate="fadeInUp"
                                data-delay=".3s">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-7 col-lg-6 padding-none">
                    <div class="about_cryptonic-content">
                        <h2 class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.2s">Social Media Expansion &
                            Marketing</h2>
                        <p class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.3s">Our main purpose is to create
                            an exclusive platform/application that can help educate and support
                            investors from different walks of life to attain financial freedom.
                        </p>
                        <p class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.3s">NEWb is community driven. The
                            market allocation fund is 1.2% of the total supply which was
                            agreed upon and decided by the community through their votes. This can be found through:
                        </p>

                        <p class=" wow fadeInUp left-padding" data-animate="fadeInUp" data-delay="0.4s">
                            ● 0xA9e546B0d471c4281b2d  <br>  6A9821a1aD916C65a72D.
                        </p>
                        <p class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.4s">
                            With this, our objective to expand our network is possible through social media by
                            attracting new
                            investors and constantly updating our NEWbs of our progress.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <span class="shape1 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/about-light-1.png" alt=""></span>
        <span class="shape2 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/about-light-2.png" alt=""></span>
        <span class="bubble1 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed1.png" alt=""></span>
        <span class="bubble2 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed2.png" alt=""></span>
        <span class="bubble3 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed3.png" alt=""></span>
        <div id="particles3-js" class="particles"></div>
    </section>

    <section id="about_cryptonic_06">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-5 col-lg-6 mobile-device   responsive-padding">
                    <div class="about-img img-padding">
                        <div class="img-wrapper">
                            <img src="{{ asset('frontend_asset') }}/images/banner-img.svg" alt="" class="wow fadeInUp" data-animate="fadeInUp"
                                data-delay=".3s">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-7 col-lg-6 padding-none">
                    <div class="about_cryptonic-content">
                        <h2 class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.2s">Community Rewards</h2>
                        <p class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.3s">Founders are determined to
                            establish a website that will have multiple purposes and functionalities.
                            A fundamental use will be to train and prepare Newbs in their crypto journey while being
                            rewarded
                            via NEWbToken for taking the time to educate themselves. Crypto enthusiasts and content
                            creators
                            are also to be compensated for their time and effort.
                        </p>
                        <p class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.3s">A percentage of 1.5% of the
                            total supply will be used for learn and earn concepts. The contract
                            address for this reward wallet can be tracked here:
                        </p>
                        <p class=" wow fadeInUp left-padding" data-animate="fadeInUp" data-delay="0.4s">●
                            0x6ff24d88cc319a28fe <br>  a966af0f8257e73fdf1146
                        </p>
                        <p class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.4s">
                            A supply of 14% will go straight to the founders’ personal wallets. Founders’ wallet
                            addresses
                            are:
                        </p>
                        <p class=" wow fadeInUp left-padding" data-animate="fadeInUp" data-delay="0.4s">
                            ● 0x0827ea3299461c22d <br>  19c73727259ae8d16b698a1 <br>
                            ● 0x78c162ffffd5d39ca07da  <br>  8fffcaf4f43f137cc6e
                        </p>
                        <p class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.4s">
                            Due to our goal of having multiple functionalities for our website and mobile application,
                            an
                            allotment of 5.7% will be dedicated to the project’s Research and Development (R&D).
                            R&D fund address:
                        </p>
                        <p class=" wow fadeInUp left-padding" data-animate="fadeInUp" data-delay="0.4s">●
                            0xa9c3ca4aa78e76ece6b86  <br>  10c7674d1ff6e058f7d
                        </p>
                        <p class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.4s">
                            Moving forward, we will be focusing on the advancement of encryption and visualization
                            techniques to ensure our NEWb’s financial information is secured, making the community safe.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5 col-lg-6 web-device">
                    <div class="about-img img-padding">
                        <div class="img-wrapper">
                            <img src="{{ asset('frontend_asset') }}/images/banner-img.svg" alt="" class="wow fadeInUp" data-animate="fadeInUp"
                                data-delay=".3s">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span class="shape1 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/about-light-1.png" alt=""></span>
        <span class="shape2 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/about-light-2.png" alt=""></span>
        <span class="bubble1 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed1.png" alt=""></span>
        <span class="bubble2 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed2.png" alt=""></span>
        <span class="bubble3 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed3.png" alt=""></span>
        <div id="particles3-js" class="particles"></div>
    </section>


    <section id="about_cryptonic_06">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-5 col-lg-6 responsive-padding">
                    <div class="about-img">
                        <div class="img-wrapper">
                            <img src="{{ asset('frontend_asset') }}/images/about1.svg" alt="" class="wow fadeInUp" data-animate="fadeInUp"
                                data-delay=".3s">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-7 col-lg-6 padding-none">
                    <div class="about_cryptonic-content">
                        <h2 class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.2s">Exchange Listings</h2>
                        <p class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.3s">Currently, NEWb Token is
                            available on PancakeSwap and will be available on multiple
                            exchanges in the coming year. PancakeSwap is a decentralized exchange created on Binance
                            Smart Chain, it boasts fast transactions and reduced gas fees making it inexpensive and
                            easier
                            for our investors to acquire tokens.
                        </p>
                    </div>
                    <div class="about_cryptonic-content heading-padding">
                        <h2 class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.2s">Contract</h2>
                        <p class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.3s">The NEWbOfficial Team will be
                            updating the Smart contract NEWb is built on to add
                            functionalities to our platform and mobile application Q4 2021-Q1 2022.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <span class="shape1 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/about-light-1.png" alt=""></span>
        <span class="shape2 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/about-light-2.png" alt=""></span>
        <span class="bubble1 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed1.png" alt=""></span>
        <span class="bubble2 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed2.png" alt=""></span>
        <span class="bubble3 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed3.png" alt=""></span>
        <div id="particles3-js" class="particles"></div>
    </section>

    <section id="team_membar_06" class="team_membar_05">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="team_heading">
                        <h2 >{{ $team_heading->heading }}</h2>
                        <p class=" wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s">{{ $team_heading->description }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="team_01" class="owlCarousel">
                        @foreach ($teams as $team)
                        <div class="single-wrapper ">
                            <div class="team-single-item wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                <figure>
                                    <div class="member-img">
                                        <img src="{{ asset('uploads/team') }}/{{ $team->thumbnail }}" alt="member img" class="img-fluid">
                                    </div>
                                    <figcaption>
                                        <div class="member-name">
                                            <h4>{{ $team->name }} </h4>
                                            <span>{{ $team->designation }}</span>
                                        </div>
                                        <ul class="social-links list-unstyled">
                                            <li class="nav-item"><a href="{{ $team->fb_link }}"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="nav-item"><a href="{{ $team->twitter_link }}"><i class="fab fa-twitter"></i></a></li>
                                            <li class="nav-item"><a href="{{ $team->linkedin_link }}"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li class="nav-item"><a href="{{ $team->instagram_link }}"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        
    
        <span class="shape1 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/wel-map.png" alt=""></span>
        <span class="bubble1 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed1.png" alt=""></span>
        <span class="bubble2 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed1.png" alt=""></span>
        <div id="particles2-js" class="particles"></div>
    </section><!-- End team_membar --> --}}

    <style>
        #tokenomics{
            margin-bottom: 100px;
        }
    </style>
@endsection
@section('footer_scripts')
    <script type="text/javascript">
        var ctx = document.getElementById('dashboard_chart_1').getContext('2d');
        var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'doughnut',

        // The data for our dataset
        data: {
            labels: ['1% Redistribution', '5% Liquidity', '1% Burn'],
            datasets: [{
                label: 'Tokenomics',
                backgroundColor: [
                    'rgb(237 125 49)',
                    'rgb(68 114 196)',
                    'rgb(165 165 165)'
                ],
                borderColor:[
                    'rgb(237 125 49)',
                    'rgb(68 114 196)',
                    'rgb(165 165 165)'
                ],
                data: [14, 72, 14]
            }]
        },

        // Configuration options go here

        options: {
            responsive: true,
            plugins: {
            legend: {
                position: 'top',
            },
            }
        },


        });
            
                var ctx = document.getElementById('dashboard_chart_2').getContext('2d');
        var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'pie',

        // The data for our dataset
        data: {
            labels: ['Burn', 'Marketing',"Community rewards","Total locked","R&D wallet", "Julies wallet","Zanes","Airdrop"],
            datasets: [{
                label: 'Ironman',
                backgroundColor: [
                    'rgb(157 72 13)',
                    'rgb(68 114 196)',
                    'rgb(239 138 69)',
                    'rgb(166 166 166)',
                    'rgb(255 192 0)',
                    'rgb(91 155 213)',
                    'rgb(112 173 71)',
                    'rgb(38 68 121)',
                ],
                borderColor: '#fff',
                data: [30, 1.2, 1.5, 30, 5.7, 7, 6.5, 10]
            }]
            

        },

        // Configuration options go here
        options: {
            indexAxis: 'y',
            // Elements options apply to all of the options unless overridden in a dataset
            // In this case, we are setting the border of each horizontal bar to be 2px wide
            elements: {
            bar: {
                borderWidth: 2,
            }
            },
            responsive: true,
            plugins: {
            legend: {
                position: 'bottom',
            },
            }
        },
        });







    </script>
@endsection





@extends('layouts.frontend_app')
@section('title')
    NEWB TOKEN WHITEPAPER
@endsection
@section('home')
    active
@endsection
@section('frontend_content')
<section id="banner" style="background:url({{ asset('uploads/home_banner') }}/{{ $banner->photo }}); height: 656px; background-repeat: no-repeat; background-size: cover; background-position:top;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>{!! $banner->bnner_heading !!}</h1>
            </div>
        </div>
    </div>
</section>
    <section id="welcome_cryptonic_06">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <a href="{{ $btn1->btn_link }}" class="token">Beta V1</a>
                </div>
                <div class="col-sm-12 col-md-10 ml-auto">
                    <div class="top_links">
                        <a  class="link_btn" href="{{ route('about') }}">ABOUT</a>
                        <a  class="link_btn" href="{{ route('testimonial') }}">TESTIMONIAL</a>
                        <a  class="link_btn" href="{{ route('faq') }}">FAQ</a>
                        <a  class="link_btn" href="#contact_06">CONTACT US</a>
                        <a  class="link_btn" href="{{ $btn2->btn_link }}">CRYPTO LEARNING</a>
                        <a  class="link_btn" href="#contact_06">LIVE CHAT</a>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-sm-12 col-md-12 col-lg-12 mx-auto">
                    <div class="welcome_img">
                        <img src="{{ asset('uploads/home_about') }}/{{ $about->photo }}" alt="">
                        <p class=" wow fadeInUp" data-animate="fadeInUp" data-delay="0.3s">{{ $about->detials }}</p>
                    </div>
                    <div class="newb_links">
                    <a class="link_btn" target="_blank" href="{{ $btn3->btn_link }}">LITEPAPER</a>
                    <a class="link_btn" target="_blank" href="{{ $btn4->btn_link }}">CONTRACT</a>
                    <a class="link_btn" target="_blank" href="{{ $btn5->btn_link }}">AUDIT</a>
                    <a class="link_btn" href="#road_map">ROADMAP</a>
                    <a class="link_btn" href="#team_membar_06">MEET THE TEAM</a>
                    <a  class="link_btn" href="{{ $btn7->btn_link }}">GET NEWB</a>
                    </div>
                </div>
            </div>
        </div>
        <span class="shape1 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/wel-map.png" alt=""></span>
        <span class="bubble1 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed1.png" alt=""></span>
        <span class="bubble2 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed1.png" alt=""></span>
        <div id="particles2-js" class="particles"></div>
    </section> <!-- End welcome_cryptonic -->


<section id="why_newb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading">
                    <h1>WHY NEWb ?</h1>
                </div>
            </div>
            @foreach ($why_newb as $newb)
            <div class="col-lg-4">
                <div class="why_newb_row">
                <h4>{{ $newb->heading }}</h4>
                <p>{!! $newb->details !!}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
        <span class="shape1 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/wel-map.png" alt=""></span>
        <span class="bubble1 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed1.png" alt=""></span>
        <span class="bubble2 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed1.png" alt=""></span>
        <div id="particles2-js" class="particles"></div>
</section>
<section id="road_map">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading">
                    <h1>NEWb Roadmap</h1>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($road_map as $map)
            <div class="road_map_row">
                <h6>{{ $map->heading }}</h6>
                <ul>
                    <li>{!! $map->details !!}</li>
                </ul>
            </div>
            @endforeach
        </div>
    </div>
        <span class="shape1 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/wel-map.png" alt=""></span>
        <span class="bubble1 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed1.png" alt=""></span>
        <span class="bubble2 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed1.png" alt=""></span>
        <div id="particles2-js" class="particles"></div>
</section>
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
<section id="discussion">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading">
                    <h1>
                        JOIN THE DISCUSSION
                    </h1>
                </div>
            </div>
            @foreach ($socials as $social)
            <div class="col-lg-4 col-md-4">
                <div class="social_link">
                <img src="{{ asset('uploads/social') }}/{{ $social->photo }}" alt="">
                <br>
                <a target="_blank" href="{{ $social->link }}">{{ $social->link }}</a>
                <p>{{ $social->name }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
        <span class="shape1 header-shape"><img src="{{ asset('frontend_asset') }}/images/shape/home_6/wel-map.png" alt=""></span>
        <span class="bubble1 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed1.png" alt=""></span>
        <span class="bubble2 header-shape"><img src="{{ asset('frontend_asset') }}/images/particals_icon/fixed1.png" alt=""></span>
        <div id="particles2-js" class="particles"></div>
</section>
<section id="footer_text">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4>{{ $risk->heading }}</h4>
                <p>
                    {!! $risk->details !!}
                </p>
            </div>
        </div>
    </div>
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
    </section><!-- End team_membar -->
    
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


    <div id="subscribe_area_06" class="bottom-padding">
        <div class="container">
            <div class="row subscribe-wrapper">
                <div class="col-12 col-md-12 col-lg-10 mx-auto">
                    <div id="subscribe" class="subscribe">
                        <div class="subscribe-form">
                            <div class="sub-title">
                                <h2 class=" wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">Subscribe For Monthly Updates</h2>
                                {{-- <p class=" wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s">Artificial based on
                                    the neural network, the NRM assistant will instantly analyze user data use.</p> --}}
                            </div>
                        @if (session('subscriber'))
                            <div class="alert alert-success">{{ session('subscriber') }}</div>
                        @endif
                            <form action="{{ route('subscriberemail') }}" method="POST">
                                @csrf
                                <div class="form-group  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s">
                                    <input placeholder="Enter your Email Address" type="email" name="subscriber_email" required>
                                    <button type="submit" class="text-center">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="particles12-js" class="particles"></div>
    </div><!-- End subscribe_area -->

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
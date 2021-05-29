
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title', 'Ecommerce')</title>

    <!-- vendor css -->

    <link href="{{ asset('dashboard_asset') }}/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('dashboard_asset') }}/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="{{ asset('dashboard_asset') }}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="{{ asset('dashboard_asset') }}/lib/highlightjs/github.css" rel="stylesheet">
    <link href="{{ asset('dashboard_asset') }}/lib/datatables/jquery.dataTables.css" rel="stylesheet">
    <link href="{{ asset('dashboard_asset') }}/lib/select2/css/select2.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('dashboard_asset') }}/img/favicon.png" type="image/gif" sizes="16x16">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard_asset') }}/css/starlight.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href="{{ route('home') }}"><i class="icon ion-android-star-outline"></i>{{ env('APP_NAME') }}</a></div>
    <div class="sl-sideleft">

      <label class="sidebar-label">Navigation</label>
      <div class="sl-sideleft-menu">
        <a href="{{ route('home') }}" class="sl-menu-link @yield('home')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('logo') }}" class="sl-menu-link @yield('logo')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Logo</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('team.index') }}" class="sl-menu-link @yield('teams')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Team</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        
      <label class="sidebar-label">Home page</label>
        <a href="{{ route('home.bannner.index') }}" class="sl-menu-link @yield('banner')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Banner</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('home.about.index') }}" class="sl-menu-link @yield('homeabout')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">About</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('why.newb.index') }}" class="sl-menu-link @yield('newb')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Why NEWb ?</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('why.roadmap.index') }}" class="sl-menu-link @yield('roadmap')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Roadmap</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('home.social.index') }}" class="sl-menu-link @yield('social')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Join the discussion</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('why.risk.index') }}" class="sl-menu-link @yield('risk')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">RISK DISCLOSURE</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
      <label class="sidebar-label">About page</label>
        <a href="{{ route('homeaboutbanner') }}" class="sl-menu-link @yield('banner_detail')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Banner detail</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('aboutservice.index') }}" class="sl-menu-link @yield('service')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Service</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('aboutbtnlink') }}" class="sl-menu-link @yield('btn')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">About Btn Link</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('about.method.index') }}" class="sl-menu-link @yield('method')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Method</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
      <label class="sidebar-label">Testimonial page</label>

        <a href="{{ route('home.tesi.index') }}" class="sl-menu-link @yield('testimonial')">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
              <span class="menu-item-label">Testimonials</span>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->
      <label class="sidebar-label">FAQ page</label>

        <a href="{{ route('why.faq.header.index') }}" class="sl-menu-link @yield('header')">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
              <span class="menu-item-label">Header Content</span>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->

        <a href="{{ route('why.faq.list.index') }}" class="sl-menu-link @yield('list')">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
              <span class="menu-item-label">FAQ List</span>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->

        {{-- fAQ PART --}}
        {{-- <a href="" class="sl-menu-link @yield('faq')">
          <div class="sl-menu-item">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Faq</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('why.faq.header.index') }}" class="nav-link @yield('header')">Header Content</a></li>
          <li class="nav-item"><a href="{{ route('why.faq.list.index') }}" class="nav-link @yield('list')">FAQ List</a></li>
        </ul> --}}
        {{-- fAQ PART --}}
        {{-- <a href="" class="sl-menu-link @yield('team')">
          <div class="sl-menu-item">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Team</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('team.header.index') }}" class="nav-link @yield('header')">Team Header</a></li>
          <li class="nav-item"><a href="{{ route('why.faq.list.index') }}" class="nav-link @yield('list')">FAQ List</a></li>
        </ul> --}}
      </div><!-- sl-sideleft-menu -->
      <label class="sidebar-label">Visitor Area</label>

        <a href="{{ route('visitormessages') }}" class="sl-menu-link @yield('visitor_message')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Visitor Messages</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('subscribers') }}" class="sl-menu-link @yield('subscribers')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Subscribers</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name">{{ Auth::User()->name }}</span>
              <img src="{{ asset('uploads') }}/profile/{{ Auth::user()->profile_photo }}" class="wd-32 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href="{{ Route('profile.index') }}"><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                <li><a href="{{ route('register') }}"><i class="icon ion-ios-person-outline"></i>Register A person</a></li>
                <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  <i class="icon ion-power"></i> Sign Out</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->
    <!-- ########## END: RIGHT PANEL ########## --->
    @yield('dashboard_content')




<script src="{{ asset('dashboard_asset') }}/lib/jquery/jquery.js"></script>
<script src="{{ asset('dashboard_asset') }}/lib/popper.js/popper.js"></script>
<script src="{{ asset('dashboard_asset') }}/lib/bootstrap/bootstrap.js"></script>
<script src="{{ asset('dashboard_asset') }}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="{{ asset('dashboard_asset') }}/lib/datatables/jquery.dataTables.js"></script>
<script src="{{ asset('dashboard_asset') }}/lib/datatables-responsive/dataTables.responsive.js"></script>

<script src="{{ asset('dashboard_asset') }}/js/starlight.js"></script>
@yield('footer_scripts')
</body>
</html>

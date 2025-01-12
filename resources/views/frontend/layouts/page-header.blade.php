<header class="site-header site-header--menu-center zubuz-header-section dark-bg white-menu" id="sticky-menu">
    <div class="container">
      <nav class="navbar site-navbar">
        <!-- Brand Logo-->
        <div class="brand-logo">
          <a href="{{ route('home') }}">
            <img src="{{ asset('frontend/assets/images/logo/Kadava_logo.png') }}" alt="" class="light-version-logo">
          </a>
        </div>
        <div class="menu-block-wrapper">
          <div class="menu-overlay"></div>
          <nav class="menu-block" id="append-menu-header">
            <div class="mobile-menu-head">
              <div class="go-back">
                <i class="fa fa-angle-left"></i>
              </div>
              <div class="current-menu-title"></div>
              <div class="mobile-menu-close">&times;</div>
            </div>
            <ul class="site-menu-main">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link-item">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pricing') }}" class="nav-link-item">Pricing</a>
                </li>

                <li class="nav-item nav-item-has-children">
                    <a href="#" class="nav-link-item drop-trigger">Product Search <i class="fas fa-angle-down"></i></a>
                    <ul class="sub-menu" id="submenu-1">
                    <li class="sub-menu--item">
                        <a href="{{ route('user.facebook') }}">
                        <span class="menu-item-text">Facebook Ads</span>
                        </a>
                    </li>
                    <li class="sub-menu--item">
                        <a href="{{ route('user.tiktok') }}">
                        <span class="menu-item-text">Tiktok Ads</span>
                        </a>
                    </li>
                    <li class="sub-menu--item">
                        <a href="{{ route('user.pinterest') }}">
                        <span class="menu-item-text">Pinterest Ads</span>
                        </a>
                    </li>
                    </ul>
                </li>
                @guest
                <li class="nav-item d-lg-none">
                    <a class="nav-link-item" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item d-lg-none">
                    <a class="nav-link-item" href="{{ route('register') }}">Get Started</a>
                </li>
                @endguest
                @auth
                <li class="nav-item nav-item-has-children d-lg-none">
                    <a href="#" class="nav-link-item drop-trigger"> {{ Auth::user()->name }}  <i class="fas fa-angle-down"></i></a>
                    <ul class="sub-menu" id="submenu-2">
                      @if (Auth::user()->isAdmin())
                    <li class="sub-menu--item"><a href="{{ route('admin.dashboard') }}"><i class="icon_cog"></i> Dashboard</a></li>
                    @else
                    <li class="sub-menu--item"><a href="{{ route('user.dashboard') }}"><i class="icon_cog"></i> Dashboard</a></li>
                    @endif
                    <li class="sub-menu--item">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="icon_key"></i> Log out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                    </li>
                    </ul>
                </li>
                @endauth
            </ul>
          </nav>
        </div>

        @guest
        <div class="header-btn header-btn-l1 ms-auto d-none d-xs-inline-flex">
          <div class="zubuz-header-btn-wrap">
            <a class="zubuz-login-btn" href="{{ route('login') }}">Login</a>
          </div>
          <a class="zubuz-default-btn zubuz-header-btn pill" href="{{ route('register') }}">
            <span>Get Started</span>
          </a>
        </div>
        @else
        <ul class="site-menu-main d-none d-lg-block">
            <li class="nav-item nav-item-has-children user">
                <a href="#" class="nav-link-item drop-trigger">
                    <figure><img src="@if (Auth::user()->avatar != ''){{ URL::asset(Auth::user()->avatar) }}@else{{ URL::asset('assets/images/users/avatar-1.png') }}@endif" alt=""></figure>{{ Auth::user()->name }}<i class="fas fa-angle-down"></i>
                </a>
                <ul class="sub-menu" id="submenu-3">
                    @if (Auth::user()->isAdmin())
                    <li class="sub-menu--item"><a href="{{ route('admin.dashboard') }}"><i class="icon_cog"></i><span class="menu-item-text">Dashboard</span></a></li>
                    @else
                    <li class="sub-menu--item"><a href="{{ route('user.dashboard') }}"><i class="icon_cog"></i><span class="menu-item-text">Dashboard</span></a></li>
                    @endif

                  <li class="sub-menu--item">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="icon_key"></i><span class="menu-item-text">Log out</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  </li>

                </ul>
            </li>
        </ul>

        @endguest


        <!-- mobile menu trigger -->
        <div class="mobile-menu-trigger light">
          <span></span>
        </div>
        <!--/.Mobile Menu Hamburger Ends-->
      </nav>
    </div>
  </header>

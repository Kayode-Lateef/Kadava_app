<header class="site-header zubuz-header-section" id="sticky-menu">
    <div class="container">
      <nav class="navbar site-navbar">
        <!-- Brand Logo-->
        <div class="brand-logo">
          <a href="<?php echo e(route('home')); ?>">
            <img src="<?php echo e(asset('frontend/assets/images/logo/Kadava_logo.png')); ?>" alt="" class="light-version-logo">
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
                <a href="<?php echo e(route('home')); ?>" class="nav-link-item">Home</a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(route('pricing')); ?>" class="nav-link-item">Pricing</a>
              </li>

              <li class="nav-item nav-item-has-children">
                <a href="#" class="nav-link-item drop-trigger">Product Search <i class="fas fa-angle-down"></i></a>
                <ul class="sub-menu" id="submenu-1">
                  <li class="sub-menu--item">
                    <a href="<?php echo e(route('user.facebook')); ?>">
                      <span class="menu-item-text">Facebook Ads</span>
                    </a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="<?php echo e(route('user.tiktok')); ?>">
                      <span class="menu-item-text">Tiktok Ads</span>
                    </a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="<?php echo e(route('user.pinterest')); ?>">
                      <span class="menu-item-text">Pinterest Ads</span>
                    </a>
                  </li>
                </ul>
              </li>
              <?php if(auth()->guard()->guest()): ?>
                <li class="nav-item d-lg-none">
                    <a class="nav-link-item" href="<?php echo e(route('login')); ?>">Login</a>
                </li>
                <li class="nav-item d-lg-none">
                    <a class="nav-link-item" href="<?php echo e(route('register')); ?>">Get Started</a>
                </li>
                <?php endif; ?>
                <?php if(auth()->guard()->check()): ?>
                <li class="nav-item nav-item-has-children d-lg-none">
                    <a href="#" class="nav-link-item drop-trigger"> <?php echo e(Auth::user()->name); ?>  <i class="fas fa-angle-down"></i></a>
                    <ul class="sub-menu" id="submenu-2">
                      <?php if(Auth::user()->isAdmin()): ?>
                    <li class="sub-menu--item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="icon_cog"></i> Dashboard</a></li>
                    <?php else: ?>
                    <li class="sub-menu--item"><a href="<?php echo e(route('user.dashboard')); ?>"><i class="icon_cog"></i> Dashboard</a></li>
                    <?php endif; ?>
                    <li class="sub-menu--item">
                        <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="icon_key"></i> Log out
                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                        </form>
                    </li>
                    </ul>
                </li>
                <?php endif; ?>
            </ul>
          </nav>
        </div>

    <?php if(auth()->guard()->guest()): ?>
        <div class="header-btn header-btn-l1 ms-auto d-none d-xs-inline-flex">
          <div class="zubuz-header-btn-wrap">
            <a class="zubuz-login-btn" href="<?php echo e(route('login')); ?>">Login</a>
          </div>
          <a class="zubuz-default-btn zubuz-header-btn pill" href="<?php echo e(route('register')); ?>">
            <span>Get Started</span>
          </a>
        </div>
        <?php else: ?>
        <ul class="site-menu-main d-none d-lg-block">
            <li class="nav-item nav-item-has-children user">
                <a href="#" class="nav-link-item drop-trigger">
                    <figure><img src="<?php if(Auth::user()->avatar != ''): ?><?php echo e(URL::asset(Auth::user()->avatar)); ?><?php else: ?><?php echo e(URL::asset('assets/images/users/avatar-1.png')); ?><?php endif; ?>" alt=""></figure><?php echo e(Auth::user()->name); ?><i class="fas fa-angle-down"></i>
                </a>
                <ul class="sub-menu" id="submenu-3">
                    <?php if(Auth::user()->isAdmin()): ?>
                    <li class="sub-menu--item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="icon_cog"></i><span class="menu-item-text">Dashboard</span></a></li>
                    <?php else: ?>
                    <li class="sub-menu--item"><a href="<?php echo e(route('user.dashboard')); ?>"><i class="icon_cog"></i><span class="menu-item-text">Dashboard</span></a></li>
                    <?php endif; ?>

                  <li class="sub-menu--item">
                    <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="icon_key"></i><span class="menu-item-text">Log out</span>
                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                  </li>

                </ul>
            </li>
        </ul>

        <?php endif; ?>

        <!-- mobile menu trigger -->
        <div class="mobile-menu-trigger light">
          <span></span>
        </div>
        <!--/.Mobile Menu Hamburger Ends-->
      </nav>
    </div>
  </header>
<?php /**PATH C:\laragon\www\Kadava app\resources\views/frontend/layouts/home-header.blade.php ENDPATH**/ ?>
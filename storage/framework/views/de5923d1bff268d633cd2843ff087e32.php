<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu"><?php echo app('translator')->get('translation.Menu'); ?></li>

                <li>
                    <a href="<?php echo e(route('user.dashboard')); ?>">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard"><?php echo app('translator')->get('translation.Dashboards'); ?></span>
                    </a>
                </li>



                <li class="menu-title mt-2" data-key="t-components">Network</li>

                <li>
                    <a href="<?php echo e(route('user.facebook')); ?>">
                        <i data-feather="facebook"></i>
                        <span data-key="t-facebook">Facebook</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(route('user.tiktok')); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/></svg>
                        <span data-key="t-tiktok">Tiktok</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(route('user.pinterest')); ?>">
                        <i class="fab fa-pinterest"></i>
                        <span data-key="t-pinterest">Pinterest</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(route('user.facebook')); ?>">
                        <i data-feather="instagram"></i>
                        <span data-key="t-instagram">Instagram</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(route('user.facebook')); ?>">
                        <i data-feather="youtube"></i>
                        <span data-key="t-youtube">Youtube</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(route('user.facebook')); ?>">
                        <i class=" fab fa-google"></i>
                        <span data-key="t-facebook">Google</span>
                    </a>
                </li>



                <li class="menu-title" data-key="t-account"><?php echo app('translator')->get('translation.Account'); ?></li>
                <li>
                    <a href="<?php echo e(route('user.profile')); ?>">
                        <i data-feather="user"></i>
                        <span data-key="t-profile">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('user.payment')); ?>">
                        <i data-feather="credit-card"></i>
                        <span data-key="t-payments">Payments and Invoices</span>
                    </a>
                </li>
<!--
                <li>
                    <a href="apps-chat">
                        <i class="fab fa-instagram"></i>
                        <span data-key="t-instagram">Instagram</span>
                    </a>
                </li> -->

                <!-- <li>
                    <a href="apps-chat">
                        <i class="fab fa-twitter"></i>
                        <span data-key="t-twitter">Twitter</span>
                    </a>
                </li> -->



                <!-- <li>
                    <a href="apps-chat">
                        <i class="fab fa-reddit"></i>
                        <span data-key="t-chat">Reddit</span>
                    </a>
                </li> -->


                <!-- <li class="menu-title" data-key="t-pages"><?php echo app('translator')->get('translation.Pages'); ?></li> -->
<!--
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="file-text"></i>
                        <span data-key="t-pages"><?php echo app('translator')->get('translation.Pages'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter" key="t-starter-page"><?php echo app('translator')->get('translation.Starter_Page'); ?></a></li>
                        <li><a href="pages-maintenance" key="t-maintenance"><?php echo app('translator')->get('translation.Maintenance'); ?></a></li>
                        <li><a href="pages-comingsoon" key="t-coming-soon"><?php echo app('translator')->get('translation.Coming_Soon'); ?></a></li>
                        <li><a href="pages-timeline" key="t-timeline"><?php echo app('translator')->get('translation.Timeline'); ?></a></li>
                        <li><a href="pages-faqs" key="t-faqs"><?php echo app('translator')->get('translation.FAQs'); ?></a></li>
                        <li><a href="pages-pricing" key="t-pricing"><?php echo app('translator')->get('translation.Pricing'); ?></a></li>
                        <li><a href="pages-404" key="t-error-404"><?php echo app('translator')->get('translation.Error_404'); ?></a></li>
                        <li><a href="pages-500" key="t-error-500"><?php echo app('translator')->get('translation.Error_500'); ?></a></li>
                    </ul>
                </li> -->


            </ul>

            <div class="card sidebar-alert shadow-none text-center mx-4 mb-0 mt-5">
                <div class="card-body">
                    <img src="assets/images/giftbox.png" alt="">
                    <div class="mt-4">
                        <h5 class="alertcard-title font-size-16">Unlimited Access</h5>
                        <p class="font-size-13 text-dark">Upgrade your plan from a Free trial, to select 'Starter Plan'.</p>
                        <a style="color: white !important;" href="<?php echo e(route('user.pricing')); ?>" class="btn btn-primary mt-2">Upgrade Now</a>
                    </div>
                </div>
            </div>


        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<?php /**PATH C:\laragon\www\Kadava_app\resources\views/user/layouts/sidebar.blade.php ENDPATH**/ ?>
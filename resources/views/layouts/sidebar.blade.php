<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">@lang('translation.Menu')</li>

                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">@lang('translation.Dashboards')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.userList') }}">
                        <i data-feather="users"></i>
                        <span data-key="t-user">@lang('translation.User_List')</span>
                    </a>
                </li>


                <li class="menu-title mt-2" data-key="t-components">@lang('translation.Network')</li>

                <li>
                    <a href="{{ route('facebook') }}">
                        <i class="fab fa-facebook"></i>
                        <span data-key="t-facebook">Facebook</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('tiktok') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/></svg>
                        <span data-key="t-tiktok">Tiktok</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('pinterest') }}">
                        <i class="fab fa-pinterest"></i>
                        <span data-key="t-pinterest">Pinterest</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('facebook') }}">
                        <i data-feather="instagram"></i>
                        <span data-key="t-instagram">Instagram</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('facebook') }}">
                        <i data-feather="youtube"></i>
                        <span data-key="t-youtube">Youtube</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('facebook') }}">
                        <i class=" fab fa-google"></i>
                        <span data-key="t-facebook">Google</span>
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

                <li class="menu-title" data-key="t-account">@lang('translation.Account')</li>
                <li>
                    <a href="{{ route('admin.profile') }}">
                        <i data-feather="user"></i>
                        <span data-key="t-profile">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i data-feather="credit-card"></i>
                        <span data-key="t-payments">Subscription List</span>
                    </a>
                </li>


                <!-- <li class="menu-title" data-key="t-pages">@lang('translation.Pages')</li> -->
<!--
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="file-text"></i>
                        <span data-key="t-pages">@lang('translation.Pages')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter" key="t-starter-page">@lang('translation.Starter_Page')</a></li>
                        <li><a href="pages-maintenance" key="t-maintenance">@lang('translation.Maintenance')</a></li>
                        <li><a href="pages-comingsoon" key="t-coming-soon">@lang('translation.Coming_Soon')</a></li>
                        <li><a href="pages-timeline" key="t-timeline">@lang('translation.Timeline')</a></li>
                        <li><a href="pages-faqs" key="t-faqs">@lang('translation.FAQs')</a></li>
                        <li><a href="pages-pricing" key="t-pricing">@lang('translation.Pricing')</a></li>
                        <li><a href="pages-404" key="t-error-404">@lang('translation.Error_404')</a></li>
                        <li><a href="pages-500" key="t-error-500">@lang('translation.Error_500')</a></li>
                    </ul>
                </li> -->


            </ul>


        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->

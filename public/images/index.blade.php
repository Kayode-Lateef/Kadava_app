<!DOCTYPE html>
<html lang="en">

<head>
       <!-- <base href="/public"> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Kadava">
    <title>Kadava - Home </title>

    @include('frontend.layouts.style')

    <!-- SPECIFIC CSS -->
    <link href="{{ asset('frontend/css/home.css') }}" rel="stylesheet">

</head>

<body>

@include('frontend.layouts.header')

<!-- /header -->


    <main>

    @include('frontend.layouts.hero-single')
    <!-- /hero_single -->

    @include('frontend.layouts.explore')
        <!-- Explore -->
        <!-- /bg_gray -->


        @include('frontend.layouts.feautures')
        <!--Features  -->
        <!-- /bg_gray -->

        @include('frontend.layouts.call-section')
        <!--/call_section-->

    </main>
    <!-- /main -->

    @include('frontend.layouts.footer')
    <!--/footer-->

    <div id="toTop"></div><!-- Back to top button -->

    <div class="layer"></div><!-- Opacity Mask Menu Mobile -->

    <!-- COMMON SCRIPTS -->
    @include('frontend.layouts.scripts')

    <!-- SPECIFIC SCRIPTS -->
    <script src="frontend/js/jquery.cookiebar.js"></script>
    <script>
        $(document).ready(function() {
            'use strict';
            $.cookieBar({
                fixed: true
            });
        });
    </script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kadava || The best adspy for product search tool</title>

  <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.ico') }}" type="image/x-icon">
  <link rel="icon" href="{{ asset('frontend/assets/images/favicon.ico') }}" type="image/x-icon">
  <!--- End favicon-->

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Raleway:wght@600;700&display=swap" rel="stylesheet">
  <!-- End google font  -->

  <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome.css') }}">


  <!-- Code Editor  -->

  <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/app.min.css') }}">
</head>

<body class="light">

@include('frontend.layouts.preloader')



  @include('frontend.layouts.page-header')

  <!--End landex-header-section -->

  @include('frontend.layouts.privacy-contents')





  @include('frontend.layouts.page-footer')





  <!-- scripts -->
  @include('frontend.layouts.scripts')

</body>
</html>

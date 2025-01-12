<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kadava || The best adspy for product search tool</title>

  <link rel="shortcut icon" href="<?php echo e(asset('frontend/assets/images/favicon.ico')); ?>" type="image/x-icon">
  <link rel="icon" href="<?php echo e(asset('frontend/assets/images/favicon.ico')); ?>" type="image/x-icon">
  <!--- End favicon-->

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Raleway:wght@600;700&display=swap" rel="stylesheet">
  <!-- End google font  -->

  <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/bootstrap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/magnific-popup.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/slick.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/animate.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/fontawesome.css')); ?>">


  <!-- Code Editor  -->

  <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/main.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/app.min.css')); ?>">
</head>

<body class="light">

<?php echo $__env->make('frontend.layouts.preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




  <?php echo $__env->make('frontend.layouts.home-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!--End landex-header-section -->

  <?php echo $__env->make('frontend.layouts.home-contents', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



  <?php echo $__env->make('frontend.layouts.home-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>





  <!-- scripts -->
  <?php echo $__env->make('frontend.layouts.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>
</html>
<?php /**PATH C:\laragon\www\Kadava app\resources\views/frontend/index.blade.php ENDPATH**/ ?>
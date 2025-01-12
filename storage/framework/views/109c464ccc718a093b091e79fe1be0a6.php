<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.Error_404'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>

<body>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-5 pt-5">
                        <h1 class="error-title mt-5"><span>404!</span></h1>
                        <h4 class="text-uppercase mt-5">Oops! Page Not Found.</h4>
                        <p class="font-size-15 mx-auto text-muted w-50 mt-4">We've searched high and low but can’t find the page you’re looking for. It might have been removed, renamed, or did it ever exist?</p>
                        <div class="mt-5 text-center">
                            <a class="btn btn-primary waves-effect waves-light" href="<?php echo e(route('home')); ?>">Back to Homepage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </div>
    <!-- end content -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Kadava_app\resources\views/errors/404.blade.php ENDPATH**/ ?>
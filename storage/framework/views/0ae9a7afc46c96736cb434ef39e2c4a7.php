<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Pricing'); ?>  <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('user.components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Pages <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Confirmation <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<div class="row">
    <div class="col-lg-12">

        <div class="container">
            <div class="alert alert-success" role="alert">
                <?php echo e(session('success')); ?>

            </div>
            <h1>Thank you for subscribing!</h1>
            <!-- Additional content about the subscription can go here -->
        </div>


    </div>
    <!-- end col -->
</div>
<!-- end row -->


<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Kadava app\resources\views/user/confirmation.blade.php ENDPATH**/ ?>
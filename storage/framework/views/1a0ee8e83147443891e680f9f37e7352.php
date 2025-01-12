<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Forms_Advanced_Plugins'); ?>  <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('assets/libs/choices.js/choices.js.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('assets/libs/@simonwep/@simonwep.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('assets/libs/flatpickr/flatpickr.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Forms <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Form Advanced Plugins <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>



<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Datepicker</h4>
                <p class="card-title-desc">flatpickr is a lightweight and powerful datetime picker.</p>
            </div>
            <div class="card-body">

                <form action="#">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Basic</label>
                                <input type="text" class="form-control" id="datepicker-basic">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">DateTime</label>
                                <input type="text" class="form-control" id="datepicker-datetime">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Human-friendly Dates</label>
                                <input type="text" class="form-control flatpickr-input" id="datepicker-humanfd">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">MinDate and MaxDate</label>
                                <input type="text" class="form-control" id="datepicker-minmax">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Disabling dates</label>
                                <input type="text" class="form-control" id="datepicker-disable">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Selecting multiple dates</label>
                                <input type="text" class="form-control" id="datepicker-multiple">
                            </div>

                            <div>
                                <label class="form-label">Range</label>
                                <input type="text" class="form-control" id="datepicker-range">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mt-3 mt-lg-0">
                                <div class="mb-3">
                                    <label class="form-label">Timepicker</label>
                                    <input type="text" class="form-control" id="datepicker-timepicker">
                                </div>

                                <div>
                                    <label class="form-label">Inline Date Picker Demo</label>
                                    <input type="text" class="form-control" id="datepicker-inline">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>

<!-- end row -->


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Colorpicker</h4>
                <p class="card-title-desc">Flat, Simple, Hackable Color-Picker.</p>
            </div>
            <div class="card-body">

                <div class="text-center">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mt-4">
                                <h5 class="font-size-14">Classic Demo</h5>
                                <div class="classic-colorpicker"></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mt-4">
                                <h5 class="font-size-14">Monolith Demo</h5>
                                <div class="monolith-colorpicker"></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mt-4">
                                <h5 class="font-size-14">Nano Demo</h5>
                                <div class="nano-colorpicker"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('assets/libs/choices.js/choices.js.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/@simonwep/@simonwep.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/flatpickr/flatpickr.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/pages/form-advanced.init.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Kadava app\resources\views/form-advanced.blade.php ENDPATH**/ ?>
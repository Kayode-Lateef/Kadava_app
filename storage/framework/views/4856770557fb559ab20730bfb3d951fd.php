<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Dashboards'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<link href="<?php echo e(URL::asset('/assets/libs/admin-resources/admin-resources.min.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('user.components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Dashboard <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Welcome ! <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Facebook Ads</span>
                        <h4 class="mb-3">
                            <span class="counter-value" data-target="3545">0</span>
                        </h4>
                        <div class="text-nowrap">
                            <span class="badge bg-success-subtle text-success">+$20.9k</span>
                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                        </div>
                    </div>

                    <div class="flex-shrink-0 text-end dash-widget">
                        <div id="mini-chart1" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts"></div>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Tiktok Ads</span>
                        <h4 class="mb-3">
                            <span class="counter-value" data-target="1256">0</span>
                        </h4>
                        <div class="text-nowrap">
                            <span class="badge bg-danger-subtle text-danger">-29 Trades</span>
                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                        </div>
                    </div>
                    <div class="flex-shrink-0 text-end dash-widget">
                        <div id="mini-chart2" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts"></div>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col-->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Pinterest Ads</span>
                        <h4 class="mb-3">
                            <span class="counter-value" data-target="1000">0</span>
                        </h4>
                        <div class="text-nowrap">
                            <span class="badge bg-success-subtle text-success">+ $2.8k</span>
                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                        </div>
                    </div>
                    <div class="flex-shrink-0 text-end dash-widget">
                        <div id="mini-chart3" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts"></div>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Instagram Ads</span>
                        <h4 class="mb-3">
                            <span class="counter-value" data-target="1856">0</span>
                        </h4>
                        <div class="text-nowrap">
                            <span class="badge bg-success-subtle text-success">+5.32%</span>
                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                        </div>
                    </div>
                    <div class="flex-shrink-0 text-end dash-widget">
                        <div id="mini-chart4" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts"></div>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row-->

<div class="row">
    <div class="col-xl-8">
        <!-- card -->
        <div class="card">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center mb-4">
                    <h5 class="card-title me-2">Ads Overview</h5>
                    <div class="ms-auto">
                        <div>
                            <button type="button" class="btn btn-soft-primary btn-sm">
                                ALL
                            </button>
                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                1M
                            </button>
                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                6M
                            </button>
                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                1Y
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-xl-8">
                        <div>
                            <div id="market-overview" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts"></div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="p-4">
                            <div class="mt-0">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm m-auto">
                                        <span class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                            1
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <span class="font-size-14">Facebook</span>
                                    </div>

                                    <div class="flex-shrink-0">
                                        <span class="badge rounded-pill bg-success-subtle text-success font-size-12 fw-medium">+5.4%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm m-auto">
                                        <span class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                            2
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <span class="font-size-14">Pinterest</span>
                                    </div>

                                    <div class="flex-shrink-0">
                                        <span class="badge rounded-pill bg-success-subtle text-success font-size-12 fw-medium">+6.8%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm m-auto">
                                        <span class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                            3
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <span class="font-size-14">Tiktoks</span>
                                    </div>

                                    <div class="flex-shrink-0">
                                        <span class="badge rounded-pill bg-danger-subtle text-danger font-size-12 fw-medium">-4.9%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm m-auto">
                                        <span class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                            4
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <span class="font-size-14">Instagram</span>
                                    </div>

                                    <div class="flex-shrink-0">
                                        <span class="badge rounded-pill bg-success-subtle text-success font-size-12 fw-medium">+3.5%</span>
                                    </div>
                                </div>
                            </div>


                            <div class="mt-4 pt-2">
                                <a href="" class="btn btn-primary w-100">See All Ads <i
                                        class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row-->

    <div class="col-xl-4">
        <!-- card -->
        <div class="card">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center mb-4">
                    <h5 class="card-title me-2">Ads by Locations</h5>
                    <div class="ms-auto">
                        <div class="dropdown">
                            <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted font-size-12">Sort By:</span> <span class="fw-medium">World<i class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                <a class="dropdown-item" href="#">USA</a>
                                <a class="dropdown-item" href="#">Russia</a>
                                <a class="dropdown-item" href="#">Australia</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="sales-by-locations" data-colors='["--bs-success"]' style="height: 253px"></div>

                <div class="px-2 py-2">
                    <p class="mb-1">USA <span class="float-end">75%</span></p>
                    <div class="progress mt-2" style="height: 6px;">
                        <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                            style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
                        </div>
                    </div>

                    <p class="mt-3 mb-1">Russia <span class="float-end">55%</span></p>
                    <div class="progress mt-2" style="height: 6px;">
                        <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                            style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="55">
                        </div>
                    </div>

                    <p class="mt-3 mb-1">Australia <span class="float-end">85%</span></p>
                    <div class="progress mt-2" style="height: 6px;">
                        <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                            style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="85">
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
<!-- end row-->


<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- apexcharts -->
<script src="<?php echo e(URL::asset('/assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/pages/allchart.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/admin-resources/admin-resources.min.js')); ?>"></script>

<!-- dashboard init -->
<script src="<?php echo e(URL::asset('/assets/js/pages/dashboard.init.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Kadava app\resources\views/user/index.blade.php ENDPATH**/ ?>
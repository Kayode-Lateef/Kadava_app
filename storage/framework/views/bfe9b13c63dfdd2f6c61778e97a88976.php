<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Pricing'); ?>  <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('user.components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Pages <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Pricing <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<div class="row">
    <div class="col-lg-12">

        <div class="text-center mb-4">
            <ul class="nav nav-pills card justify-content-center d-inline-block shadow py-1 px-2" id="pills-tab" role="tablist">
                <li class="nav-item d-inline-block">
                    <a class="nav-link px-3 rounded active monthly" id="Monthly" data-bs-toggle="pill" href="#month" role="tab" aria-controls="Month" aria-selected="true">Monthly</a>
                </li>
                <li class="nav-item d-inline-block">
                    <a class="nav-link px-3 rounded yearly" id="Yearly" data-bs-toggle="pill" href="#year" role="tab" aria-controls="Year" aria-selected="false">Yearly <span
                                class="badge bg-success rounded text-white">20% Off </span></a>
                </li>
            </ul>
        </div>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade active show" id="month" role="tabpanel" aria-labelledby="monthly">
                <div class="row">
                    <div class="col-xl-4 col-sm-6">
                        <div class="card mb-xl-0">
                            <div class="card-body">
                                <div class="p-2">
                                    <h5 class="font-size-16">Starter</h5>
                                    <h1 class="mt-3">₦3200 <span class="text-muted font-size-16 fw-medium">/ Monthly</span></h1>
                                    <!-- <p class="text-muted mt-3 font-size-15">For small teams trying out Kadava for an unlimited period of time</p> -->
                                    <div class="mt-4 pt-2 text-muted">
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Facebook & Instagram & Pinterest & YouTube & TikTok & Google</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Queries: 50 Daily</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Max 200 Ads per query</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Video Ads Download: Up to 100</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Basic Filters</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Advanced Filter</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>24/7 Email Support</p>
                                    </div>

                                    <div class="mt-4 pt-2">
                                        <form action="<?php echo e(route('pay')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="email" value="<?php echo e(auth()->user()->email); ?>">
                                            <input type="hidden" name="plan" value="starter-monthly">
                                            <button type="submit" class="btn btn-outline-primary w-100">Choose Plan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->



                    <div class="col-xl-4 col-sm-6">
                        <div class="card bg-primary mb-xl-0">
                            <div class="card-body">
                                <div class="p-2">
                                    <div class="pricing-badge">
                                        <span class="badge">Featured</span>
                                    </div>
                                    <h5 class="font-size-16 text-white">Pro</h5>
                                    <h1 class="mt-3 text-white">₦6400 <span class="text-white font-size-16 fw-medium">/ Month</span></h1>
                                    <!-- <p class="text-white-50 mt-3 font-size-15">For extra large businesses or those in regulated industries</p> -->
                                    <div class="mt-4 pt-2 text-white">
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-white font-size-18 me-2"></i>Facebook & Instagram & Pinterest & YouTube & TikTok & Google</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-white font-size-18 me-2"></i>Queries: Unlimited</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-white font-size-18 me-2"></i>Max 1000 Ads per query</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-white font-size-18 me-2"></i>Download Ads: Unlimited</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-white font-size-18 me-2"></i> Basic Filters</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-white font-size-18 me-2"></i>Advanced Filter</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-white font-size-18 me-2"></i>24/7 Email Support</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-white font-size-18 me-2"></i>Advertiser & Shop Insights</p>
                                    </div>

                                    <div class="mt-4 pt-2">
                                        <form action="<?php echo e(route('pay')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="email" value="<?php echo e(auth()->user()->email); ?>">
                                            <input type="hidden" name="plan" value="pro-monthly">
                                            <button type="submit" class="btn btn-light w-100">Choose Plan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-4 col-sm-6">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="p-2">
                                    <h5 class="font-size-16">VIP</h5>
                                    <h1 class="mt-3">₦19200 <span class="text-muted font-size-16 fw-medium">/ Month</span></h1>
                                    <!-- <p class="text-muted mt-3 font-size-15">For small teams trying out Kadava for an unlimited
                                        period of time</p> -->
                                    <div class="mt-4 pt-2 text-muted">
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>All Pro Feautures</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>TOP 10 Daily Winners</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Chrome Extension : coming soon</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Details of ads and placements</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Personalized Bookmark</p>
                                    </div>

                                    <div class="mt-4 pt-2">
                                        <form action="<?php echo e(route('pay')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="email" value="<?php echo e(auth()->user()->email); ?>">
                                            <input type="hidden" name="plan" value="vip-monthly">
                                            <button type="submit" class="btn btn-outline-primary w-100">Choose Plan</button>
                                        </form>
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
            </div>
            <!-- end tab pane -->
            <div class="tab-pane fade" id="year" role="tabpanel" aria-labelledby="yearly">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="p-2">
                                    <h5 class="font-size-16">Starter</h5>
                                    <h1 class="mt-3">₦32000 <span class="text-muted font-size-16 fw-medium">/ Yearly</span></h1>
                                    <!-- <p class="text-muted mt-3 font-size-15">For small teams trying out Kadava for an unlimited period of time</p> -->
                                    <div class="mt-4 pt-2 text-muted">
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Facebook & Instagram & Pinterest & YouTube & TikTok & Google</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Queries: 50 Daily</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Max 200 Ads per query</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Video Ads Download: Up to 100</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Basic Filters</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Advanced Filter</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>24/7 Email Support</p>
                                    </div>

                                    <div class="mt-4 pt-2">
                                        <form action="<?php echo e(route('pay')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="email" value="<?php echo e(auth()->user()->email); ?>">
                                            <input type="hidden" name="plan" value="starter-yearly">
                                            <button type="submit" class="btn btn-outline-primary w-100">Choose Plan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->



                    <div class="col-lg-4">
                        <div class="card bg-primary mb-0">
                            <div class="card-body">
                                <div class="p-2">
                                    <div class="pricing-badge">
                                        <span class="badge">Featured</span>
                                    </div>
                                    <h5 class="font-size-16 text-white">Pro</h5>
                                    <h1 class="mt-3 text-white">₦57600 <span class="text-white font-size-16 fw-medium">/ Yearly</span></h1>
                                    <!-- <p class="text-white-50 mt-3 font-size-15">For extra large businesses or those in regulated industries</p> -->
                                    <div class="mt-4 pt-2 text-white">
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-white font-size-18 me-2"></i>Facebook & Instagram & Pinterest & YouTube & TikTok & Google</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-white font-size-18 me-2"></i>Queries: Unlimited</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-white font-size-18 me-2"></i>Max 1000 Ads per query</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-white font-size-18 me-2"></i>Download Ads: Unlimited</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-white font-size-18 me-2"></i> Basic Filters</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-white font-size-18 me-2"></i>Advanced Filter</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-white font-size-18 me-2"></i>24/7 Email Support</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-white font-size-18 me-2"></i>Advertiser & Shop Insights</p>
                                    </div>

                                    <div class="mt-4 pt-2">
                                        <form action="<?php echo e(route('pay')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="email" value="<?php echo e(auth()->user()->email); ?>">
                                            <input type="hidden" name="plan" value="pro-yearly">
                                            <button type="submit" class="btn btn-light w-100">Choose Plan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-lg-4">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="p-2">
                                    <h5 class="font-size-16">VIP</h5>
                                    <h1 class="mt-3">₦158400 <span class="text-muted font-size-16 fw-medium">/ Yearly</span></h1>
                                    <!-- <p class="text-muted mt-3 font-size-15">For small teams trying out Kadava for an unlimited
                                        period of time</p> -->
                                    <div class="mt-4 pt-2 text-muted">
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>All Pro Feautures</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>TOP 10 Daily Winners</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Chrome Extension : coming soon</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Details of ads and placements</p>
                                        <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Personalized Bookmark</p>
                                    </div>
                                    <div class="mt-4 pt-2">
                                        <form action="<?php echo e(route('pay')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="email" value="<?php echo e(auth()->user()->email); ?>">
                                            <input type="hidden" name="plan" value="vip-yearly">
                                            <button type="submit" class="btn btn-outline-primary w-100">Choose Plan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
            </div>
            <!-- end tab pane -->
        </div>
        <!-- end tab content -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->


<?php $__env->stopSection(); ?>
<script>
    document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function() {
        const duration = this.innerText.toLowerCase().includes('yearly') ? 'yearly' : 'monthly';
        // Update all plan inputs to include the correct duration
        document.querySelectorAll('input[name="plan"]').forEach(input => {
            const basePlan = input.value.split('-')[0]; // e.g., "starter" from "starter-monthly"
            input.value = `${basePlan}-${duration}`; // e.g., "starter-yearly"
        });
    });
});

</script>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Kadava_app\resources\views/user/pricing.blade.php ENDPATH**/ ?>
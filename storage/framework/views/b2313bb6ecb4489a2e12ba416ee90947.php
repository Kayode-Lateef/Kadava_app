<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Payments'); ?>  <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('user.components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Pages <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Payments and Subscriptions <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>


<div class="row">

<section style="background-color: #eee;">
  <div class="container py-5">

    <div class="row">
        <div class="card">
            <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
            <?php endif; ?>

            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p><?php echo e($error); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
            <div class="card-header">

                <h2 class="card-title">Subscriptions</h2>
                <p>Your membership and subscription.</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card card-h-100">

                <div class="card-header justify-content-between d-flex align-items-center">

                    <h4 class="card-title">
                        Membership & Subscription
                        <?php if($user->subscription && $user->subscription->status === 'active'): ?>
                            <span class="badge bg-danger rounded-pill">Active</span>
                        <?php elseif($user->subscription && $user->subscription->status === 'inactive'): ?>
                            <span class="badge bg-primary rounded-pill">Inactive</span>
                        <?php else: ?>
                            <span class="badge bg-warning rounded-pill">No Subscription</span>
                        <?php endif; ?>
                    </h4>

                </div><!-- end card header -->
                <div class="mt-4">
                    <div class="bg-light-subtle p-3">
                        <div class="hstack gap-3 mb-3">
                            <div class="col-xl-4">
                                <div class="">Current Membership:</div>
                            </div>
                            <div class="col-xl-4">
                                <div class=""><?php echo e(ucfirst($user->subscription->plan ?? 'FREE')); ?></div>
                            </div>
                        </div>
                        <div class="hstack gap-3 mb-3">
                            <div class="col-xl-4">
                                <div class="">Expiry Date:</div>
                            </div>
                            <div class="col-xl-4">
                                <div class="">
                                    <div class=""><?php echo e($user->subscription?->end_date ? \Carbon\Carbon::parse($user->subscription->end_date)->format('d M Y') : 'FREE FOREVER'); ?></div>                                </div>
                            </div>
                        </div>
                        <div class="hstack gap-3 mb-3">
                            <div class="col-xl-4">
                                <div class="">Subscription Plan:</div>
                            </div>
                            <div class="col-xl-4">
                                <div class=""><?php echo e(ucfirst($user->subscription->plan ?? 'No Subscription')); ?></div>
                            </div>
                        </div>
                        <div class="hstack gap-3 mb-3">
                            <div class="col-xl-4">
                                <div class="">Next Charge Amount: </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="">
                                    <?php if($user->subscription): ?>
                                        <?php
                                            $planPrices = [
                                                'starter-monthly' => '₦3,200',
                                                'starter-yearly' => '₦32,000',
                                                'pro-monthly' => '₦6,400',
                                                'pro-yearly' => '₦57,600',
                                                'vip-monthly' => '₦19,200',
                                                'vip-yearly' => '₦158,400',
                                            ];
                                        ?>
                                        <?php echo e($planPrices[$user->subscription->plan] ?? 'No Subscription'); ?>

                                    <?php else: ?>
                                        No Subscription
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="hstack gap-3 mb-3">
                            <div class="col-xl-4">
                                <div class="">Next Charge Date: </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="">
                                    <div class=""><?php echo e($user->subscription?->end_date ? \Carbon\Carbon::parse($user->subscription->end_date)->format('d M Y') : 'No Subscription'); ?></div>                                </div>
                            </div>
                        </div>

                        <div class="hstack gap-3 mb-3">
                            <div class="col-xl-4">
                                <div class="">Action:</div>
                            </div>
                            <div class="col-xl-4">
                                <?php if($user->subscription && $user->subscription->status === 'active'): ?>
                                    <form method="POST" action="<?php echo e(route('user.cancelSubscription')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="subscription_id" value="<?php echo e($user->subscription->id); ?>">
                                        <button type="submit" class="btn btn-danger btn-sm">Cancel Subscription</button>
                                    </form>
                                <?php else: ?>
                                    <a style="color: white !important;" href="<?php echo e(route('user.pricing')); ?>" class="btn btn-primary mt-2">Upgrade/Buy Plan</a>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                </div>



            </div><!-- end card -->
        </div><!-- end col -->


        <div class="row">
            <div class="card">
                <div class="card-header">

                    <h2 class="card-title">Invoices</h2>
                    <p>Get the invoices you need.</p>
                </div>
            </div>
        </div>

        <div class="table-responsive mb-4">
            <table class="table align-middle datatable dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Plan</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Status</th>
                    <th scope="col">Paid At</th>
                    <th style="width: 80px; min-width: 80px;">Action</th>

                </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e(ucfirst(str_replace('-', ' ', $invoice->plan))); ?></td>
                        <td>₦<?php echo e(number_format($invoice->amount, 2)); ?></td>
                        <td><?php echo e(ucfirst($invoice->status)); ?></td>
                        <td><?php echo e($invoice->paid_at ? \Carbon\Carbon::parse($invoice->paid_at)->format('d M Y') : 'N/A'); ?></td>
                        <td>
                            <a href="<?php echo e(route('user.invoice.download', $invoice->id)); ?>" class="btn btn-sm btn-primary">Download</a>
                        </td>

                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6">No invoices found.</td>
                    </tr>
                <?php endif; ?>

                </tbody>
            </table>
            <!-- end table -->
        </div>
        <!-- end table responsive -->




    </div>
  </div>
</section>

</div>

<!-- end row -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Kadava_app\resources\views/user/payment.blade.php ENDPATH**/ ?>
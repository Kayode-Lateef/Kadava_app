<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.User_List'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/assets/libs/datatables.net-bs4/datatables.net-bs4.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('assets/libs/datatables.net-responsive-bs4/datatables.net-responsive-bs4.min.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Pages <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> User List <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card mb-0">
            <div class="card-body">
                 <div class="row align-items-center">
                     <div class="col-md-6">
                         <div class="mb-3">
                             <h5 class="card-title">Contact List <span class="text-muted fw-normal ms-2">(<?php echo e($totalUsers); ?>)</span></h5>
                         </div>
                     </div>

                     <div class="col-md-6">
                         <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
      
                             <div>
                                 <a href="#" class="btn btn-light"><i class="bx bx-plus me-1"></i> Add New</a>
                             </div>

                             <div class="dropdown">
                                 <a class="btn btn-link text-muted py-1 font-size-16 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                     <i class="bx bx-dots-horizontal-rounded"></i>
                                 </a>

                                 <ul class="dropdown-menu dropdown-menu-end">
                                     <li><a class="dropdown-item" href="#">Action</a></li>
                                     <li><a class="dropdown-item" href="#">Another action</a></li>
                                     <li><a class="dropdown-item" href="#">Something else here</a></li>
                                 </ul>
                             </div>
                         </div>

                     </div>
                 </div>
                 <!-- end row -->

                 <div class="table-responsive mb-4">
                     <table class="table align-middle datatable dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                         <thead>
                         <tr>
                             <th scope="col" style="width: 50px;">
                                 <div class="form-check font-size-16">
                                     <input type="checkbox" class="form-check-input" id="checkAll">
                                     <label class="form-check-label" for="checkAll"></label>
                                 </div>
                             </th>
                             <th scope="col">Name</th>
                             <th scope="col">Email</th>
                             <th scope="col">Role</th>
                             <th scope="col">Subscription Plan</th>
                             <th style="width: 80px; min-width: 80px;">Action</th>
                         </tr>
                         </thead>
                         <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <tr>
                                 <th scope="row">
                                     <div class="form-check font-size-16">
                                         <input type="checkbox" class="form-check-input" id="contacusercheck1">
                                         <label class="form-check-label" for="contacusercheck1"></label>
                                     </div>
                                 </th>
                                 <td>
                                     <img src="<?php if(Auth::user()->avatar != ''): ?><?php echo e(URL::asset(Auth::user()->avatar)); ?><?php else: ?><?php echo e(URL::asset('/images/avatar-1.jpg')); ?><?php endif; ?>" alt="" class="avatar-sm rounded-circle me-2">
                                     <a href="#" class="text-body"><?php echo e($user->name); ?></a>
                                 </td>
                                 <td><?php echo e($user->email); ?></td>
                                 <td><?php echo e($user->role); ?></td>
                                <td> <?php echo e($user->subscription->plan ?? 'No Subscription'); ?></td>
                                 <td>
                                     <div class="dropdown">
                                         <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                             <i class="bx bx-dots-horizontal-rounded"></i>
                                         </button>
                                         <ul class="dropdown-menu dropdown-menu-end">
                                             <li><a class="dropdown-item" href="#">Action</a></li>
                                             <li><a class="dropdown-item" href="#">Another action</a></li>
                                             <li><a class="dropdown-item" href="#">Something else here</a></li>
                                         </ul>
                                     </div>
                                 </td>
                             </tr>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                         </tbody>
                     </table>
                     <!-- end table -->
                 </div>
                 <!-- end table responsive -->
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('assets/libs/datatables.net/datatables.net.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/datatables.net-bs4/datatables.net-bs4.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/datatables.net-responsive/datatables.net-responsive.min.js')); ?>"></script> --}}
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/pages/datatable-pages.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Kadava_app\resources\views/user-list.blade.php ENDPATH**/ ?>
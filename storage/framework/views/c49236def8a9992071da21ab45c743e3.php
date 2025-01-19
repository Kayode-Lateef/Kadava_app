<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.User_List'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/assets/libs/datatables.net-bs4/datatables.net-bs4.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('assets/libs/datatables.net-responsive-bs4/datatables.net-responsive-bs4.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet">

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
                 <div class="row align-items-center">
                     <div class="col-md-6">
                         <div class="mb-3">
                             <h5 class="card-title">User List <span class="text-muted fw-normal ms-2">(<?php echo e($totalUsers); ?>)</span></h5>
                         </div>
                     </div>

                     <div class="col-md-6">
                         <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">

                                <div>
                                     <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addUserModal"><i class="bx bx-plus me-1"></i> Add New</button>

                                    <!-- sample modal content -->
                                    <?php echo $__env->make('partials.add-usermodal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    <?php echo $__env->make('partials.edit-usermodal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    <?php echo $__env->make('partials.create-subscriptionmodal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    <?php echo $__env->make('partials.update-subscriptionmodal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                </div> <!-- end preview-->

                            </div>

                     </div>
                 </div>
                 <!-- end row -->

                 <div class="table-responsive mb-4">
                     <table class="table align-middle datatable dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                         <thead>
                         <tr>
                            <th scope="col">#</th>
                             <th scope="col">Username</th>
                             <th scope="col">Email</th>
                             <th scope="col">Role</th>
                             <th scope="col">Subscription Plan</th>
                             <th scope="col">Subscription Status</th>
                             <th style="width: 80px; min-width: 80px;">Action</th>
                         </tr>
                         </thead>
                         <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                 <td>
                                    <img src="<?php if($user->avatar): ?><?php echo e(URL::asset($user->avatar)); ?><?php else: ?><?php echo e(URL::asset('default-avatar.jpg')); ?><?php endif; ?>"
                                         alt="User Avatar"
                                         class="avatar-sm rounded-circle me-2">
                                    <a href="#" class="text-body"><?php echo e($user->name); ?></a>
                                    <?php if($user->status === 'banned'): ?>
                                    <span class="badge bg-danger rounded-pill">Banned</span>
                                    <?php endif; ?>
                                </td>
                                 <td><?php echo e($user->email); ?></td>
                                 <td><?php echo e($user->role); ?></td>
                                <td> <?php echo e($user->subscription->plan ?? 'No Subscription'); ?></td>
                                <td><?php echo e($user->subscription->status ?? 'Inactive'); ?></td>
                                 <td>
                                     <div class="dropdown">
                                         <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                             <i class="bx bx-dots-horizontal-rounded"></i>
                                         </button>
                                         <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editUserModal"
                                                    data-user-id="<?php echo e($user->id); ?>"
                                                    data-user-name="<?php echo e($user->name); ?>"
                                                    data-user-email="<?php echo e($user->email); ?>"
                                                    data-user-role="<?php echo e($user->role); ?>">
                                                    Edit
                                                </a>
                                            </li>

                                            <?php if($user->subscription): ?>
                                                <li>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#updateSubscriptionModal"
                                                        data-user-id="<?php echo e($user->id); ?>"
                                                        data-current-plan="<?php echo e($user->subscription->plan); ?>">
                                                        Upgrade/Downgrade
                                                    </a>
                                                </li>
                                                <li>
                                                    <?php if($user->subscription->status === 'active'): ?>
                                                        <form method="POST" action="<?php echo e(route('admin.toggleSubscription', $user->subscription->id)); ?>">
                                                            <?php echo csrf_field(); ?>
                                                            <input type="hidden" name="status" value="inactive">
                                                            <button type="submit" class="dropdown-item">Deactivate Subscription</button>
                                                        </form>
                                                    <?php else: ?>
                                                        <form method="POST" action="<?php echo e(route('admin.toggleSubscription', $user->subscription->id)); ?>">
                                                            <?php echo csrf_field(); ?>
                                                            <input type="hidden" name="status" value="active">
                                                            <button type="submit" class="dropdown-item">Activate Subscription</button>
                                                        </form>
                                                    <?php endif; ?>
                                                </li>
                                            <?php else: ?>
                                                <li>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#createSubscriptionModal"
                                                        data-user-id="<?php echo e($user->id); ?>">
                                                        Create Subscription
                                                    </a>
                                                </li>
                                            <?php endif; ?>

                                            <?php if($user->status === 'banned'): ?>
                                                <li>
                                                    <a class="dropdown-item" href="<?php echo e(route('admin.unbanUser', $user->id)); ?>">Unban User</a>
                                                </li>
                                            <?php else: ?>
                                                <li>
                                                    <a class="dropdown-item" href="<?php echo e(route('admin.banUser', $user->id)); ?>">Ban User</a>
                                                </li>
                                            <?php endif; ?>

                                            <li>
                                                <form method="POST" action="<?php echo e(route('admin.removeUser', $user->id)); ?>" class="remove-user-form">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="button" class="dropdown-item remove-user-btn" data-user-id="<?php echo e($user->id); ?>">Remove User</button>
                                                </form>
                                            </li>

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
<script src="<?php echo e(URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/pages/sweetalert.init.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/pages/datatable-pages.init.js')); ?>"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const editUserModal = document.getElementById('editUserModal');
        editUserModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const userId = button.getAttribute('data-user-id');
            const userName = button.getAttribute('data-user-name');
            const userEmail = button.getAttribute('data-user-email');
            const userRole = button.getAttribute('data-user-role');

            this.querySelector('#editUserId').value = userId;
            this.querySelector('#editUserName').value = userName;
            this.querySelector('#editUserEmail').value = userEmail;
            this.querySelector('#editUserRole').value = userRole;
        });

        const updateSubscriptionModal = document.getElementById('updateSubscriptionModal');
        updateSubscriptionModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const userId = button.getAttribute('data-user-id');
            const currentPlan = button.getAttribute('data-current-plan');

            // Populate the hidden input and other fields in the modal
            this.querySelector('#updateUserId').value = userId;
            this.querySelector('#updateSubscriptionPlan').value = currentPlan;
        });

        const createSubscriptionModal = document.getElementById('createSubscriptionModal');
        createSubscriptionModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const userId = button.getAttribute('data-user-id');

        // Populate the hidden input with the user ID
        this.querySelector('#createUserId').value = userId;
    });

    const removeButtons = document.querySelectorAll('.remove-user-btn');

    removeButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            const form = button.closest('form'); // Get the form associated with the button

            Swal.fire({
                title: 'Are you sure?',
                text: "This action cannot be undone!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // Submit the form if confirmed
                }
            });
        });
    });

});



</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Kadava_app\resources\views/user-list.blade.php ENDPATH**/ ?>
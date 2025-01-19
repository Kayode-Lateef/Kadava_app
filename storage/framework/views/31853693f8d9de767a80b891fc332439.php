<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Profile'); ?>  <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Pages <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Profile <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>


<div class="row">

<section style="background-color: #eee;">
  <div class="container py-5">

    <div class="row">
        <div class="card">
            <div class="card-header">

                <h2 class="card-title">Personal information </h2>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <img src="<?php if($admin->avatar): ?><?php echo e(URL::asset($admin->avatar)); ?><?php else: ?><?php echo e(URL::asset('/images/avatar-1.jpg')); ?><?php endif; ?>"
                         alt="avatar"
                         class="rounded-circle img-fluid"
                         style="width: 100px;">
                    <h5 class="my-3"><?php echo e($admin->name); ?></h5>
                </div>
            </div>
            <div class="card mb-4 mb-lg-0">
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush rounded-3">
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <p class="mb-0">User Name</p>
                            <p class="text-muted mb-0"><?php echo e($admin->name); ?></p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <p class="mb-0">Email</p>
                            <p class="text-muted mb-0"><?php echo e($admin->email); ?></p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <p class="mb-0">Phone</p>
                            <p class="text-muted mb-0"><?php echo e($admin->phone ?? 'N/A'); ?></p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <p class="mb-0">Country</p>
                            <p class="text-muted mb-0"><?php echo e($admin->country ?? 'N/A'); ?></p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <p class="mb-0">State</p>
                            <p class="text-muted mb-0"><?php echo e($admin->state ?? 'N/A'); ?></p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <p class="mb-0">City</p>
                            <p class="text-muted mb-0"><?php echo e($admin->city ?? 'N/A'); ?></p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <p class="mb-0">Zip code</p>
                            <p class="text-muted mb-0"><?php echo e($admin->zip ?? 'N/A'); ?></p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <p class="mb-0">Address</p>
                            <p class="text-muted mb-0"><?php echo e($admin->address ?? 'N/A'); ?></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


      <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div>
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

                    <form id="pristine-valid-example" novalidate method="post" action="<?php echo e(route('admin.profile.update')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Username</label>
                                    <input type="text" name="name" value="<?php echo e(old('name', $admin->name)); ?>" required
                                           class="form-control" />
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Email</label>
                                    <input type="email" name="email" value="<?php echo e(old('email', $admin->email)); ?>" required
                                           class="form-control" />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>City</label>
                                    <input type="text" name="city" value="<?php echo e(old('city', $admin->city)); ?>" required
                                           class="form-control" />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>State</label>
                                    <input type="text" name="state" value="<?php echo e(old('state', $admin->state)); ?>" required
                                           class="form-control" />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Zip</label>
                                    <input type="text" name="zip" value="<?php echo e(old('zip', $admin->zip)); ?>" required
                                           class="form-control" />
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Country</label>
                                    <select name="country" required class="form-control form-select">
                                        <option value=""></option>
                                        <option value="Afghanistan" <?php echo e($admin->country == 'Afghanistan' ? 'selected' : ''); ?>>Afghanistan</option>
                                        <option value="Australia" <?php echo e($admin->country == 'Australia' ? 'selected' : ''); ?>>Australia</option>
                                        <option value="Belgium" <?php echo e($admin->country == 'Belgium' ? 'selected' : ''); ?>>Belgium</option>
                                        <option value="Brazil" <?php echo e($admin->country == 'Brazil' ? 'selected' : ''); ?>>Brazil</option>
                                        <option value="Canada" <?php echo e($admin->country == 'Canada' ? 'selected' : ''); ?>>Canada</option>
                                        <option value="China" <?php echo e($admin->country == 'China' ? 'selected' : ''); ?>>China</option>
                                        <option value="Egypt" <?php echo e($admin->country == 'Egypt' ? 'selected' : ''); ?>>Egypt</option>
                                        <option value="France" <?php echo e($admin->country == 'France' ? 'selected' : ''); ?>>France</option>
                                        <option value="Germany" <?php echo e($admin->country == 'Germany' ? 'selected' : ''); ?>>Germany</option>
                                        <option value="Ghana" <?php echo e($admin->country == 'Ghana' ? 'selected' : ''); ?>>Ghana</option>
                                        <option value="India" <?php echo e($admin->country == 'India' ? 'selected' : ''); ?>>India</option>
                                        <option value="Indonesia" <?php echo e($admin->country == 'Indonesia' ? 'selected' : ''); ?>>Indonesia</option>
                                        <option value="Italy" <?php echo e($admin->country == 'Italy' ? 'selected' : ''); ?>>Italy</option>
                                        <option value="Japan" <?php echo e($admin->country == 'Japan' ? 'selected' : ''); ?>>Japan</option>
                                        <option value="Kenya" <?php echo e($admin->country == 'Kenya' ? 'selected' : ''); ?>>Kenya</option>
                                        <option value="Mexico" <?php echo e($admin->country == 'Mexico' ? 'selected' : ''); ?>>Mexico</option>
                                        <option value="Netherlands" <?php echo e($admin->country == 'Netherlands' ? 'selected' : ''); ?>>Netherlands</option>
                                        <option value="New Zealand" <?php echo e($admin->country == 'New Zealand' ? 'selected' : ''); ?>>New Zealand</option>
                                        <option value="Nigeria" <?php echo e($admin->country == 'Nigeria' ? 'selected' : ''); ?>>Nigeria</option>
                                        <option value="Russia" <?php echo e($admin->country == 'Russia' ? 'selected' : ''); ?>>Russia</option>
                                        <option value="Saudi Arabia" <?php echo e($admin->country == 'Saudi Arabia' ? 'selected' : ''); ?>>Saudi Arabia</option>
                                        <option value="South Africa" <?php echo e($admin->country == 'South Africa' ? 'selected' : ''); ?>>South Africa</option>
                                        <option value="South Korea" <?php echo e($admin->country == 'South Korea' ? 'selected' : ''); ?>>South Korea</option>
                                        <option value="Spain" <?php echo e($admin->country == 'Spain' ? 'selected' : ''); ?>>Spain</option>
                                        <option value="Sweden" <?php echo e($admin->country == 'Sweden' ? 'selected' : ''); ?>>Sweden</option>
                                        <option value="Switzerland" <?php echo e($admin->country == 'Switzerland' ? 'selected' : ''); ?>>Switzerland</option>
                                        <option value="United Arab Emirates" <?php echo e($admin->country == 'United Arab Emirates' ? 'selected' : ''); ?>>United Arab Emirates</option>
                                        <option value="United Kingdom" <?php echo e($admin->country == 'United Kingdom' ? 'selected' : ''); ?>>United Kingdom</option>
                                        <option value="United States" <?php echo e($admin->country == 'United States' ? 'selected' : ''); ?>>United States</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Phone</label>
                                    <input class="form-control" type="tel" name="phone" value="<?php echo e(old('phone', $admin->phone)); ?>" />
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group mb-3">
                                    <label>Address</label>
                                    <input type="text" name="address" value="<?php echo e(old('address', $admin->address)); ?>" required
                                           class="form-control" />
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group mb-3">
                                    <label>Profile Picture</label>
                                    <input type="file" name="avatar" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>


        <div class="row">
        <div class="">
            <div class="card-header">

                <h2 class="card-title">Security</h2>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-body">


                    <form id="pristine-valid-example" novalidate method="post" action="<?php echo e(route('admin.profile.password')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group mb-3">
                                    <label>Current Password</label>
                                    <input type="password" name="current_password" required class="form-control" />
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group mb-3">
                                    <label>New Password</label>
                                    <input type="password" name="new_password" required class="form-control" />
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group mb-3">
                                    <label>Retype New Password</label>
                                    <input type="password" name="new_password_confirmation" required class="form-control" />
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>



      </div>
    </div>
  </div>
</section>

</div>

<!-- end row -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Kadava_app\resources\views/profile.blade.php ENDPATH**/ ?>
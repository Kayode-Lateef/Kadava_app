                    <?php $__currentLoopData = $pinterestAds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pinterestAd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6 col-xl-3">

                        <!-- Simple card -->
                        <div class="card">
                            <img class="card-img-top img-fluid" src="<?php echo e($pinterestAd->image_url); ?>"
                                alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title"><?php echo e($pinterestAd->board_name); ?></h3>
                                <h4 class="card-title"><?php echo e($pinterestAd->title); ?></h4>
                                <p class="card-text"><?php echo e($pinterestAd->title); ?></p>
                                <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light">Details</a>
                            </div>
                        </div>

                    </div><!-- end col -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\laragon\www\Kadava app\resources\views/user/partials/pinterest_ads.blade.php ENDPATH**/ ?>
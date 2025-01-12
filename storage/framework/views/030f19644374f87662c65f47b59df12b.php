<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Facebook'); ?>  <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('user.components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Pages <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Facebook <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>


<div class="row">
    <div class="col-md-12">
        <div class="card text-center">
            <div class="card-body">
                <h3 class="card-title mb-5">Discover categories and products that are suitable for Facebook paid advertisement promotion. </h3>

                <div class="d-flex justify-content-center align-items-center flex-wrap gap-2 mb-4">
                    <span class="text-muted">Categories:</span>
                    <button type="button" class="btn btn-soft-primary waves-effect waves-light">All</button>
                    <button type="button" class="btn btn-soft-primary waves-effect waves-light">E-Commerce</button>
                    <button type="button" class="btn btn-soft-primary waves-effect waves-light">Games</button>
                    <button type="button" class="btn btn-soft-primary waves-effect waves-light">Dropship</button>
                    <button type="button" class="btn btn-soft-primary waves-effect waves-light">Brand</button>

                </div>

                <div class="d-flex justify-content-center align-items-center flex-wrap gap-2 mb-4">
                    <div class="text-muted">Info:</div>
                    <div class="">
                        <select class="form-select">
                            <option>Category</option>
                            <option>Apparel Accessories</option>
                            <option>Automobiles & Motorcycles</option>
                            <option>Beauty & Health</option>

                        </select>
                    </div>
                    <div class="">
                        <select class="form-select">
                            <option>Price</option>
                            <option>10000+ (USD)</option>
                            <option>10000+ (USD)</option>
                        </select>
                    </div>

                    <div class="">
                        <select class="form-select">
                            <option>Creation time</option>
                            <option></option>
                            <option></option>
                        </select>
                    </div>

                </div>

                <div class="d-flex justify-content-center align-items-center flex-wrap gap-2 mb-4">
                    <span class="text-muted">Periods:</span>
                    <button type="button" class="btn btn-soft-primary waves-effect waves-light">7 Days</button>
                    <button type="button" class="btn btn-soft-primary waves-effect waves-light">30 Days</button>
                    <button type="button" class="btn btn-soft-primary waves-effect waves-light">90 Days</button>
                    <button type="button" class="btn btn-soft-primary waves-effect waves-light">180 Days</button>


                </div>
            </div>
        </div>
    </div><!-- end col -->
</div>

<div class="row">
    <div class="col-lg-12">


                <div class="row mt-5"  id="ads-container">



                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div id="loading-gif" class="spinner-border text-primary m-1" role="status">
                            <span class="sr-only">Loading...</span>
                    </div>
                </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<script>
    $(document).ready(function() {
        let page = 1;
        let loading = false;
        let ENDPOINT = "<?php echo e(route('facebook')); ?>";

        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() >= $(document).height() - 100) {
                if (!loading) {
                    loading = true;
                    page++;
                    loadMoreData(page);
                }
            }
        });

        function loadMoreData(page) {
            $.ajax({
                url: ENDPOINT + "?page=" + page,
                type: "get",
                beforeSend: function() {
                    $('#loading-gif').show();
                }
            })
            .done(function(data) {
                if (data.html.trim() == "") { // Check if the returned HTML is empty
                    $('#loading-gif').hide(); // Hide the loading GIF
                    $('#loading-gif').after('<div style="text-align: center;" id="no-more-records">No more records found</div>'); // Display a message
                    return;
                }
                $('#loading-gif').hide(); // Hide the loading GIF
                $("#ads-container").append(data.html); // Append the new data
                loading = false;
            })
            .fail(function(jqXHR, ajaxOptions, thrownError) {
                alert('Server not responding...');
            });
        }
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Kadava app\resources\views/user/facebook.blade.php ENDPATH**/ ?>
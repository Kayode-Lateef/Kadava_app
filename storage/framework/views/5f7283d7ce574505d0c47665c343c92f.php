<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Pinterest'); ?>  <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('assets/libs/@simonwep/@simonwep.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('assets/libs/flatpickr/flatpickr.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('user.components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Pages <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Pinterest <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card text-center">
            <div class="card-body">
                <h3 class="card-title mb-5">Discover categories and products that are suitable for Pinterest paid advertisement promotion. </h3>

                <div class="d-flex justify-content-center align-items-center flex-wrap gap-2 mb-4">
                    <button type="button" class="btn btn-soft-primary waves-effect waves-light"><i class="fab fa-pinterest"></i> Pinterest</button>
                </div>

                <div class="d-flex justify-content-center align-items-center flex-wrap gap-2 mb-4">
                    <div class="">
                        <label class="text-muted" for="">Advertiser name</label>

                        <input type="text" class="form-control" placeholder="Search by advertiser">
                    </div>
                    <div class="">
                        <label class="text-muted" for="">Category</label>
                        <select class="form-select">
                            <option value="ALL">All categories</option>
                            <option value="ANIMALS">Animals</option>
                            <option value="ARCHITECTURE">Architecture</option>
                            <option value="ART">Art</option>
                            <option value="BEAUTY">Beauty</option>
                            <option value="CHILDRENS_FASHION">Children's fashion</option>
                            <option value="DESIGN">Design</option>
                            <option value="DIY_AND_CRAFTS">DIY and crafts</option>
                            <option value="EDUCATION">Education</option>
                            <option value="ELECTRONICS">Electronics</option>
                            <option value="ENTERTAINMENT">Entertainment</option>
                            <option value="EVENT_PLANNING">Event planning</option>
                            <option value="FINANCE">Finance</option>
                            <option value="FOOD_AND_DRINKS">Food and drinks</option>
                            <option value="GARDENING">Gardening</option>
                            <option value="HEALTH">Health</option>
                            <option value="HOME_DECOR">Home decor</option>
                            <option value="MENS_FASHION">Men's fashion</option>
                            <option value="OTHER">Other</option>
                            <option value="PARENTING">Parenting</option>
                            <option value="QUOTES">Quotes</option>
                            <option value="SPORT">Sport</option>
                            <option value="TRAVEL">Travel</option>
                            <option value="VEHICLES">Vehicles</option>
                            <option value="WEDDING">Wedding</option>
                            <option value="WOMENS_FASHION">Women's fashion</option>
                        </select>
                    </div>
                    <div class="">
                        <label class="text-muted" for="">Country</label>
                        <select class="form-select">
                            <option>-Select Country-</option>
                            <option value="AT">Austria</option>
                            <option value="BE">Belgium</option>
                            <option value="BG">Bulgaria</option>
                            <option value="HR">Croatia</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="DK">Denmark</option>
                            <option value="EE">Estonia</option>
                            <option value="FI">Finland</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                            <option value="GR">Greece</option>
                            <option value="HU">Hungary</option>
                            <option value="IE">Ireland</option>
                            <option value="IT">Italy</option>
                            <option value="LV">Latvia</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MT">Malta</option>
                            <option value="NL">Netherlands</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="RO">Romania</option>
                            <option value="SK">Slovakia</option>
                            <option value="SI">Slovenia</option>
                            <option value="ES">Spain</option>
                            <option value="SE">Sweden</option>
                        </select>
                    </div>
                    <div class="">
                        <label class="text-muted" for="">Ages</label>

                        <select class="form-select">
                        <option value="ALL">All ages</option>
                        <option value="AGE_18_24">18 - 24</option>
                        <option value="AGE_25_34">25 - 34</option>
                        <option value="AGE_35_44">35 - 44</option>
                        <option value="AGE_45_49">45 - 49</option>
                        <option value="AGE_50_54">50 - 54</option>
                        <option value="AGE_55_64">55 - 64</option>
                        <option value="AGE_65_PLUS">65+</option>
                        </select>
                    </div>

                    <div class="">
                        <label class="text-muted" for="">Start Date</label>

                        <input type="text" class="form-control" id="datepicker-basic">
                    </div>

                    <div class="">
                        <label class="text-muted" for="">End Date</label>

                        <input type="text" class="form-control" id="datepicker-basic">
                    </div>


                </div>

                <div class="d-flex justify-content-end flex-wrap gap-2 mb-4">
                    <button type="button" class="btn btn-soft-primary waves-effect waves-light">Search</button>


                </div>
            </div>
        </div>
    </div><!-- end col -->

    <div style="display:none;" class="row">
        <div class="classic-colorpicker"></div>
        <div class="monolith-colorpicker"></div>
        <div class="nano-colorpicker"></div>
    </div>
    <!-- end row -->

</div>



<div class="row">
    <div class="col-lg-12">


                <div class="row mt-5"  id="pinterest-ads-container">

                    <?php echo $__env->make('user.partials.pinterest_ads', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
<script src="<?php echo e(URL::asset('assets/libs/@simonwep/@simonwep.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/flatpickr/flatpickr.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/pages/form-advanced.init.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<script>
    $(document).ready(function() {
        let page = 1;
        let loading = false;
        let ENDPOINT = "<?php echo e(route('user.pinterest')); ?>"; // Update this with the correct route

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
                $("#pinterest-ads-container").append(data.html); // Append the new data
                loading = false;
            })
            .fail(function(jqXHR, ajaxOptions, thrownError) {
                alert('Server not responding...');
            });
        }
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Kadava app\resources\views/user/pinterest.blade.php ENDPATH**/ ?>
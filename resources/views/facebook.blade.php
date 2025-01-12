@extends('layouts.master')
@section('title') @lang('translation.Facebook')  @endsection
@section('css')
<link href="{{ URL::asset('assets/libs/@simonwep/@simonwep.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Facebook @endslot
@endcomponent


<div class="row">
    <div class="col-md-12">
        <div class="card text-center">
            <div class="card-body">
                <h3 class="card-title mb-5">Discover categories and products that are suitable for facebook paid advertisement promotion. </h3>

                <div class="d-flex justify-content-center align-items-center flex-wrap gap-2 mb-4">
                    <button type="button" class="btn btn-soft-primary waves-effect waves-light"><i class="fab fa-facebook"></i> Facebook</button>
                </div>

                <div class="d-flex justify-content-center align-items-center flex-wrap gap-2 mb-4">
                    <div class="">
                        <label class="text-muted" for="">Advertiser</label>

                        <input type="text" class="form-control" placeholder="Search">
                    </div>

                    <div class="">
                        <label class="text-muted" for="">Language</label>

                        <select class="form-select">
                            <option value="ENGLISH">English</option>
                        </select>
                    </div>

                    <div class="">
                        <label class="text-muted" for="">Platforms</label>

                        <select class="form-select">
                            <option value="ALL">All Platforms</option>
                            <option value="FACEBOOK">Facebook</option>
                            <option value="INSTAGRAM">Instagram</option>
                            <option value="AUDIENCE_NETWORK">Audience Network</option>
                            <option value="MESSENGER">Messenger</option>
                        </select>
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
                        <label class="text-muted" for="">Active and Inactive</label>

                        <select class="form-select">
                            <option value="ACTIVE">Active ads</option>
                            <option value="INACTIVE">Inactive ads</option>
                        </select>
                    </div>

                    <div class="">
                        <label class="text-muted" for="">Media Type</label>

                        <select class="form-select">
                            <option value="IMAGES">Images</option>
                            <option value="VIDEOS">Videos</option>
                        </select>
                    </div>
                    <br>
                    <div class="">
                        <label class="text-muted" for="">Start date</label>

                        <input type="text" class="form-control" id="datepicker-basic">
                    </div>

                    <div class="">
                        <label class="text-muted" for="">End date</label>

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
@endsection
@section('script')
<script src="{{ URL::asset('assets/libs/@simonwep/@simonwep.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/form-advanced.init.js') }}"></script>
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
<script>
    $(document).ready(function() {
        let page = 1;
        let loading = false;
        let ENDPOINT = "{{ route('facebook') }}";

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

@endsection

@extends('layouts.master-without-nav')
@section('title')
    @lang('translation.Maintenance')
@endsection
@section('body')
<body>
@endsection
@section('content')
<div class="bg-light-subtle min-vh-100 py-5">
    <div class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <div class="row justify-content-center mb-5">
                            <div class="col-sm-5">
                                <div class="maintenance-img">
                                    <img src="{{ URL::asset('assets/images/maintenance.png') }}" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                        </div>
                        <h3 class="mt-4">Site is Under Maintenance</h3>
                        <p>Please check back in sometime.</p>

                      
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
</div>
<!-- end  -->
@endsection

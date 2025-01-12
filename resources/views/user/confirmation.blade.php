@extends('user.layouts.master')
@section('title') @lang('translation.Pricing')  @endsection
@section('content')
@component('user.components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Confirmation @endslot
@endcomponent
<div class="row">
    <div class="col-lg-12">

        <div class="container">
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            <h1>Thank you for subscribing!</h1>
            <!-- Additional content about the subscription can go here -->
        </div>


    </div>
    <!-- end col -->
</div>
<!-- end row -->


@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection

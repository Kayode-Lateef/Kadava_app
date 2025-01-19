@extends('layouts.master')
@section('title') @lang('translation.User_List') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables.net-bs4/datatables.net-bs4.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/libs/datatables.net-responsive-bs4/datatables.net-responsive-bs4.min.css') }}" rel="stylesheet" type="text/css" />

@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Subscribers List @endslot
@endcomponent
<div class="row">
    <div class="col-lg-12">
        <div class="card mb-0">
            <div class="card-body">
                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                 <div class="row align-items-center">
                     <div class="col-md-6">
                         <div class="mb-3">
                             <h5 class="card-title">User List <span class="text-muted fw-normal ms-2">({{ $totalUsers }})</span></h5>
                         </div>
                     </div>

                     <div class="col-md-6">
                         <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">

                                <div>
                                     <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addUserModal"><i class="bx bx-plus me-1"></i> Add New</button>

                                    <!-- sample modal content -->
                                 

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
                             <th scope="col">User</th>
                             <th scope="col">Plan</th>
                             <th scope="col">Status</th>
                             <th style="width: 80px; min-width: 80px;" scope="col">Action</th>
                         </tr>
                         </thead>
                         <tbody>
                            @foreach ($subscriptions as $subscription)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $subscription->user->name }}</td>
                                    <td>{{ ucfirst($subscription->plan) }}</td>
                                    <td>
                                        @if ($subscription->status === 'active')
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($subscription->status === 'active')
                                            <form method="POST" action="{{ route('admin.toggleSubscription', $subscription->id) }}">
                                                @csrf
                                                <input type="hidden" name="status" value="inactive">
                                                <button type="submit" class="btn btn-danger btn-sm">Deactivate</button>
                                            </form>
                                        @else
                                            <form method="POST" action="{{ route('admin.toggleSubscription', $subscription->id) }}">
                                                @csrf
                                                <input type="hidden" name="status" value="active">
                                                <button type="submit" class="btn btn-success btn-sm">Activate</button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                     </table>
                     <!-- end table -->
                 </div>
                 <!-- end table responsive -->
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{ URL::asset('assets/libs/datatables.net/datatables.net.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/datatables.net-bs4/datatables.net-bs4.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/datatables.net-responsive/datatables.net-responsive.min.js') }}"></script> --}}
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/datatable-pages.init.js') }}"></script>


@endsection

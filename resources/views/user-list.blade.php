@extends('layouts.master')
@section('title') @lang('translation.User_List') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables.net-bs4/datatables.net-bs4.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/libs/datatables.net-responsive-bs4/datatables.net-responsive-bs4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">

@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') User List @endslot
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
                                    @include('partials.add-usermodal')

                                    @include('partials.edit-usermodal')

                                    @include('partials.create-subscriptionmodal')

                                    @include('partials.update-subscriptionmodal')

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
                            @foreach ($users as $user)
                             <tr>
                                <td>{{ $loop->iteration }}</td>
                                 <td>
                                    <img src="@if ($user->avatar){{ URL::asset($user->avatar) }}@else{{ URL::asset('default-avatar.jpg') }}@endif"
                                         alt="User Avatar"
                                         class="avatar-sm rounded-circle me-2">
                                    <a href="#" class="text-body">{{ $user->name }}</a>
                                    @if ($user->status === 'banned')
                                    <span class="badge bg-danger rounded-pill">Banned</span>
                                    @endif
                                </td>
                                 <td>{{ $user->email }}</td>
                                 <td>{{ $user->role }}</td>
                                <td> {{ $user->subscription->plan ?? 'No Subscription' }}</td>
                                <td>{{ $user->subscription->status ?? 'Inactive' }}</td>
                                 <td>
                                     <div class="dropdown">
                                         <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                             <i class="bx bx-dots-horizontal-rounded"></i>
                                         </button>
                                         <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editUserModal"
                                                    data-user-id="{{ $user->id }}"
                                                    data-user-name="{{ $user->name }}"
                                                    data-user-email="{{ $user->email }}"
                                                    data-user-role="{{ $user->role }}">
                                                    Edit
                                                </a>
                                            </li>

                                            @if ($user->subscription)
                                                <li>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#updateSubscriptionModal"
                                                        data-user-id="{{ $user->id }}"
                                                        data-current-plan="{{ $user->subscription->plan }}">
                                                        Upgrade/Downgrade
                                                    </a>
                                                </li>
                                                <li>
                                                    @if ($user->subscription->status === 'active')
                                                        <form method="POST" action="{{ route('admin.toggleSubscription', $user->subscription->id) }}">
                                                            @csrf
                                                            <input type="hidden" name="status" value="inactive">
                                                            <button type="submit" class="dropdown-item">Deactivate Subscription</button>
                                                        </form>
                                                    @else
                                                        <form method="POST" action="{{ route('admin.toggleSubscription', $user->subscription->id) }}">
                                                            @csrf
                                                            <input type="hidden" name="status" value="active">
                                                            <button type="submit" class="dropdown-item">Activate Subscription</button>
                                                        </form>
                                                    @endif
                                                </li>
                                            @else
                                                <li>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#createSubscriptionModal"
                                                        data-user-id="{{ $user->id }}">
                                                        Create Subscription
                                                    </a>
                                                </li>
                                            @endif

                                            @if ($user->status === 'banned')
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('admin.unbanUser', $user->id) }}">Unban User</a>
                                                </li>
                                            @else
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('admin.banUser', $user->id) }}">Ban User</a>
                                                </li>
                                            @endif

                                            <li>
                                                <form method="POST" action="{{ route('admin.removeUser', $user->id) }}" class="remove-user-form">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="dropdown-item remove-user-btn" data-user-id="{{ $user->id }}">Remove User</button>
                                                </form>
                                            </li>

                                        </ul>

                                     </div>
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
<script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/sweetalert.init.js') }}"></script>
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/datatable-pages.init.js') }}"></script>
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

@endsection

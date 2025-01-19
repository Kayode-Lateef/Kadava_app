@extends('layouts.master')
@section('title') @lang('translation.Profile')  @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Profile @endslot
@endcomponent


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
                    <img src="@if ($admin->avatar){{ URL::asset($admin->avatar) }}@else{{ URL::asset('/images/avatar-1.jpg') }}@endif"
                         alt="avatar"
                         class="rounded-circle img-fluid"
                         style="width: 100px;">
                    <h5 class="my-3">{{ $admin->name }}</h5>
                </div>
            </div>
            <div class="card mb-4 mb-lg-0">
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush rounded-3">
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <p class="mb-0">User Name</p>
                            <p class="text-muted mb-0">{{ $admin->name }}</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <p class="mb-0">Email</p>
                            <p class="text-muted mb-0">{{ $admin->email }}</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <p class="mb-0">Phone</p>
                            <p class="text-muted mb-0">{{ $admin->phone ?? 'N/A' }}</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <p class="mb-0">Country</p>
                            <p class="text-muted mb-0">{{ $admin->country ?? 'N/A' }}</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <p class="mb-0">State</p>
                            <p class="text-muted mb-0">{{ $admin->state ?? 'N/A' }}</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <p class="mb-0">City</p>
                            <p class="text-muted mb-0">{{ $admin->city ?? 'N/A' }}</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <p class="mb-0">Zip code</p>
                            <p class="text-muted mb-0">{{ $admin->zip ?? 'N/A' }}</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <p class="mb-0">Address</p>
                            <p class="text-muted mb-0">{{ $admin->address ?? 'N/A' }}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


      <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div>
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

                    <form id="pristine-valid-example" novalidate method="post" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Username</label>
                                    <input type="text" name="name" value="{{ old('name', $admin->name) }}" required
                                           class="form-control" />
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Email</label>
                                    <input type="email" name="email" value="{{ old('email', $admin->email) }}" required
                                           class="form-control" />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>City</label>
                                    <input type="text" name="city" value="{{ old('city', $admin->city) }}" required
                                           class="form-control" />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>State</label>
                                    <input type="text" name="state" value="{{ old('state', $admin->state) }}" required
                                           class="form-control" />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Zip</label>
                                    <input type="text" name="zip" value="{{ old('zip', $admin->zip) }}" required
                                           class="form-control" />
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Country</label>
                                    <select name="country" required class="form-control form-select">
                                        <option value=""></option>
                                        <option value="Afghanistan" {{ $admin->country == 'Afghanistan' ? 'selected' : '' }}>Afghanistan</option>
                                        <option value="Australia" {{ $admin->country == 'Australia' ? 'selected' : '' }}>Australia</option>
                                        <option value="Belgium" {{ $admin->country == 'Belgium' ? 'selected' : '' }}>Belgium</option>
                                        <option value="Brazil" {{ $admin->country == 'Brazil' ? 'selected' : '' }}>Brazil</option>
                                        <option value="Canada" {{ $admin->country == 'Canada' ? 'selected' : '' }}>Canada</option>
                                        <option value="China" {{ $admin->country == 'China' ? 'selected' : '' }}>China</option>
                                        <option value="Egypt" {{ $admin->country == 'Egypt' ? 'selected' : '' }}>Egypt</option>
                                        <option value="France" {{ $admin->country == 'France' ? 'selected' : '' }}>France</option>
                                        <option value="Germany" {{ $admin->country == 'Germany' ? 'selected' : '' }}>Germany</option>
                                        <option value="Ghana" {{ $admin->country == 'Ghana' ? 'selected' : '' }}>Ghana</option>
                                        <option value="India" {{ $admin->country == 'India' ? 'selected' : '' }}>India</option>
                                        <option value="Indonesia" {{ $admin->country == 'Indonesia' ? 'selected' : '' }}>Indonesia</option>
                                        <option value="Italy" {{ $admin->country == 'Italy' ? 'selected' : '' }}>Italy</option>
                                        <option value="Japan" {{ $admin->country == 'Japan' ? 'selected' : '' }}>Japan</option>
                                        <option value="Kenya" {{ $admin->country == 'Kenya' ? 'selected' : '' }}>Kenya</option>
                                        <option value="Mexico" {{ $admin->country == 'Mexico' ? 'selected' : '' }}>Mexico</option>
                                        <option value="Netherlands" {{ $admin->country == 'Netherlands' ? 'selected' : '' }}>Netherlands</option>
                                        <option value="New Zealand" {{ $admin->country == 'New Zealand' ? 'selected' : '' }}>New Zealand</option>
                                        <option value="Nigeria" {{ $admin->country == 'Nigeria' ? 'selected' : '' }}>Nigeria</option>
                                        <option value="Russia" {{ $admin->country == 'Russia' ? 'selected' : '' }}>Russia</option>
                                        <option value="Saudi Arabia" {{ $admin->country == 'Saudi Arabia' ? 'selected' : '' }}>Saudi Arabia</option>
                                        <option value="South Africa" {{ $admin->country == 'South Africa' ? 'selected' : '' }}>South Africa</option>
                                        <option value="South Korea" {{ $admin->country == 'South Korea' ? 'selected' : '' }}>South Korea</option>
                                        <option value="Spain" {{ $admin->country == 'Spain' ? 'selected' : '' }}>Spain</option>
                                        <option value="Sweden" {{ $admin->country == 'Sweden' ? 'selected' : '' }}>Sweden</option>
                                        <option value="Switzerland" {{ $admin->country == 'Switzerland' ? 'selected' : '' }}>Switzerland</option>
                                        <option value="United Arab Emirates" {{ $admin->country == 'United Arab Emirates' ? 'selected' : '' }}>United Arab Emirates</option>
                                        <option value="United Kingdom" {{ $admin->country == 'United Kingdom' ? 'selected' : '' }}>United Kingdom</option>
                                        <option value="United States" {{ $admin->country == 'United States' ? 'selected' : '' }}>United States</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Phone</label>
                                    <input class="form-control" type="tel" name="phone" value="{{ old('phone', $admin->phone) }}" />
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group mb-3">
                                    <label>Address</label>
                                    <input type="text" name="address" value="{{ old('address', $admin->address) }}" required
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


                    <form id="pristine-valid-example" novalidate method="post" action="{{ route('admin.profile.password') }}">
                        @csrf
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
@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection

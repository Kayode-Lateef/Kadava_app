@extends('user.layouts.master')
@section('title') @lang('translation.Profile')  @endsection
@section('content')
@component('user.components.breadcrumb')
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
            <img src="@if (Auth::user()->avatar != ''){{ URL::asset(Auth::user()->avatar) }}@else{{ URL::asset('/images/avatar-1.jpg') }}@endif" alt="avatar"
              class="rounded-circle img-fluid" style="width: 100px;">
            <h5 class="my-3">John Smith</h5>

          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <p class="mb-0">User Name</p>
                <p class="text-muted mb-0">Johnatan Smith</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <p class="mb-0">Email</p>
                <p class="text-muted mb-0">example@example.com</p>

              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <p class="mb-0">Phone</p>
                <p class="text-muted mb-0">(097) 234-5678</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <p class="mb-0">Company</p>
                <p class="text-muted mb-0">(098) 765-4321</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <p class="mb-0">Country</p>
                <p class="text-muted mb-0">Nigeria</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <p class="mb-0">State</p>
                <p class="text-muted mb-0">Nigeria</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <p class="mb-0">City</p>
                <p class="text-muted mb-0">Nigeria</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <p class="mb-0">Zip code</p>
                <p class="text-muted mb-0">Nigeria</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <p class="mb-0">Address</p>
                <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div>
                    <form id="pristine-valid-example" novalidate method="post">
                        <input type="hidden" />
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Username</label>
                                    <input type="text" required data-pristine-required-message="Please Enter a username" class="form-control" />
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Email</label>
                                    <input type="email" required data-pristine-required-message="Please Enter a Email"
                                        class="form-control" />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="validationCustom03">City</label>
                                    <input type="text" class="form-control" id="validationCustom03" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="validationCustom04">State</label>
                                    <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="validationCustom05">Zip</label>
                                    <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label">Country</label>
                                        <select required class="form-control form-select">
                                            <option value=""></option>
                                            <option value="wr">Nigeria</option>
                                            <option value="ph">United kingdom</option>
                                            <option value="cy">Ghana</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                            <div class="form-group mb-3">
                                    <label for="example-tel-input" class="form-label">Telephone</label>
                                    <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
                                </div>
                            </div>


                            <div class="col-xl-12 col-md-12">
                                <div class="form-group mb-3">
                                    <label class="form-label">Address</label>
                                    <input type="text" class="form-control" required id=""/>
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



                    <form id="pristine-valid-example" novalidate method="post">
                        <input type="hidden" />
                        <div class="row">

                            <div class="col-xl-12 col-md-12">
                                <div class="form-group mb-3">
                                    <label>Current Password</label>
                                    <input type="password" id="pwd" required data-pristine-required-message="Please Enter a password"
                                        data-pristine-pattern="/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/"
                                        data-pristine-pattern-message="Minimum 8 characters, at least one uppercase letter, one lowercase letter and one number"
                                        class="form-control" />
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group mb-3">
                                    <label>New Password</label>
                                    <input type="password" data-pristine-equals="#pwd"
                                        data-pristine-equals-message="Passwords don't match" class="form-control" />
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group mb-3">
                                    <label>Retype New Password</label>
                                    <input type="password" data-pristine-equals="#pwd"
                                        data-pristine-equals-message="Passwords don't match" class="form-control" />
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


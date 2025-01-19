@extends('user.layouts.master')
@section('title') @lang('translation.Payments')  @endsection
@section('content')
@component('user.components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Payments and Subscriptions @endslot
@endcomponent


<div class="row">

<section style="background-color: #eee;">
  <div class="container py-5">

    <div class="row">
        <div class="card">
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
            <div class="card-header">

                <h2 class="card-title">Subscriptions</h2>
                <p>Your membership and subscription.</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card card-h-100">

                <div class="card-header justify-content-between d-flex align-items-center">

                    <h4 class="card-title">
                        Membership & Subscription
                        @if($user->subscription && $user->subscription->status === 'active')
                            <span class="badge bg-danger rounded-pill">Active</span>
                        @elseif($user->subscription && $user->subscription->status === 'inactive')
                            <span class="badge bg-primary rounded-pill">Inactive</span>
                        @else
                            <span class="badge bg-warning rounded-pill">No Subscription</span>
                        @endif
                    </h4>

                </div><!-- end card header -->
                <div class="mt-4">
                    <div class="bg-light-subtle p-3">
                        <div class="hstack gap-3 mb-3">
                            <div class="col-xl-4">
                                <div class="">Current Membership:</div>
                            </div>
                            <div class="col-xl-4">
                                <div class="">{{ ucfirst($user->subscription->plan ?? 'FREE') }}</div>
                            </div>
                        </div>
                        <div class="hstack gap-3 mb-3">
                            <div class="col-xl-4">
                                <div class="">Expiry Date:</div>
                            </div>
                            <div class="col-xl-4">
                                <div class="">
                                    <div class="">{{ $user->subscription?->end_date ? \Carbon\Carbon::parse($user->subscription->end_date)->format('d M Y') : 'FREE FOREVER' }}</div>                                </div>
                            </div>
                        </div>
                        <div class="hstack gap-3 mb-3">
                            <div class="col-xl-4">
                                <div class="">Subscription Plan:</div>
                            </div>
                            <div class="col-xl-4">
                                <div class="">{{ ucfirst($user->subscription->plan ?? 'No Subscription') }}</div>
                            </div>
                        </div>
                        <div class="hstack gap-3 mb-3">
                            <div class="col-xl-4">
                                <div class="">Next Charge Amount: </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="">
                                    @if ($user->subscription)
                                        @php
                                            $planPrices = [
                                                'starter-monthly' => '₦3,200',
                                                'starter-yearly' => '₦32,000',
                                                'pro-monthly' => '₦6,400',
                                                'pro-yearly' => '₦57,600',
                                                'vip-monthly' => '₦19,200',
                                                'vip-yearly' => '₦158,400',
                                            ];
                                        @endphp
                                        {{ $planPrices[$user->subscription->plan] ?? 'No Subscription' }}
                                    @else
                                        No Subscription
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="hstack gap-3 mb-3">
                            <div class="col-xl-4">
                                <div class="">Next Charge Date: </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="">
                                    <div class="">{{ $user->subscription?->end_date ? \Carbon\Carbon::parse($user->subscription->end_date)->format('d M Y') : 'No Subscription' }}</div>                                </div>
                            </div>
                        </div>

                        <div class="hstack gap-3 mb-3">
                            <div class="col-xl-4">
                                <div class="">Action:</div>
                            </div>
                            <div class="col-xl-4">
                                @if ($user->subscription && $user->subscription->status === 'active')
                                    <form method="POST" action="{{ route('user.cancelSubscription') }}">
                                        @csrf
                                        <input type="hidden" name="subscription_id" value="{{ $user->subscription->id }}">
                                        <button type="submit" class="btn btn-danger btn-sm">Cancel Subscription</button>
                                    </form>
                                @else
                                    <a style="color: white !important;" href="{{ route('user.pricing') }}" class="btn btn-primary mt-2">Upgrade/Buy Plan</a>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>



            </div><!-- end card -->
        </div><!-- end col -->


        <div class="row">
            <div class="card">
                <div class="card-header">

                    <h2 class="card-title">Invoices</h2>
                    <p>Get the invoices you need.</p>
                </div>
            </div>
        </div>

        <div class="table-responsive mb-4">
            <table class="table align-middle datatable dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Plan</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Status</th>
                    <th scope="col">Paid At</th>
                    <th style="width: 80px; min-width: 80px;">Action</th>

                </tr>
                </thead>
                <tbody>
                    @forelse ($invoices as $invoice)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ ucfirst(str_replace('-', ' ', $invoice->plan)) }}</td>
                        <td>₦{{ number_format($invoice->amount, 2) }}</td>
                        <td>{{ ucfirst($invoice->status) }}</td>
                        <td>{{ $invoice->paid_at ? \Carbon\Carbon::parse($invoice->paid_at)->format('d M Y') : 'N/A' }}</td>
                        <td>
                            <a href="{{ route('user.invoice.download', $invoice->id) }}" class="btn btn-sm btn-primary">Download</a>
                        </td>

                    </tr>
                    @empty
                    <tr>
                        <td colspan="6">No invoices found.</td>
                    </tr>
                @endforelse

                </tbody>
            </table>
            <!-- end table -->
        </div>
        <!-- end table responsive -->




    </div>
  </div>
</section>

</div>

<!-- end row -->
@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection

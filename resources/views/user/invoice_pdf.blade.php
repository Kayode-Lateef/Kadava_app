<!DOCTYPE html>
<html>
<head>
    <title>Invoice #{{ $invoice->id }}</title>
</head>
<body>
    <h1>Invoice</h1>
    <p><strong>Invoice ID:</strong> {{ $invoice->id }}</p>
    <p><strong>User:</strong> {{ $invoice->user->name }}</p>
    <p><strong>Plan:</strong> {{ ucfirst(str_replace('-', ' ', $invoice->plan)) }}</p>
    <p><strong>Amount:</strong> ₦{{ number_format($invoice->amount, 2) }}</p>
    <p><strong>Status:</strong> {{ ucfirst($invoice->status) }}</p>
    <p><strong>Paid At:</strong> {{ $invoice->paid_at ? \Carbon\Carbon::parse($invoice->paid_at)->format('d M Y') : 'N/A' }}</p>
</body>
</html>

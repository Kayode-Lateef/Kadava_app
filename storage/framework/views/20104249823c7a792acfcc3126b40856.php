<!DOCTYPE html>
<html>
<head>
    <title>Invoice #<?php echo e($invoice->id); ?></title>
</head>
<body>
    <h1>Invoice</h1>
    <p><strong>Invoice ID:</strong> <?php echo e($invoice->id); ?></p>
    <p><strong>User:</strong> <?php echo e($invoice->user->name); ?></p>
    <p><strong>Plan:</strong> <?php echo e(ucfirst(str_replace('-', ' ', $invoice->plan))); ?></p>
    <p><strong>Amount:</strong> ₦<?php echo e(number_format($invoice->amount, 2)); ?></p>
    <p><strong>Status:</strong> <?php echo e(ucfirst($invoice->status)); ?></p>
    <p><strong>Paid At:</strong> <?php echo e($invoice->paid_at ? \Carbon\Carbon::parse($invoice->paid_at)->format('d M Y') : 'N/A'); ?></p>
</body>
</html>
<?php /**PATH C:\laragon\www\Kadava_app\resources\views/user/invoice_pdf.blade.php ENDPATH**/ ?>
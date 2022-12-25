
<?php


use App\InvoicePaid;
use Illuminate\Support\Facades\Notification;
use Stripe\Invoice;

Notification::send($users, new Invoice($invoice));


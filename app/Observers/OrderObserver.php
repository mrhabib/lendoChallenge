<?php

namespace App\Observers;

use App\Models\Order;
use App\Services\SmsServiceManager;
class OrderObserver
{
    protected $smsServiceManager;

    public function __construct(SmsServiceManager $smsServiceManager)
    {
        $this->smsServiceManager = $smsServiceManager;
    }

    public function created(Order $order)
    {
        $customer = $order->customer;

        if ($customer && $customer->complete_info && $customer->status !== 'blocked') {
            $message = "Dear {$customer->name},\nYour order has been registered successfully.\nThank you.";
            $this->smsServiceManager->sendSms($customer->mobile, $message);
        }
    }
}

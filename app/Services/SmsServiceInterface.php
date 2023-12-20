<?php
namespace App\Services;

interface SmsServiceInterface
{
    public function sendSms($recipient, $message);
}


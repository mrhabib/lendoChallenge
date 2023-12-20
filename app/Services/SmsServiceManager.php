<?php
namespace App\Services;
use Illuminate\Support\Facades\Config;
class SmsServiceManager
{
    protected $smsService;

    public function __construct()
    {
        $providerKey = Config::get('sms.default');
        $this->smsService = app(Config::get("sms.providers.$providerKey"));
    }

    public function setSmsService($providerKey)
    {
        $this->smsService = app(Config::get("sms.providers.$providerKey"));
    }

    public function sendSms($recipient, $message)
    {
        return $this->smsService->sendSms($recipient, $message);
    }
}


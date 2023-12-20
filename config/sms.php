<?php

return [
    'default' => env('SMS_PROVIDER', 'kavehNegar'),

    'providers' => [
        'kavehNegar' => App\Services\ProviderKevehNegar::class,
        'smsIr'      => App\Services\ProviderSmsIr::class,
        'farazSms'   => App\Services\ProviderFarazSms::class
    ],
];




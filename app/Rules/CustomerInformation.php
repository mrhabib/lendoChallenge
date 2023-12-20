<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Customer;
class CustomerInformation implements Rule
{
    public function passes($attribute, $value)
    {
        $customer = Customer::find($value);

        if (!$customer || !$customer->complete_info || empty($customer->mobile) || empty($customer->name)) {
            return false;
        }

        // Check if the customer is not blocked
        if ($customer->status === 'blocked') {
            return false;
        }

        return true;
    }

    public function message()
    {
        return 'Customer information is incomplete or blocked.';
    }
}

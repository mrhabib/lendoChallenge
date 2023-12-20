<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Rules\CustomerInformation;
class OrderController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'customer_id' => ['required', 'exists:customers,id', new CustomerInformation],
            'amount' => 'required|integer|between:10000000,20000000',
            'invoice_count' => 'required|integer|between:6,12',
        ]);

        $customer = Customer::find($validatedData['customer_id']);
        $validatedData['status'] = (!empty($customer->bank_account_number)) ? 'CHECK_HAVING_ACCOUNT' : 'OPENING_BANK_ACCOUNT';

        $order = Order::create($validatedData);

        return response()->json(['message' => 'Order registered successfully', 'order' => $order], 201);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'bank_account_number' => '123456789',
            'status' => 'normal',
            'complete_info' => true,
            'mobile' => '09114229210',
            'name' => 'rafael',
        ]);

        Customer::create([
            'bank_account_number' => '987654321',
            'status' => 'blocked',
            'complete_info' => false,
            'mobile' => '09114229310',
            'name' => 'habib',
        ]);
        Customer::create([
            'bank_account_number' => '987654320',
            'status' => 'blocked',
            'complete_info' => false,
            'mobile' => '',
            'name' => 'hasan',
        ]);
    }
}

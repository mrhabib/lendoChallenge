<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'amount',
        'invoice_count',
        'status',
    ];
    protected $casts = [
        'amount' => 'integer',
        'invoice_count' => 'integer',
    ];
}

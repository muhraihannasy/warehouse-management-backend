<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionProduct extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'product_id',
        'transaction_id',
        'quantity',
        'price',
        'sub_total',
    ];
}

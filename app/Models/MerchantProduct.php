<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MerchantProduct extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'warehouse_id',
        'merchant_id',
        'product_id',
        'stock'
    ];
}

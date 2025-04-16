<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'merchant_id',
        'name',
        'phone',
        'sub_total',
        'tax_total',
        'grand_total',
    ];
}

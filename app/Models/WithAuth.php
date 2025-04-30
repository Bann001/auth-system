<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WithAuth extends Model
{
    protected $fillable = [
        'item_name',
        'description',
    ];
}

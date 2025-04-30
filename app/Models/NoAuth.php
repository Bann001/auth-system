<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NoAuth extends Model
{
    protected $fillable = [
        'item_name',
        'description',
    ];
}

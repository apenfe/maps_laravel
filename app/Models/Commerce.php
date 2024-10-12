<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commerce extends Model
{
    protected $fillable = [
        'name',
        'address',
        'phone',
        'type',
        'lat',
        'lng',
    ];
}

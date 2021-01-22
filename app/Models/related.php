<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class related extends Model
{
    protected $fillable = [
        'title',
        'size',
        'price',
        'rating',
        'image',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class features extends Model
{
    protected $fillable = [
        'title',
        'price',
        'text',
        'image',
    ];
}

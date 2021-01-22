<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    protected $fillable = [
        'name',
        'sub_title',
        'text',
        'image',
    ];
}

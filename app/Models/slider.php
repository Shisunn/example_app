<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    protected $fillable = [
        'title',
        'sub_title',
        'text',
        'image',
        'active',
        'order',
    ];
}

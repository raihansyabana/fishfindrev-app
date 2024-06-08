<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mancing extends Model
{
    use HasFactory;

    protected $fillable = [
        'mancing_title',
        'image',
        'description',
        'price',
        'wifi',
        'mancing_type'
    ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'mancing_id',
        'name',
        'email',
        'phone',
        'start_date',
        'time_in',
        'time_out'
    ];

    public function mancing(){

        return $this->hasOne('App\Models\Mancing', 'id','mancing_id');
    }


}

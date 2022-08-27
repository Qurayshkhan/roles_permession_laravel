<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    //
    protected $fillable = ['user_id', 'booking_id', 'product_id', 'rating'];
    protected $table = ['rating'];
}

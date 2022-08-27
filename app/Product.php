<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
        protected $table = "products";
    
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}

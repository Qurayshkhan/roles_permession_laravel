<?php

namespace App\Http\Controllers\Admin;

use App\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Rating_controller extends Controller
{
    public function show($id) {
        $booking = Booking::find($id);
        $rating =  DB::table('rating')->where("booking_id", $id)->first();
        return view('admin.rating', compact('booking', 'rating'));
    }
}

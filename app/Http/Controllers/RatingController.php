<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RatingController extends Controller
{
    //
    public function show($id) {
        $booking = Booking::find($id);
        $rating =  DB::table('rating')->where("booking_id", $id)->first();
        return view('admin.rating', compact('booking', 'rating'));
    }
}

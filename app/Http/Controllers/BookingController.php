<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class BookingController extends Controller
{
    //
    public function index()
    {
        return view("auth.booking");
    }

    public function submit(Request $request)
    {
        
            $request->validate([
                "booking_date"=>"required",
                "description"=>"required",
            ]);
    
            $Booking=new Booking();  
            $Booking->booking_date=$request->booking_date;
            $Booking->description=$request->description;
            $Booking->save();
    
            $request->session()->flash("succesfully saved");
    
            return redirect('/home');
      }
       
      public function disp()
      {
          $bookings = auth()->user()->bookings;
        return view('auth.view_booking',['bookings'=>$bookings]);

      }

      public function mbook()
      {
          $halls = auth('manager')->user()->halls;
        return view('manager.manager_book',['halls'=>$halls]);

      }

      public function edit($id)
      {
          $booking = \App\Booking::find($id);
          return view('admin.booking.edit', compact('booking'));
      }
      public function update(Request $request, $id)
      {
          $booking=\App\Booking::find($id);
          $booking->booking_date = $request->booking_date;
          $booking->description = $request->description;
          $booking->update();

          return redirect()->back()->with("success", "Updated");
      }
      
      public function destroy(Request $request,$id)
      {
          $booking=\App\Booking::find($id);
          $booking->delete();

          return redirect()->back();
      }

      public function book()
      {
        $Booking = Booking::all();
        return view('admin.booking.index',['Booking'=>$Booking]);
        
      }
}

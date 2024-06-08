<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mancing;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\Gallery;

class DashboardController extends Controller
{
    public function mancing_details($id){

        $mancing = Mancing::find($id);

        return view('home.mancing_details',compact('mancing'));

    }

    public function add_booking(Request $request, $id){

        // $request->validate([

        //     'timeIn' => 'required|time',

        //     'timeOut' => 'time|after:timeIn'
        // ]);

        $data = new Booking;

        $data->mancing_id = $id;

        $data-> name = $request->name;

        $data-> email = $request->email;

        $data-> phone = $request->phone;

        $startDate = $request->startDate;

        $timeIn = $request->timeIn;

        $timeOut = $request->timeOut;

        $isBooked = Booking::where('mancing_id',$id)
        ->where('time_in','<=',$timeOut)->where('time_out','>=',$timeIn)->exists();

        if($isBooked){

            return redirect()->back()->with('message','Tempat telah dibooking');

        }else{

        $data-> start_date = $request->startDate;

        $data-> time_in = $request->timeIn;

        $data-> time_out = $request->timeOut;

        $data->save();

        return redirect()->back()->with('message','Booking Berhasil');


        }

    }

    public function contact(Request $request){

        $contact = new Contact;

        $contact->name = $request->name;

        $contact->email = $request->email;

        $contact->phone = $request->phone;

        $contact->message = $request->message;

        $contact->save();

        return redirect()->back()->with('message','Message Sended');

    }

    public function mancing_menu(){


        $mancing = Mancing::all();
        return view('home.mancing_menu',compact('mancing'));

    }

    public function gallery_mancing(){


        $gallery = Gallery::all();
        return view('home.gallery_mancing',compact('gallery'));

    }
    
    public function contact_us(){

        return view('home.contact_us');

    }

    public function maps(){

        return view('home.maps');

    }


}

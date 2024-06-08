<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Mancing;
use App\Models\Booking;
use App\Models\Gallery;
use App\Models\Contact;


class AdminController extends Controller
{
    public function index(){
            if(Auth::id()){

                $usertype = Auth()->user()->usertype;

                if($usertype =='user'){
                    
                    $mancing = Mancing::all();
                    $gallery = Gallery::all();

                    return view('home.index',compact('mancing','gallery'));
                }
                
                else if($usertype =='admin'){
                    return view('admin.index');
                }

                else{
                    return redirect()->back();
                }
                
            }
    }

    public function home(){

        $mancing = Mancing::all();

        $gallery = Gallery::all();

        return view('home.index',compact('mancing','gallery'));

    }

    public function create_mancing(){
        return view('admin.create_mancing');
    }

    public function add_mancing(Request $request){

        $data = new Mancing();

        $data->mancing_title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->wifi = $request->wifi;
        $data->mancing_type = $request->type;
        $image = $request->image;

        if($image){

            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('mancing',$imagename);

            $data->image=$imagename;

        }

        $data->save();

        return redirect()->back();

    }

    public function view_mancing(){

        $data = Mancing::all();

        return view('admin.view_mancing',compact('data'));
    }

    public function mancing_delete($id){

        $data = Mancing::find($id);

        $data->delete();

        return redirect()->back();

    }

    public function mancing_update($id){

        $data = Mancing::find($id);

        return view('admin.update_mancing',compact('data'));

    }

    public function edit_mancing(Request $request, $id){

        $data = Mancing::find($id);

        $data->mancing_title = $request-> title;
        $data->description = $request-> description;
        $data->price = $request-> price;
        $data->wifi = $request-> wifi;
        $data->mancing_type = $request-> type;
        $image = $request->image;

        if($image){

            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('mancing',$imagename);

            $data->image=$imagename;

        }

        $data->save();

        return redirect()->back();

    }


    public function bookings(){

        $data = Booking::all();

        return view('admin.booking',compact('data'));
    }

    public function delete_booking($id){

        $data = Booking::find($id);

        $data->delete();

        return redirect()->back();

    }

    public function view_gallery(){

        $gallery = Gallery::all();

        return view('admin.gallery',compact('gallery'));

    }

    public function upload_gallery(Request $request){

        $data = new Gallery;

        $image = $request->image;

        if($image){

            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('gallery',$imagename);

            $data->image = $imagename;

            $data->save();

            return redirect()->back();

        }

    }

    public function delete_gallery($id){

        $data = Gallery::find($id);

        $data->delete();

        return redirect()->back();

    }
    
    public function user_message(){

        $data = Contact::all();
        
        return view('admin.user_message',compact('data'));

    }

   
}

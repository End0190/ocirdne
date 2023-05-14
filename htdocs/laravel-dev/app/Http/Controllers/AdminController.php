<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    public function reservation(Request $request)
{
     $data = new reservation;



             $data->name=$request->name;

             $data->email=$request->email;

             $data->phone=$request->phone;

             $data->guest=$request->guest;

             $data->date=$request->date;

             $data->time=$request->time;

             $data->message=$request->message;
 
             $data->save();

             return redirect()->back();


 }

}


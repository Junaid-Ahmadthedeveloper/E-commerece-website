<?php

namespace App\Http\Controllers;

use App\Models\feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
   public function store(Request $request){
    $request->validate([
   "message" => "required",

    ]);
 $data = new feedback();
 $data->message  = $request->message;
 $data->save();
 return redirect()->route('dashboard')->with('message' ,'Thank for Submitting your Feedback...');

   }
}

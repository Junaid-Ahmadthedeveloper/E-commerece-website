<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\addtocart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddCartController extends Controller
{

public function add_cart($id){
    $data = product::find($id);
    return view('addtocart.addcart_form',['data' => $data]);
}


 public function add_cartstore(Request $request){

    $user = Auth::user();
    $data = new addtocart();
    $data->prduct_name = $request->name;
    $data->prduct_no = $request->product_no;
    if($user){
    $data->user_email = $user->email;
    $data->price = $request->price;
    $data->produc_id = $request->product_id;
    $data->save();
    return redirect()->route("welcome");
    }
    else{
        return redirect()->route('login');
    }

 }

 public function cart_show(){
    $data = addtocart::all();
    return view('addtocart.cart_tbl',['data' => $data]);
 }

 public function delete($id){
    $dlt = addtocart::find($id);
    $dlt->delete();
    return redirect()->back()->with('message' , 'Remove from Cart successfully');

 }
}

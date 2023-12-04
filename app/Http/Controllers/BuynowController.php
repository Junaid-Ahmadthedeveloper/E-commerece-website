<?php

namespace App\Http\Controllers;

use App\Models\buynow;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuynowController extends Controller
{
public function showform(Request $request,string $price){
    $data =buynow::find($price);
    // $idha = product::find($id);,'id' => $idha

    // Use $data and $price as needed

    return view('orders.order_form', ['data' => $data, 'price' => $price ]);

}
public function store(Request $request){
    $request->validate([
             "name" => "required",
             "email" => "required",
             "phone" => "required",
             "adress" => "required",
             "payement" => "required",

    ]);

    $data = new buynow();
    // $id = $request->product_id;
    // $dataupdate = product::find($id);
    // $quantity = $request->quantity;

    $selectedpayement = is_array($request->payement) ? $request->payement[0] : $request->payement;
    $user = Auth::user();

    $data->name = $request->name;
    $data->email = $request->email;
    $data->phone = $request->phone;
    $data->adress = $request->adress;
    $data->payement = $selectedpayement;
    $data->price = $request->price;
    if ($user) {
        $data->loginemail = $user->email;
        // $dataupdate->sold_products=$quantity;
        // $dataupdate->save();
        $data->save();

        return redirect()->route('welcome');
    } else
     {
        return redirect()->route('login');
}



}


public function show(){
    $data = buynow::all();
    return view('orders.order_tbl',['data' => $data]);
}

public function delete($id){
    $dlt = buynow::find($id);
    $dlt->delete();
    return redirect()->back()->with('message' , 'Order deleted Successfully...');
}
public function soldproducts(Request $request){
    $id = $request->id_sender;
    $update = Product::find($id); // Assuming 'Product' is your model name
    $update->sold_products = $request->quantity;
    $update->save();

    // Optionally, you can redirect the user to another page after the update
    return redirect()->back();
}
public function sold_show(){
    $data = product::where('sold_products' , '>' , 40)->get();
    return view('products_seprate_page.most_sold_products',['data' => $data]);
}
}

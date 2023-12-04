<?php

namespace App\Http\Controllers;

use App\Models\shopkeeper;
use Illuminate\Http\Request;

class ShopkeeperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    // }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         "first_name" => "required",
    //     "last_name" => "required",
    //     "email" => "required",
    //     "phone" => "required",
    //     "password" => "required",
    //     "store_name" => "required",
    //     "image" => "required|mimes:jpg,png,jpeg",
    //     "product_type" => "required",

    //     ]);

    //     $data = new shopkeeper();
    //     $imageName = microtime() . 'shopekeeper.' . $request->image->getClientOriginalExtension();
    //     $request->image->move(public_path('shopkeeper/images'), $imageName);


    //     $data->first_name = $request->first_name;
    //     $data->last_name = $request->last_name;
    //     $data->email = $request->email;
    //     $data->phone = $request->phone;
    //     $data->password = encrypt($request->password);
    //     $data->store_name = $request->store_name;
    //     $data->image = $imageName;
    //     $data->product_type = $request->product_type;
    //     $data->reg_no =  mt_rand(22222, 2354254654);
    //       $data->save();
    //       return redirect()->route('');
    // }

    /**
     * Display the specified resource.
     */
    // public function show(shopkeeper $shopkeeper)
    // {
    //     $data =shopkeeper::all();
    //     return view('adminpanel.shopkeeper.shopkeeper_tbl',['data' => $data]);

    // }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(shopkeeper $shopkeeper)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, shopkeeper $shopkeeper)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
//     public function destroy(shopkeeper $shopkeeper)
//     {
//         //
//     }
}

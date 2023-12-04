<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('adminpanel.products.addproduct');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
          'name' => 'required',
          'type' => 'required',
          'file' => 'required|mimes:jpg,png,jped,pdf',
          'price' => 'required',
          'category' => 'required|array',
          'description' => 'required',
       ]);

       $data = new product();
       $imagename = microtime() . 'product.' . $request->file->getClientOriginalExtension();
       $request->file->move(public_path('product\images'), $imagename);

       $selectedCategory = is_array($request->category) ? $request->category[0] : $request->category;

       $data->name = $request->name;
       $data->type = $request->type;
       $data->image = $imagename;
       $data->price = $request->price;
       $data->category = $selectedCategory;
       $data->description = $request->description;
       $data->product_no =  mt_rand(22222, 2354254654);
    //    $categories = $request->input('category');
    //    $data->categories()->attach($categories);

       $data->save();
        return redirect()->route('logged.in');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = product::find($id);
        return view('adminpanel.products.update_form',['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'file' => 'required|mimes:jpg,png,jpeg',
            'price' => 'required',
            'category' => 'required',
            'description' => 'required',
        ]);
    $data = product::find($id);
    if($request->hasFile('file')){
        $publicpath= public_path("/product/images/{$data->image}");
        if(file_exists($publicpath)){
            unlink($publicpath);
        }
        $imagename = microtime() . 'products'.$request->file->getClientOriginalExtension();
        $request->file->move(public_path('product\images'),$imagename);
    }


    $electcategory= is_array($request->category) ? $request->category[0] : $request->ctegory;
    $data->name = $request->name;
    $data->type = $request->type;
    $data->product_no = mt_rand(123456654,2345654324);
    $data->image = $imagename;
    $data->price = $request->price;
    $data->category = $electcategory;
    $data->description = $request->description;
    $data->save();
    return redirect()->route('logged.in');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $dlt = product::find($id);
           $publicPath = public_path("/product/images/{$dlt->image}");
        if (file_exists($publicPath)) {
            unlink($publicPath);
        }
          $dlt->delete();
          return redirect()->back();
    }


    public function electrical(){
        $data = product::where('category' , 'Electronics')->get();
        return view('adminpanel.products.electical_tbl',['data' => $data]);
    }


    public function clothes(){
        $data = product::where('category' , 'Clothes')->get();
        return view('adminpanel.products.clothes_tbl',['data' => $data]);
    }

    public function jewlery(){
        $data = product::where('category' , 'Jewlery')->get();
        return view('adminpanel.products.jwelery_tbl',['data' => $data]);
    }

    public function toy(){
        $data = product::where('category' , 'Toys')->get();
        return view('adminpanel.products.toys_tbl',['data' => $data]);
    }
    public function showsingle_product($id){
        $data = product::find($id);
        return view('adminpanel.products.showsingle_product',['data' => $data]);
    }




    // seprate page sfunctions

    public function clothes_seprate(){
        $data = product::where('category' , 'Clothes')->get();
        return view('products_seprate_page.clothes_seprate_page',['data' => $data]);
    }
    public function jewlery_seprate(){
        $data = product::where('category' , 'Jewlery')->get();
        return view('products_seprate_page.jewlery_seprate_page',['data' => $data]);
    }

    public function toys_seprate(){
        $data = product::where('category' , 'Toys')->get();
        return view('products_seprate_page.toys_seprate_page',['data' => $data]);
    }

    public function electronics_seprate(){
        $data = product::where('category' , 'Electronics')->get();
        return view('products_seprate_page.electronics_seprate_page',['data' => $data]);
    }
    public function showLatestProducts()
    {
        $productModel = new product();
        $latestProducts = $productModel->getLatestProducts();

        // Now $latestProducts contains the latest products added in the last 3 days

        return view('products_seprate_page.latest_products_pade', ['latestProducts' => $latestProducts]);
    }
}

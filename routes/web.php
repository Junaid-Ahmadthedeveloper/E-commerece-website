<?php

use App\Http\Controllers\AddCartController;
use App\Http\Controllers\BuynowController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopkeeperController;
use App\Models\buynow;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('web');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Search routeeeeeeeeeeeeeeeeeeeeeeee

Route::post('/search',[ProfileController::class,'search'])->name('search');


// Login Routeeeeeeeeeeeeeeeeeeeee

Route::get('logged.in',[ProfileController::class, 'logged'])->name('logged.in');
Route::get('user_table',[ProfileController::class,'user_table'])->name('user_table');

Route::prefix('/user')->group(function (){
Route::get('/delete/{id}',[ProfileController::class,'delete'])->name('deleteuser');

});


// USer Grouppppppppppppppppppppppppppp

Route::prefix('/User')->group( function(){
Route::get('contact/us',[ProfileController::class,'show_contactpage'])->name('contact_page');
Route::get('about/us',[ProfileController::class,'show_aboutpage'])->name('about_page');
});


// Product Groupsssssssssssssssssssssss

Route::prefix('/product')->group(function (){
    Route::get('/add',[ProductController::class,'index'])->name('add_products');
    Route::post('/store',[ProductController::class,'store'])->name('product_store');
    Route::get('/delete/{id}',[ProductController::class,'delete'])->name('deleteproduct');
    Route::get('/edit/{id}',[ProductController::class,'edit'])->name('editproduct');
    Route::post('/update/{id}',[ProductController::class,'update'])->name('update_product');
    Route::get('/electrical',[ProductController::class,'electrical'])->name('electical_store');
    Route::get('/clothes',[ProductController::class,'clothes'])->name('clothes_store');
    Route::get('/jewlery',[ProductController::class,'jewlery'])->name('jewlery_store');
    Route::get('/toy',[ProductController::class,'toy'])->name('toy_store');
    Route::get('/deletproduct/{id}',[ProductController::class,'destroy'])->name('deletproduct');
    Route::get('/showsingle/produc/{id}',[ProductController::class,'showsingle_product'])->name('showsingle_product');

    });


   Route::prefix('/order')->group( function(){
   Route::get('/show/form/{price}',[BuynowController::class,'showform'])->name('showform');
   Route::post('/place_order',[BuynowController::class,'store'])->name('place_order');
   Route::get('/order_tbl',[BuynowController::class,'show'])->name('order_tbl');
   Route::get('/delete/{id}',[BuynowController::class,'delete'])->name('delete_order');
   Route::post('/sold_products/submit',[BuynowController::class,'soldproducts'])->name('sold_products_submit');
   Route::get('/high/sold',[BuynowController::class,'sold_show'])->name('sold_show');

    });


Route::prefix('/add_cart')->group( function(){
 Route::get('/add_cartp/{id}',[AddCartController::class,'add_cart'])->name('add_cart');
Route::post('/add_cartstore',[AddCartController::class,'add_cartstore'])->name('add_cartstore');
Route::get('/cart_tbl',[AddCartController::class,'cart_show'])->name('cart_tbl');
Route::get('/delete{id}',[AddCartController::class,'delete'])->name('deletecart');

});

Route::prefix('/sepratepages')->group( function(){
Route::get('/clothes/details',[ProductController::class,'clothes_seprate'])->name('seprate_clothes_page');
Route::get('/jewlery/details',[ProductController::class,'jewlery_seprate'])->name('seprate_jewlery_page');
Route::get('/toys/details',[ProductController::class,'toys_seprate'])->name('seprate_toys_page');
Route::get('/electronics/details',[ProductController::class,'electronics_seprate'])->name('seprate_electronics_page');
Route::get('/latest/details',[ProductController::class,'showLatestProducts'])->name('latest_products_page');
});


Route::post('/feedback',[FeedbackController::class,'store'])->name('feedback');














// Route::prefix('/shopkeeper')->group( function() {
// Route::post('/reg',[ShopkeeperController::class,"store"])->name('shopkeeper_reg');
// Route::get('/show',[ShopkeeperController::class ,"show"])->name('shopkeeper_show');

// });


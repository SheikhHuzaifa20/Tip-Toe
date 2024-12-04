<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\loginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class, 'index'])->name('index');
Route::get('/about',[HomeController::class, 'about'])->name('about');
Route::get('/testimonials',[HomeController::class, 'testimonials'])->name('testimonials');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');
Route::post('contact-us',[HomeController::class, 'contactus'])->name('contact-us');
Route::get('/blog',[HomeController::class, 'blog'])->name('blog');
Route::get('/privacy-policy',[HomeController::class, 'privacy_policy'])->name('privacy-policy');

Route::get('view_product', [ProductController::class, 'view_product'])->name('view_product');
Route::get('add_product',[ProductController::class, 'add_product'])->name('add_product');
Route::post('add_product',[ProductController::class, 'store_product'])->name('add_product.store');
Route::delete('/product/delete/{id}',[ProductController::class, 'product_destroy'])->name('delete_product');
Route::get('/product/edit/{id}',[ProductController::class, 'edit'])->name('edit_product');
Route::post('/product/update/{id}',[ProductController::class, 'update'])->name('update_product');

Route::get('/product-detail/{id}', [ProductController::class, 'product_detail'])->name('productdetail');
Route::post('/cartAdd', [CartController::class, 'saveCart'])->name('save_cart');

Route::get('add_banners',[HomeController::class, 'Banner'])->name('add_banners');
Route::post('add_banners',[HomeController::class, 'store_banners'])->name('add_banners.store');

Route::get('cloth',[HomeController::class, 'cloth'])->name('cloth');
Route::get('gold',[HomeController::class, 'gold'])->name('gold');
Route::get('shoes',[HomeController::class, 'shoes'])->name('shoes');
Route::get('fancy',[HomeController::class, 'fancy'])->name('fancy');
Route::get('Undergarments',[HomeController::class, 'Undergarments'])->name('Undergarments');
Route::get('bags',[HomeController::class, 'bags'])->name('bags');
Route::get('frock',[HomeController::class, 'frock'])->name('frock');

Route::get('/cart',[CartController::class, 'cart'])->name('cart');
Route::post('/cartAdd', [CartController::class, 'saveCart'])->name('save_cart');
Route::any('/remove-cart/{id}', [CartController::class, 'removeCart'])->name('remove_cart');
Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');

Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('order.place');

Route::get('signup/{id?}',[LoginController::class, 'signup'])->name('signup');
Route::get('/signin', [LoginController::class, 'signin'])->name('signin');
Route::get('signout', function() {
    Auth::logout();
    Session::flash('flash_message', 'You have logged out  Successfully');
    Session::flash('alert-class', 'alert-success');
    return redirect('signin');
});
Route::post('register/{id?}',[LoginController::class, 'register'])->name('register');
Route::post('/signout', function () {
    Auth::logout();
    return redirect('/signin')->with('success', 'You have successfully signed out!');
})->name('signout');
Route::post('/login', [LoginController::class, 'login'])->name('login');


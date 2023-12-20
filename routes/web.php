<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthenticationController as auth;
use App\Http\Controllers\Backend\UserController as user;
use App\Http\Controllers\Backend\Product\Catagories\CatagoriesController as catagories;
use App\Http\Controllers\Backend\DashboardController as dashboard;
use App\Http\Controllers\Backend\PermissionController as permission;
use App\Http\Controllers\Backend\RoleController as role;
use App\Http\Controllers\Backend\CatagoryController as catagory;
use App\Http\Controllers\Backend\ItemController as item;
use App\Http\Controllers\Backend\KitchenController as kitchen;
use App\Http\Controllers\Backend\Kitchen_catagoryController as kitchen_catagory;
use App\Http\Controllers\Backend\Item_varientController as item_varient;
use App\Http\Controllers\Backend\OrderController as order;
use App\Http\Controllers\Backend\CustomerController as customer;
use App\Http\Controllers\Backend\Order_paymentController as payment;
use App\Http\Controllers\Backend\Purches_paymentController as Purches;
use App\Http\Controllers\Backend\Row_itemController as row_item;
use App\Http\Controllers\Backend\StockController as stock;
use App\Http\Controllers\Backend\UnitController as unit;
use App\Http\Controllers\Backend\PurchesController as purchese;
use App\Http\Controllers\Backend\Purches_detailController as purchese_detail;
use App\Http\Controllers\Backend\SupplierController as supplier;
use App\Http\Controllers\Backend\Purches_itemController as purches_item;
use App\Http\Controllers\Backend\WaiterController as waiter;
use App\Http\Controllers\Backend\BookingtableController as bookings;
use App\Http\Controllers\Backend\FrontendbookingController as frontend_booking;
use App\Http\Controllers\Backend\ProductController as addproduct;
use App\Http\Controllers\Backend\CartController;
use App\Http\Controllers\Backend\OrderlistController  as orderlist;




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

Route::get('/register', [auth::class,'signUpForm'])->name('register');
Route::post('/register', [auth::class,'signUpStore'])->name('register.store');
Route::get('/login', [auth::class,'signInForm'])->name('login');
Route::post('/login', [auth::class,'signInCheck'])->name('login.check');
Route::get('/logout', [auth::class,'singOut'])->name('logOut');

Route::middleware(['checkauth'])->prefix('admin')->group(function(){
Route::get('dashboard', [dashboard::class,'index'])->name('dashboard');
Route::get('get_varient', [order::class,'get_varient'])->name('get_varient');
});

Route::post('fontendbookings',[frontend_booking::class,'store'])->name('fontendbookings.save');

Route::middleware(['checkrole'])->prefix('admin')->group(function(){
    Route::resource('user', user::class);
    Route::resource('role', role::class);
    Route::get('permission/{role}', [permission::class,'index'])->name('permission.list');
    Route::post('permission/{role}', [permission::class,'save'])->name('permission.save');
    Route::resource('catagories', catagory::class);
    Route::resource('items', item::class);
    Route::resource('kitchens', kitchen::class);
    Route::resource('kitchen_catagories',kitchen_catagory::class);
    Route::resource('item_varients',item_varient::class);
    Route::resource('orders',order::class);
    Route::resource('customers',customer::class);
    Route::resource('order_payments',payment::class);
    Route::resource('purches_payments',Purches::class);
    Route::resource('row_items',row_item::class);
    Route::resource('stocks',stock::class);
    Route::resource('units',unit::class);
    Route::resource('purcheses',purchese::class);
    Route::resource('purches_details',purchese_detail::class);
    Route::resource('suppliers',supplier::class);
    Route::resource('purches_items',purches_item::class);
    Route::resource('waiters',waiter::class);
    Route::resource('bookingtables',bookings::class);
    Route::resource('fontendbookings',frontend_booking::class);
    Route::resource('products',addproduct::class);
    Route::resource('orderlists',orderlist::class);

});


Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('shop', [addproduct::class, 'frontIndex'])->name('noman');


Route::get('/shop', function () {
    return view('frontend.shop');
})->name('shop');

Route::get('/shopdetails', function () {
    return view('frontend.shopdetails');
})->name('shopdetails');

Route::get('/cart', function () {
    return view('frontend.cart');
})->name('cart');


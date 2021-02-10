<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;


Route::resource('/products', ProductController::class);
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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home',  [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
Route::get('/admin', function (){
    return 'you are admin';
})->middleware(['auth', 'auth.admin', 'verified']);

/*Route::get('/admin/users/index',  [App\Http\Controllers\Admin\UsersController::class, 'index'])->name('admin.users.index');
Route::get('/admin/edit/{id}',  [App\Http\Controllers\Admin\UsersController::class, 'edit'])->name('admin.users.edit');
Route::get('/admin/destroy/{id}',  [App\Http\Controllers\Admin\UsersController::class, 'destroy']);
*/
//Admin route
Route::prefix('admin')->name('admin.')->group(function(){
    Route::resource('/admin/users',App\Http\Controllers\Admin\UsersController::class);
});
// Les routes de gestion du panier
Route::get('basket',[App\Http\Controllers\BasketController::class,'show'])->name('basket.show');
Route::post('basket/add/{product}', [App\Http\Controllers\BasketController::class,'add'])->name('basket.add');
Route::get('basket/remove/{product}', [App\Http\Controllers\BasketController::class,'remove'])->name('basket.remove');
Route::get('basket/empty', [App\Http\Controllers\BasketController::class,'empty'])->name('basket.empty');

Route::get('/anti-covid',[App\Http\Controllers\ProductController::class,'index_cli']) ;
Route::get('/medecines',[App\Http\Controllers\ProductController::class,'index_cli1']) ;
Route::get('/selfcare',[App\Http\Controllers\ProductController::class,'index_cli2']) ;
Route::get('/health',[App\Http\Controllers\ProductController::class,'index_cli3']) ;
Route::get('/mombaby',[App\Http\Controllers\ProductController::class,'index_cli4']) ;
Route::get('/vitamins',[App\Http\Controllers\ProductController::class,'index_cli5']) ;

Route::post('/cart',[App\Http\Controllers\CartController::class,'getCart']) ;

Route::group(['middleware' => ['auth']], function () {
    Route::post('/checkout', [App\Http\Controllers\CheckoutController::class,'getCheckout'])->name('checkout.index');
    Route::post('/checkout/order', [App\Http\Controllers\CheckoutController::class,'placeOrder'])->name('checkout.place.order');
});
Route::get('checkout/payment/complete', 'CheckoutController@complete')->name('checkout.payment.complete');
Route::get('account/orders', 'AccountController@getOrders')->name('account.orders');

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
Route::get('/anti-covid',[App\Http\Controllers\ProductController::class, 'index_cli']) ;


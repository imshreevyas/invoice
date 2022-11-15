<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;

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
    return view('welcome');
});


Route::prefix('vendor')->group(function () {
    Route::get('/login',[VendorController::class,'login']);
    Route::get('/register',[VendorController::class,'regsiter']);
    Route::get('/forgotpass',[VendorController::class,'forgotpass']);
    Route::get('/dashboard',[VendorController::class,'index']);
    Route::get('/profile',[VendorController::class,'index']);
    Route::get('/invoices',[VendorController::class,'index']);
    Route::get('/addInvoice',[VendorController::class,'index']);
    Route::get('/editInvoice/${1}',[VendorController::class,'index']);
    Route::get('/support',[VendorController::class,'index']);
    Route::get('/addSupport',[VendorController::class,'index']);
    Route::get('/logout',[VendorController::class,'index']);
    
    // Post Routes
    Route::post('/validate_vendor',[VendorController::class,'index']);
    Route::post('/update_profile',[VendorController::class,'index']);
    Route::post('/add_invoice',[VendorController::class,'index']);
    Route::post('/edit_invoice',[VendorController::class,'index']);
    Route::post('/add_support_ticket',[VendorController::class,'index']);
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard',[VendorController::class,'index']);
});
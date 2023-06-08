<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo;
use App\Http\Controllers\Registration;
use App\Http\Controllers\Customer;
use App\Models\Customers;
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


Route::get('/',function(){
    return view('index');
});

Route::get('/register',[Registration::class,'index']);

Route::post('/register',[Registration::class,'register']);

Route::get('/customer/create',[Customer::class,'index']);

Route::post('/customer',[Customer::class,'store']);

Route::get('/customer/view',[Customer::class,'view']);
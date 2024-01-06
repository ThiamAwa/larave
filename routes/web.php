<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\masterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\registerController;

use Illuminate\Support\Facades\Route;

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
    return view('master');
});



 Route::match(['get','post'],'/master',[masterController::class,'master'])->middleware('auth')->name('master');
// Route::match(['get','post'],'/register',[registerController::class,'register'])->name('app_register');

Route::get('/logout',[loginController::class,'logout'])->name('logout');


// Route::post('/exist_email',[loginController::class,'existeEmail'])->name('email');


<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\masterController;
use App\Http\Controllers\loginController;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::match(['get','post'],'/master',[masterController::class,'master'])->middleware('auth')->name('master');

Route::get('/home',[HomeController::class,'index']);
Route::get('/logout',[loginController::class,'logout'])->name('logout');

//Candidat
Route::get('/listeC',[App\Http\Controllers\CandidatController::class,'index'])->name('listeC');

Route::get('/addC',[App\Http\Controllers\CandidatController::class,'create'])->name('ajoutCandidat');

Route::post('/storeC',[App\Http\Controllers\CandidatController::class,'store'])->name('storeCandidat');

Route::delete('/deleteCandidat/{id}',[\App\Http\Controllers\CandidatController::class,'destroy'])->name('deleteCandidat');

// Route::get('/updateCandidat/{id}',[\App\Http\Controllers\CandidatController::class,'edit'])->name('updateCandidat');

Route::put('/mjCandidat/{id}',[\App\Http\Controllers\CandidatController::class,'update'])->name('mjCandidat');
Route::post('/edit',[\App\Http\Controllers\CandidatController::class,'edit']);


//Programme
Route::resource('/programme',\App\Http\Controllers\ProgrammeController::class);

Route::get('/listeP',[App\Http\Controllers\ProgrammeController::class,'index2'])->name('listeP');

Route::get('/secteur',[App\Http\Controllers\sondageController::class,'index'])->name('secteur');
Route::resource('/sondage',App\Http\Controllers\sondageController::class);

Route::get('/UserElect', [App\Http\Controllers\UserelectController::class,'index'])->name('UserElect');

Route::get('/ProgrammeCandidat/{id}',[App\Http\Controllers\ProgrammeCandidatController::class,'index'])->name('programmeCandidat');

require __DIR__.'/auth.php';

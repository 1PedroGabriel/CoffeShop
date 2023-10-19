<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\productController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route::middleware--------------------
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
  
});
    
//Route::Controllers--------------------
Route::controller(menuController::class)->group(function () {    

    Route::get('/menu', 'index');
    Route::get('/menu/show', 'show');

});

Route::controller(homeController::class)->group(function () {

    Route::get('/home', 'index'); 

});


require __DIR__.'/auth.php';

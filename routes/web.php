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


//Route::middleware--------------------
Route::middleware('auth')->group(function () {

    Route::get('/profile/edit', [ProfileController::class, 'edit']);
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::controller(menuController::class)->group(function () {    

        Route::get('/menu', 'index');
        Route::get('/menu/show/{id}', 'show')->name("menu.show");
        
    });
  
});
    
//Route::Controllers--------------------


Route::controller(homeController::class)->group(function () {

    Route::get('/dashboard', 'index')->name('dashboard');


});

Route::controller(aboutController::class)->group(function () {

    Route::get('/sobre', 'index');
});




require __DIR__.'/auth.php';

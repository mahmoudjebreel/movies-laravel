<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Backend\CategoryController;
use \App\Http\Controllers\Backend\RoleController;

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

//Route::get('/', function () {
//    return view('backend.dashboard');
//});

//Route::get('/dashboard', function () {
//    return view('backend.dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
Route::prefix('/dashboard')->middleware(['auth', 'verified','role:super_admin|admin'])->group(function (){
    Route::view('/','backend.dashboard')->name('dashboard');
    Route::resource('/categories',CategoryController::class);
    Route::resource('/roles',RoleController::class)->except(['show']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


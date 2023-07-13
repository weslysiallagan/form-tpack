<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KomponenController;
use App\Http\Controllers\SesiController;
use App\Models\Komponen;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['guest'])->group(function(){
    Route::get('/',[SesiController::class,'index'])->name('login');

    Route::post('/',[SesiController::class,'login']);

    Route::get('/register',[SesiController::class,'register']);

    Route::post('/create',[SesiController::class,'create']);

});

Route::get('/home',function() {
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function() {
    Route::get('/admin/tabelpertanyaan',[AdminController::class,'tabelPertanyaan']);
    // Route::post('/admin/tabelpertanyaan',[AdminController::class,'tabelPertanyaan']);
    Route::post('/admin/tabelpertanyaan',[App\Http\Controllers\AdminController::class,'store']);
    // Route::post('/admin/tabelpertanyaan',[AdminController::class])->name('admin.tabelpertanyaan');
    Route::get('/komponen/getAllKomponen', [AdminController::class, 'getAllKomponen']);
    Route::get('/admin/dashboard',[AdminController::class,'skor']);
    Route::get('/admin/komponen',[AdminController::class,'listKomponen']);
    Route::get('/user',[AdminController::class,'user'])->middleware('userakses:user');
    Route::resource('/komponen',KomponenController::class);
    Route::get('/admin',[AdminController::class,'admin'])->middleware('userakses:admin');
    Route::get('/logout',[SesiController::class,'logout']);
});


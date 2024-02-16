<?php


use App\Http\Controllers\ResourceController;
use App\Models\Resource;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TypeController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('home');
});
Route::get('/resource', [ResourceController::class,'index'])->name('resource.index');
Route::get('/resource/create', [ResourceController::class,'create'])->name('resource.create');
Route::post('/resource/store', [ResourceController::class,'store'])->name('resource.store');
Route::get('/resource/show/{resource}',[ResourceController::class, 'show'])->name('resource.show');
Route::get('/resource/edit/{resource}', [ResourceController::class,'edit'])->name('resource.edit');
Route::put('/resource/update/{resource}',[ResourceController::class, 'update'])->name('resource.update');
Route::delete('/resource/destroy/{resource}',[ResourceController::class, 'destroy'])->name('resource.destroy');

















Route::get('/type', [TypeController::class,'index'])->name('type.index');
Route::get('/type/create', [TypeController::class,'create'])->name('type.create');
Route::post('/type/store', [TypeController::class,'store'])->name('type.store');
Route::get('/type/show/{type}',[TypeController::class, 'show'])->name('type.show');
Route::get('/type/edit/{type}', [TypeController::class,'edit'])->name('type.edit');
Route::put('/type/update/{type}',[TypeController::class, 'update'])->name('type.update');
Route::delete('/type/destroy/{type}',[TypeController::class, 'destroy'])->name('type.destroy');
<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ResourceController;
use App\Models\Resource;
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










Route::get('/category', [CategoryController::class,'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class,'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class,'store'])->name('category.store');
Route::get('/category/show/{category}',[CategoryController::class, 'show'])->name('category.show');
Route::get('/category/edit/{category}', [CategoryController::class,'edit'])->name('category.edit');
Route::put('/category/update/{category}',[CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/destroy/{category}',[CategoryController::class, 'destroy'])->name('category.destroy');
<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ResourceController;
use App\Models\Resource;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExtraResourceController;


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

Route::get('/resource', [ResourceController::class, 'index'])->name('resource.index');
Route::get('/resource/create', [ResourceController::class, 'create'])->name('resource.create');
Route::post('/resource/store', [ResourceController::class, 'store'])->name('resource.store');
Route::get('/resource/show/{resource}', [ResourceController::class, 'show'])->name('resource.show');
Route::get('/resource/edit/{resource}', [ResourceController::class, 'edit'])->name('resource.edit');
Route::put('/resource/update/{resource}', [ResourceController::class, 'update'])->name('resource.update');
Route::delete('/resource/destroy/{resource}', [ResourceController::class, 'destroy'])->name('resource.destroy');

Route::get('/extraResource', [ExtraResourceController::class, 'index'])->name('extraResource.index');
Route::get('/extraResource/create', [ExtraResourceController::class, 'create'])->name('extraResource.create');
Route::post('/extraResource/store', [ExtraResourceController::class, 'store'])->name('extraResource.store');
Route::get('/extraResource/show/{extraResource}', [ExtraResourceController::class, 'show'])->name('extraResource.show');
Route::get('/extraResource/edit/{extraResource}', [ExtraResourceController::class, 'edit'])->name('extraResource.edit');
Route::put('/extraResource/update/{extraResource}', [ExtraResourceController::class, 'update'])->name('extraResource.update');
Route::delete('/extraResource/destroy/{extraResource}', [ExtraResourceController::class, 'destroy'])->name('extraResource.destroy');

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/show/{category}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/update/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/destroy/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
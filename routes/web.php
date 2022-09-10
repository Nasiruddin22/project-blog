<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
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


Route::get('/',[FrontendController::class,'index'])->name('front.index');

route::group(['middleware'=>'auth','prefix'=>'dashboard'],function(){

    Route::get('/',[BackendController::class,'index'])->name('back.index');
    Route::get('category/create',[CategoryController::class,'create'])->name('category.create');
    Route::post('category',[CategoryController::class,'store'])->name('category.store');
    Route::get('category',[CategoryController::class,'index'])->name('category.index');
    Route::get('category/{category}',[CategoryController::class,'show'])->name('category.show');
    Route::get('category/{category}/edit',[CategoryController::class,'edit'])->name('category.edit');
    Route::put('category/{category}',[CategoryController::class,'update'])->name('category.update');
    Route::delete('category/{category}',[CategoryController::class,'destroy'])->name('category.destroy');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

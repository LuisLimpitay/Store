<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SaleController;
use App\Http\Controllers\Admin\TurnController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;



Route::get('/pruebas', function () {
    /* $knownDate = Carbon::create(2021, 7, 21, 12);          // create testing date
    Carbon::setTestNow($knownDate);                        // set the mock
    $manana = new Carbon('tomorrow'); */
    $h = Carbon::today();
    dd($h);
     
    //echo new Carbon('next wednesday');   
});
Route::get('/', [HomeController::class, 'index'])->name('admin.index');

Route::resource('sales', SaleController::class)->names('admin.sales');


Route::resource('categories', CategoryController::class)->names('admin.categories');
Route::resource('products', ProductController::class)->names('admin.products');
Route::resource('turns', TurnController::class)->names('admin.turns');

Route::resource('users', UserController::class)->only(['index','edit','update'])->names('admin.users');
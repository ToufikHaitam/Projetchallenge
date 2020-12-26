<?php

use App\Http\Controllers\ProductController;
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


// Route to get user information
Route::group(['prefix' => 'product'], function () {

    Route::get('/', [ProductController::class, 'index']);
    Route::get('product/{id}', [ProductController::class, 'finding']);
    Route::get('product/delete/{id}', [ProductController::class, 'deleting']);
    Route::get('/product/filter', [ProductController::class, 'filtrated']);
    Route::post('/product/save', [ProductController::class, 'save']);
});

Route::group(['prefix' => 'category'], function () {

    Route::get('/', [\App\Http\Controllers\CategoryController::class, 'index']);

});




Route::get('{any}', function () {
    return view('home');
})->where('any', '.*');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

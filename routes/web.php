<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('products.show');
// });

//Auth::routes();

Route::get('/', [ProductController::class, 'index']);
Route::get('/sell/{id}', [ProductController::class, 'Sell_view'])->name('product_sell');
Route::get('/sale_report', [SaleController::class, 'show'])->name('sale_report');
Route::post('/sell_item/{id}', [ProductController::class, 'Sell_data'])->name('product_sell_data');

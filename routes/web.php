<?php

use App\Http\Controllers\Invoice;
use App\Http\Controllers\menu\MenuCatalogue;
use App\Http\Controllers\menu\MenuGrid;
use App\Http\Controllers\menu\MenuList;
use App\Http\Controllers\Orders;
use App\Http\Controllers\Products;
use App\Http\Controllers\Restaurant;
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

Route::get('/', function () {
    return view('pages.dashboard');
});

// Menu Routes
Route::prefix("menu")->group(function (){
   Route::get("/catalogue", [MenuCatalogue::class, "index"])->name("menu-catalogue");
   Route::get("/list", [MenuList::class, "index"])->name("menu-list");
   Route::get("/grid", [MenuGrid::class, "index"])->name("menu-grid");
   Route::prefix("product")->group(function (){
       Route::get("/add", [Products::class, "showProductAddPage"]);
       Route::post("/add", []);
       Route::get("/update", []);
       Route::post("/update", []);
   });
});

Route::get("/orders", [Orders::class, "index"])->name("orders");
Route::get('restaurants', [Restaurant::class, 'index'])->name('restaurants');
Route::get('invoice', [Invoice::class, 'index'])->name('invoice');
Route::get('invoice/{id}', [Invoice::class, 'showInvoiceDetails'])->name('invoice');

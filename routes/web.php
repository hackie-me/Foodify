<?php

use App\Http\Controllers\app\Chat;
use App\Http\Controllers\app\Email;
use App\Http\Controllers\app\Notes;
use App\Http\Controllers\app\Todo;
use App\Http\Controllers\Customer;
use App\Http\Controllers\Invoice;
use App\Http\Controllers\menu\MenuCatalogue;
use App\Http\Controllers\menu\MenuGrid;
use App\Http\Controllers\menu\MenuList;
use App\Http\Controllers\Orders;
use App\Http\Controllers\Products;
use App\Http\Controllers\Restaurant;
use App\Http\Controllers\Review;
use App\Http\Controllers\Sales;
use App\Http\Controllers\Social;
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
Route::prefix("menu")->group(function () {
    Route::get("/catalogue", [MenuCatalogue::class, "index"])->name("menu-catalogue");
    Route::get("/list", [MenuList::class, "index"])->name("menu-list");
    Route::get("/grid", [MenuGrid::class, "index"])->name("menu-grid");
    Route::prefix("product")->group(function () {
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

Route::get('/customers', [Customer::class, 'index']);
Route::get('/reviews', [Review::class, 'index']);
Route::get('/socials', [Social::class, 'index']);
Route::get('/sales', [Sales::class, 'index']);

Route::prefix('app')->group(function () {
    Route::get('/email', [Email::class, 'index']);
    Route::get('/chat', [Chat::class, 'index']);
    Route::get('/todo', [Todo::class, 'index']);
});

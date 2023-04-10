<?php

use App\Http\Controllers\app\Chat;
use App\Http\Controllers\app\Email;
use App\Http\Controllers\app\Todo;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\Customer;
use App\Http\Controllers\FAQ;
use App\Http\Controllers\Invoice;
use App\Http\Controllers\menu\MenuCatalogue;
use App\Http\Controllers\menu\MenuGrid;
use App\Http\Controllers\menu\MenuList;
use App\Http\Controllers\Orders;
use App\Http\Controllers\Products;
use App\Http\Controllers\Restaurant;
use App\Http\Controllers\Review;
use App\Http\Controllers\Sales;
use App\Http\Controllers\Settings;
use App\Http\Controllers\Social;
use App\Mail\ComposeMail;
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

Route::middleware(['auth:sanctum', 'verified', 'quick.bar.data'])->group(function () {
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
    Route::get('/faq', [FAQ::class, 'index']);

    Route::prefix('app')->group(function () {
        Route::prefix('email')->group(function () {
            Route::get('/', [Email::class, 'index']);
            Route::get('/folder/{folder_name}', [Email::class, 'getFolderEmails'])->name('get-folder-emails');
            Route::get('/email/{id}', [Email::class, 'getEmail'])->name('get-email');
            Route::get('/email/mark-as-read/{id}', [Email::class, 'markAsRead'])->name('mark-as-read');
            Route::get('/email/mark-as-archive/{id}', [Email::class, 'markAsArchive'])->name('mark-as-archive');
            Route::post('/send', [Email::class, 'sendEmail'])->name('send-email');
            Route::get('/delete/{id}', [Email::class, 'deleteEmail'])->name('delete-email');
            Route::get('/delete/{contactId}', [Email::class, 'deleteContact'])->name('delete-contact');
        });
        Route::get('/chat', [Chat::class, 'index']);
        Route::prefix('todo')->group(function () {
            Route::get('/', [Todo::class, 'index']);
            Route::get('/remove-all-completed', [Todo::class, 'removeCompletedTodoBlocks']);
            Route::get('/remove-all', [Todo::class, 'removeAll']);
        });
    });

    // Routes for settings
    Route::prefix('settings')->group(function () {
        Route::get('/', [Settings::class, 'index']);
        // profile, email,
        Route::post('/profile', [Settings::class, 'updateProfile']);
        Route::post('/email', [Settings::class, 'updateEmail']);

    });
});


Route::get('/maintenance', function () {
    return view('pages.maintenance');
});

Route::prefix('auth')->group(function () {
    Route::get('/login', [Authentication::class, 'viewLoginPage'])->name('login');
    Route::post('/login', [Authentication::class, 'doLogin']);
    Route::get('/register', [Authentication::class, 'viewRegistrationPage'])->name('register');
    Route::post('/register', [Authentication::class, 'doRegister']);
    Route::get('/lockscreen', [Authentication::class, 'viewLockscreenPage'])->name('lockscreen');
    Route::get('/logout', [Authentication::class, 'doLogout']);
});

// Prefix test routes
Route::prefix('test')->group(function () {
    Route::get('/', function () {
        // die('Test route');
    });
    Route::get('/email', function () {
        Mail::to('cofil41630@fectode.com')->send(new ComposeMail('Test Subject', 'Test Body', ''));
    });
});

<?php

use App\Http\Controllers\app\Chat;
use App\Http\Controllers\app\Email;
use App\Http\Controllers\app\Todo;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\menu\MenuCatalogue;
use App\Http\Controllers\menu\MenuGrid;
use App\Http\Controllers\menu\MenuList;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SocialController;
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
            Route::get("/add", [ProductsController::class, "showProductAddPage"])->name("add-product");
            Route::post("/add", [ProductsController::class, "addProduct"])->name("add-product");
            Route::get("/update", [ProductsController::class, "showProductUpdatePage"])->name("update-product");
            Route::post("/update", [ProductsController::class, "updateProduct"])->name("update-product");
            Route::get("/delete", [ProductsController::class, "deleteProduct"])->name("delete-product");
        });
    });

    Route::get("/orders", [OrdersController::class, "index"])->name("orders");
    Route::get('restaurants', [RestaurantController::class, 'index'])->name('restaurants');
    Route::get('invoice', [InvoiceController::class, 'index'])->name('invoice');
    Route::get('invoice/{id}', [InvoiceController::class, 'showInvoiceDetails'])->name('invoice');

    Route::get('/customers', [CustomerController::class, 'index']);
    Route::get('/reviews', [ReviewController::class, 'index']);
    Route::get('/socials', [SocialController::class, 'index']);
    Route::get('/sales', [SalesController::class, 'index']);
    Route::get('/faq', [FAQController::class, 'index']);

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
        Route::get('/', [SettingsController::class, 'index']);
        // profile, email,
        Route::post('/profile', [SettingsController::class, 'updateProfile']);
        Route::post('/email', [SettingsController::class, 'updateEmail']);

    });
});


Route::get('/maintenance', function () {
    return view('pages.maintenance');
});

Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthenticationController::class, 'viewLoginPage'])->name('login');
    Route::post('/login', [AuthenticationController::class, 'doLogin']);
    Route::get('/register', [AuthenticationController::class, 'viewRegistrationPage'])->name('register');
    Route::post('/register', [AuthenticationController::class, 'doRegister']);
    Route::get('/lockscreen', [AuthenticationController::class, 'viewLockscreenPage'])->name('lockscreen');
    Route::get('/logout', [AuthenticationController::class, 'doLogout']);
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

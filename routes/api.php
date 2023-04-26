<?php

use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\app\Todo;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrdersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::prefix('app')->group(function () {
    // Routes for Todos Application
    Route::prefix('todo')->group(function () {
        Route::post('/add/block', [Todo::class, 'addTodoBlock']);
        Route::post('/add/task', [Todo::class, 'addTodoItem']);
        Route::post('/archive', [Todo::class, 'archiveTodo']);
        Route::post('/completed', [Todo::class, 'completedTodo']);
        Route::delete('/delete', [Todo::class, 'deleteTodo']);
    });
});

/*
| Authentication Routes
| ----------------------
| POST /login: Process the login form
| POST /register: Process the registration form
| POST /logout: Process the logout request
| POST /forgot-password: Process the forgot password form
| POST /reset-password: Process the reset password form
*/

Route::prefix('auth')->group(function () {
    // Routes for Customers Authentication
    Route::prefix('customer')->group(function () {
        Route::post('/login', [ApiAuthController::class, 'doCustomerLogin']);
        Route::post('/register', [ApiAuthController::class, 'doCustomerRegister']);
        Route::post('/logout', [ApiAuthController::class, 'doCustomerLogout']);
        Route::post('/forgot-password', [ApiAuthController::class, 'doCustomerForgotPassword']);
        Route::post('/reset-password', [ApiAuthController::class, 'doCustomerResetPassword']);
    });
});

Route::middleware('auth:api')->group(function () {
    /*
    | Customers Routes
    | ----------------------
    | GET /customers: Retrieve a list of all customers
    | GET /customers/{customerId}: Retrieve a specific customer by ID
    | POST /customers: Create a new customer
    | PUT /customers/{customerId}: Update an existing customer by ID
    | DELETE /customers/{customerId}: Delete a customer by ID
    */

    Route::prefix('customer')->group(function () {
        Route::get('/', [CustomerController::class, 'getAllCustomers']);
        Route::get('/{customerId}', [CustomerController::class, 'getCustomerById']);
        Route::post('/', [CustomerController::class, 'store']);
        Route::put('/{customerId}', [CustomerController::class, 'update']);
        Route::delete('/{customerId}', [CustomerController::class, 'destroy']);
    });

    /*
    | OrdersController Routes
    | ----------------------
    | GET /orders: Retrieve a list of all orders
    | GET /orders/{orderId}: Retrieve a specific order by ID
    | POST /orders: Create a new order
    | PUT /orders/{orderId}: Update an existing order by ID
    | DELETE /orders/{orderId}: Delete an order by ID
    */

    Route::prefix('orders')->group(function () {
        Route::get('/', [OrdersController::class, 'index']);
        Route::get('/{orderId}', [OrdersController::class, 'show']);
        Route::post('/', [OrdersController::class, 'store']);
        Route::put('/{orderId}', [OrdersController::class, 'update']);
        Route::delete('/{orderId}', [OrdersController::class, 'destroy']);
    });
});



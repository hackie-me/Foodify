<?php

use App\Http\Controllers\app\Chat;
use App\Http\Controllers\app\Email;
use App\Http\Controllers\app\Todo;
use Illuminate\Http\Request;
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
    // Routes for Todo Application
    Route::prefix('todo')->group(function () {
        Route::post('/add/block', [Todo::class, 'addTodoBlock']);
        Route::post('/add/task', [Todo::class, 'addTodoItem']);
        Route::post('/archive', [Todo::class, 'archiveTodo']);
        Route::post('/completed', [Todo::class, 'completedTodo']);
        Route::delete('/delete', [Todo::class, 'deleteTodo']);
    });

    // Routes for Chat Application
    Route::prefix('chat')->group(function () {
        Route::post('/add', [Chat::class, 'addChat']);
        Route::post('/delete', [Chat::class, 'deleteChat']);
    });

    // Routes for Email Application
    Route::prefix('email')->group(function () {
        Route::post('/add', [Email::class, 'addEmail']);
        Route::post('/delete', [Email::class, 'deleteEmail']);
        Route::get('/get/contacts', [Email::class, 'getContacts'])->name('email.contacts');
        Route::post('/add/contacts', [Email::class, 'addContact'])->name('email.add.contact');
    });


});


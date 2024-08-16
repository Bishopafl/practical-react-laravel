<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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
auth*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('register', [AuthController::class, 'register']);

Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function() {
    Route::get('user', [AuthController::class, 'user']);
    Route::post('logout', [AuthController::class, 'logout']);

    // Route::get('users', [UserController::class, 'index'])->name('get_all_users');
    // Route::post('users', [UserController::class, 'store'])->name('store_user');
    // Route::get('users/{id}', [UserController::class, 'show'])->name('show_user');
    // Route::put('users/{id}', [UserController::class, 'update'])->name('update_user');
    // Route::delete('users/{id}', [UserController::class, 'destroy'])->name('delete_user');

    Route::apiResource('users', UserController::class);
});


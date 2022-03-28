<?php

use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\SalaryController;
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


// Route::resource('products', ProductController::class);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/total', [SalaryController::class, 'show']);

});
//
Route::post('/register', [AuthUserController::class, 'register']);
Route::post('/login', [AuthUserController::class, 'login']);
Route::post('/logout', [AuthUserController::class, 'logout']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

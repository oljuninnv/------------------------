<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResetPasswordController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('auth/register', [AuthController::class,'register']);
Route::post('auth/login', [AuthController::class,'login']);

Route::post('auth/reset', [ResetPasswordController::class,'forgetPassword']);
// Route::get('auth/reset/{token}', [ResetPasswordController::class,'verificationMail']);
// Route::post('auth/reset/', [ResetPasswordController::class,'resetPasswordLoad']);
// Route::post('auth/reset/confirm', [ResetPasswordController::class,'resetPassword']);

Route::apiResource('/users', UserController::class)->middleware('auth:api');
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Api\AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::get('/company', [App\Http\Controllers\Api\CompanyController::class, 'show'])->middleware('auth:sanctum');
Route::post('/checkin', [App\Http\Controllers\Api\AttendanceController::class, 'checkin'])->middleware('auth:sanctum');
Route::post('/checkout', [App\Http\Controllers\Api\AttendanceController::class, 'checkout'])->middleware('auth:sanctum');
Route::get('/is-checkin', [App\Http\Controllers\Api\AttendanceController::class, 'isCheckin'])->middleware('auth:sanctum');
Route::post('/update-profile', [App\Http\Controllers\Api\AuthController::class, 'updateProfile'])->middleware('auth:sanctum');
Route::apiResource('/create-permissions', App\Http\Controllers\Api\PermissionController::class)->middleware('auth:sanctum');
Route::post('/create-notes', [App\Http\Controllers\Api\NoteController::class, 'store'])->middleware('auth:sanctum');
Route::get('/notes', [App\Http\Controllers\Api\NoteController::class, 'index'])->middleware('auth:sanctum');

<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('cours', 'App\Http\Controllers\Api\CoursController');
Route::apiResource('piliers', 'App\Http\Controllers\Api\PiliersController');
Route::apiResource('interets', 'App\Http\Controllers\Api\InteretsController');
Route::apiResource('zones', 'App\Http\Controllers\Api\ZonesController');
Route::apiResource('roles', 'App\Http\Controllers\Api\RoleController');
Route::apiResource('roles', 'App\Http\Controllers\Api\UserController');

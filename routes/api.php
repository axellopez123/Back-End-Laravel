<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ImageController;

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

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::post('/logout', [AuthController::class,'logout']);
    Route::apiResource('/users',UserController::class);
    Route::apiResource('/properties',PropertyController::class);
});


Route::post('/upload',[ImageController::class,'upload']);
Route::get('/imagesNames/{id}',[ImageController::class,'FilesName']);
Route::get('/image/{name}',[ImageController::class,'getFile']);


Route::post('/signup', [AuthController::class,'signup']);
Route::post('/login', [AuthController::class,'login']);


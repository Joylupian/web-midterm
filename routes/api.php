<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\JoyControllerAPI;
use App\Http\Controllers\API\JoyPostController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('joy-api',[\App\Http\Controllers\API\JoyControllerAPI::class,'index']);

Route::post('login',[JoyControllerAPI::class,'login']);
Route::post('register',[JoyControllerAPI::class,'register']);
Route::post('reset-password',[JoyControllerAPI::class,'resetPassword']);


Route::get('get-all-posts',[JoyPostController::class,'getAllPosts']);
Route::get('get-post',[JoyPostController::class,'getPost']);
Route::get('search-post',[JoyPostController::class,'searchPost']);

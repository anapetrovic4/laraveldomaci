<?php

use App\Http\Controllers\GostController;
use App\Http\Controllers\IznajmljivanjeController;
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

Route::get('/gosti',[GostController::class,'index']);
Route::get('/gosti/{id}',[GostController::class,'show']);



Route::get('/renta',[IznajmljivanjeController::class,'index']);
Route::get('/renta/{id}',[IznajmljivanjeController::class,'show']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

<?php

use App\Http\Controllers\MoviesController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('api')->get('/movies',[MoviesController::class,'index']);
Route::middleware('api')->post('/movies',[MoviesController::class,'store']);
Route::middleware('api')->get('/movies/{id}',[MoviesController::class,'show']);
Route::middleware('api')->put('/movies/{id}',[MoviesController::class,'update']);
Route::middleware('api')->delete('/movies/{id}',[MoviesController::class,'destroy']);



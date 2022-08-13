<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\BankController as BankControllerV1;
use App\Http\Controllers\Api\V2\BankController as BankControllerV2;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'v1'], function(){
    Route::resource('/bank', BankControllerV1::class);
});

Route::group(['prefix' => 'v2'], function(){
    Route::resource('/bank', BankController::class)->middleware('auth:sanctum');
});
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\HotelController;
use App\Http\Controllers\Api\V1\GuestController;
use App\Http\Controllers\Api\V1\EmployeeController;
use App\Http\Controllers\Api\V1\IncomeCategoryController;
use App\Http\Controllers\Api\V1\IncomeController;
use App\Http\Controllers\Api\V1\ExpenseCategoryController;
use App\Http\Controllers\Api\V1\ExpenseController;

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

Route::resource('hotel', HotelController::class);
Route::resource('guest', GuestController::class);
Route::resource('employee', EmployeeController::class);
Route::resource('/income/category', IncomeCategoryController::class);
Route::resource('income', IncomeController::class);
Route::resource('/expense/category', ExpenseCategoryController::class);
Route::resource('expense', ExpenseController::class);


Route::group(['prefix' => 'v2'], function(){
    Route::resource('/bank', BankController::class)->middleware('auth:sanctum');
});


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
Route::resource('hotel', HotelController::class);
Route::resource('guest', GuestController::class);
Route::resource('employee', EmployeeController::class);
Route::resource('/income/category', IncomeCategoryController::class);
Route::resource('income', IncomeController::class);
Route::resource('/expense/category', ExpenseCategoryController::class);
Route::resource('expense', ExpenseController::class);

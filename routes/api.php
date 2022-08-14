<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\BankController as BankControllerV1;
use App\Http\Controllers\Api\V2\BankController as BankControllerV2;

use App\Http\Controllers\Api\V1\HotelController as HotelControllerV1;
use App\Http\Controllers\Api\V2\HotelController as HotelControllerV2;

use App\Http\Controllers\Api\V1\GuestController as GuestControllerV1 ;
use App\Http\Controllers\Api\V2\GuestController as GuestControllerV2 ;

use App\Http\Controllers\Api\V1\EmployeeController as EmployeeControllerV1;
use App\Http\Controllers\Api\V2\EmployeeController as EmployeeControllerV2;

use App\Http\Controllers\Api\V1\IncomeCategoryController as IncomeCategoryControllerV1;
use App\Http\Controllers\Api\V2\IncomeCategoryController as IncomeCategoryControllerV2;

use App\Http\Controllers\Api\V1\IncomeController as IncomeControllerV1 ;
use App\Http\Controllers\Api\V2\IncomeController as IncomeControllerV2 ;

use App\Http\Controllers\Api\V1\ExpenseCategoryController as ExpenseCategoryControllerV1;
use App\Http\Controllers\Api\V2\ExpenseCategoryController as ExpenseCategoryControllerV2;

use App\Http\Controllers\Api\V1\ExpenseController as ExpenseControllerV1;
use App\Http\Controllers\Api\V2\ExpenseController as ExpenseControllerV2;

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

/*
 ---------------------------------------------------------------------
Api Bank Version Group Route
_______________________________________________________________________
*/
Route::group(['prefix' => 'v1'], function(){
    Route::resource('/bank', BankControllerV1::class);
});

Route::group(['prefix' => 'v2'], function(){
    Route::resource('/bank', BankController::class)->middleware('auth:sanctum');
});

/*
 ---------------------------------------------------------------------
Api Hotel Version Group  Route
_______________________________________________________________________
*/
Route::group(['prefix'=>'v1'],function(){
    Route::resource('hotel', HotelController::class);

});
Route::group(['prefix'=>'v2'],function(){
    Route::resource('hotel', HotelController::class)->middleware('auth.sanctum');
});
/*
 ---------------------------------------------------------------------
Api Guest Version Group Route
_______________________________________________________________________
*/
Route::group(['prefix' => 'v1'],function(){
    Route::resource('guest', GuestController::class);
});
Route::group(['prefix' => 'v2'],function(){
    Route::resource('guest', GuestController::class)->middleware('auth.sanctum');
});
/*
 ---------------------------------------------------------------------
Api Employee Version Group Route
_______________________________________________________________________
*/
Route::group(['prefix' => 'v1'],function(){
    Route::resource('employee', EmployeeController::class);
});
Route::group(['prefix' => 'v2'],function(){
    Route::resource('employee', EmployeeController::class)->middleware('auth.sanctum');
});
/*
 ---------------------------------------------------------------------
Api income Categoy Version Group Route
_______________________________________________________________________
*/
Route::group(['prefix' => 'v1'],function(){
    Route::resource('/income/category', IncomeCategoryController::class);
});
Route::group(['prefix'=>'v2'],function(){
    Route::resource('/income/category', IncomeCategoryController::class)->middleware('auth.sanctum');
});
/*
 ---------------------------------------------------------------------
Api income  Version Group Route
_______________________________________________________________________
*/
Route::group(['prefix' => 'v1'],function(){
    Route::resource('income', IncomeController::class);
});
Route::group(['prefix' => 'v2'],function(){
    Route::resource('income', IncomeController::class)->middleware('auth.sanctum');
});
/*
 ---------------------------------------------------------------------
Api Expense Category  Version Group Route
_______________________________________________________________________
*/
Route::group(['prefix' => 'v1'],function(){
    Route::resource('/expense/category', ExpenseCategoryController::class);
});
Route::group(['prefix' => 'v2'],function(){
    Route::resource('/expense/category', ExpenseCategoryController::class)->middleware('auth.sanctum');
});
/*
 ---------------------------------------------------------------------
Api Expense  Version Group Route
_______________________________________________________________________
*/
Route::group(['prefix' => 'v1'],function(){
    Route::resource('expense', ExpenseController::class);
});
Route::group(['prefix' => 'v2'],function(){
    Route::resource('expense', ExpenseController::class)->middleware('auth.sanctum');
});

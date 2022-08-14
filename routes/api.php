<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\BankController as BankControllerV1;
use App\Http\Controllers\Api\V1\BookingController as BookingControllerV1;
use App\Http\Controllers\Api\V1\InvoiceController as InvoiceControllerV1;
use App\Http\Controllers\Api\V1\RoomController as RoomControllerV1;
use App\Http\Controllers\Api\V1\RoomTransferController as RoomTransferControllerV1;
use App\Http\Controllers\Api\V1\TaxSettingController as TaxSettingControllerV1;
use App\Http\Controllers\Api\V1\UserController as UserControllerV1;
use App\Http\Controllers\Api\V1\HotelController as HotelControllerV1;
use App\Http\Controllers\Api\V1\GuestController as GuestControllerV1 ;
use App\Http\Controllers\Api\V1\EmployeeController as EmployeeControllerV1;
use App\Http\Controllers\Api\V1\IncomeCategoryController as IncomeCategoryControllerV1;
use App\Http\Controllers\Api\V1\IncomeController as IncomeControllerV1 ;
use App\Http\Controllers\Api\V1\ExpenseCategoryController as ExpenseCategoryControllerV1;
use App\Http\Controllers\Api\V1\ExpenseController as ExpenseControllerV1;


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

    Route::resource('/room',RoomControllerV1::class);

    Route::resource('/room-transfer',RoomTransferControllerV1::class);

    Route::resource('/booking',BookingControllerV1::class);

    Route::resource('/user',UserControllerV1::class);

    Route::resource('/invoice',InvoiceControllerV1::class);

    Route::resource('/tax-setting',TaxSettingControllerV1::class);

    Route::resource('hotel', HotelControllerV1::class);

    Route::resource('guest', GuestControllerV1::class);

    Route::resource('employee', EmployeeControllerV1::class);

    Route::resource('/income/category', IncomeCategoryControllerV1::class);

    Route::resource('income', IncomeControllerV1::class);

    Route::resource('/expense/category', ExpenseCategoryControllerV1::class);

    Route::resource('expense', ExpenseControllerV1::class);
    
});

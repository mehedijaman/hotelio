<?php

use App\Http\Controllers\AccountLedgerController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BalanceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankController;
use App\Http\Controllers\BankLedgerController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\IncomeCategoryController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\InvoiceItemController;
use App\Http\Controllers\RoomTransferController;
use App\Http\Controllers\TaxSettingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('accountLedger',AccountLedgerController::class);
Route::resource('bank',BankController::class);
Route::resource('bankLedger',BankLedgerController::class);
Route::resource('balance',BalanceController::class);
Route::resource('room',RoomController::class);
Route::resource('roomTransfer',RoomTransferController::class);
Route::resource('booking',BookingController::class);
Route::resource('guest',GuestController::class);
Route::resource('employee',EmployeeController::class);
Route::resource('hotel',HotelController::class);
Route::resource('incomeCategory',IncomeCategoryController::class);
Route::resource('income',IncomeController::class);
Route::resource('user',RegisteredUserController::class);
Route::resource('invoice', InvoiceController::class);
Route::resource('invoiceItem', InvoiceItemController::class);
Route::resource('taxSetting',TaxSettingController::class);

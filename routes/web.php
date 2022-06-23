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
use App\Http\Controllers\ExpenseCategoryController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\InvoiceItemController;
use App\Http\Controllers\RoomTransferController;
use App\Http\Controllers\TaxSettingController;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\TaxSetting;

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
// -------------------------------------Bank's Route ---------------------------------------------------------------
Route::get('bank/trash',[BankController::class, 'trash']);
Route::get('/bank/delete',[BankController::class, 'destroyAll']);
Route::get('bank/{id}/restore',[BankController::class, 'restore']);
Route::get('bank/restoreAll',[BankController::class, 'restoreAll']);
Route::get('/bank/{id}/parmanently/delete',[BankController::class, 'forceDeleted']);
Route::get('bank/emptyTrash',[BankController::class,'emptyTrash']);
Route::resource('bank',BankController::class);

Route::resource('bankLedger',BankLedgerController::class);
Route::resource('balance',BalanceController::class);
Route::resource('room',RoomController::class);

Route::get('roomTransfer/trash',[RoomTransferController::class, 'trash']);
Route::get('/roomTransfer/delete',[RoomTransferController::class, 'destroyAll']);
Route::get('roomTransfer/{id}/restore',[RoomTransferController::class, 'restore']);
Route::get('roomTransfer/restoreAll',[RoomTransferController::class, 'restoreAll']);
Route::get('/roomTransfer/{id}/parmanently/delete',[RoomTransferController::class, 'forceDeleted']);
Route::get('/roomTransfer/emptyTrash',[RoomTransferController::class, 'emptyTrash']);
Route::resource('roomTransfer',RoomTransferController::class);

Route::get('/booking/trash',[BookingController::class,'trash']);
Route::get('/booking/delete',[BookingController::class,'destroyAll']);
Route::get('/booking/{id}/restore',[BookingController::class,'restore']);
Route::get('/booking/restoreAll',[BookingController::class,'restoreAll']);
Route::get('/Booking/{id}/parmanently/delete',[BookingController::class,'forceDeleted']);
Route::get('/booking/emptyTrash',[BookingController::class, 'emptyTrash']);
Route::resource('booking',BookingController::class);

Route::resource('guest',GuestController::class);
//---------------------------------------------Employee Rout's----------------------------------------------------------------
Route::get('/employee/trash',[EmployeeController::class,'trash']);
Route::get('/employee/delete',[EmployeeController::class,'destroyAll']);
Route::get('/employee/{id}/restore',[EmployeeController::class,'restore']);
Route::get('/employee/restoreAll',[EmployeeController::class,'restoreAll']);
Route::get('/employee/{id}/parmanently/delete',[EmployeeController::class,'forceDeleted']);
Route::get('/employee/emptyTrash',[EmployeeController::class,'emptyTrash']);
Route::resource('employee',EmployeeController::class);
// --------------------------------------------Hotel Routes-------------------------------------------------------------------
Route::get('/hotel/trash',[HotelController::class,'trash']);
Route::get('/hotel/delete',[HotelController::class,'destroyAll']);
Route::get('hotel/{id}/restore',[HotelController::class,'restore']);
Route::get('/hotel/restoreAll',[HotelController::class,'restoreAll']);
Route::get('/hotel/{id}/parmanently/delete',[HotelController::class,'forceDeleted']);
Route::get('/hotel/emptyTrash',[HotelController::class,'emptyTrash']);

Route::resource('hotel',HotelController::class);
Route::resource('incomeCategory',IncomeCategoryController::class);
Route::resource('income',IncomeController::class);
Route::resource('expenseCategory',ExpenseCategoryController::class);
Route::resource('expense',ExpenseController::class);
Route::resource('user',RegisteredUserController::class);

Route::get('/invoice/trash',[InvoiceController::class, 'trash']);
Route::get('/invoice/delete',[InvoiceController::class, 'destroyAll']);
Route::get('/invoice/{id}/restore',[InvoiceController::class, 'restore']);
Route::get('/invoice/restoreAll',[InvoiceController::class, 'restoreAll']);
Route::get('/invoice/{id}/parmanently/delete',[InvoiceController::class, 'forceDeleted']);
Route::get('/invoice/emptyTrash',[InvoiceController::class, 'emptyTrash']);
Route::resource('invoice', InvoiceController::class);

Route::resource('invoiceItem', InvoiceItemController::class);

Route::get('/taxSetting/trash',[TaxSettingController::class, 'trash']);
Route::get('/taxSetting/delete',[TaxSettingController::class, 'destroyAll']);
Route::get('/taxSetting/{id}/restore',[TaxSettingController::class, 'restore']);
Route::get('/taxSetting/restoreAll',[TaxSettingController::class, 'restoreAll']);
Route::get('/taxSetting/{id}/parmanently/delete',[TaxSettingController::class, 'forceDeleted']);
Route::get('/taxSetting/emptyTrash',[TaxSettingController::class, 'emptyTrash']);
Route::resource('taxSetting',TaxSettingController::class);

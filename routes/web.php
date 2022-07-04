<?php

use Illuminate\Support\Facades\Route;
use App\Models\WithdrawalSlip;
use App\Models\Item;

use App\Http\Controllers\VerifyDocuments;
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

Route::get('/fake', function () {
    $data = WithdrawalSlip::findOrFail(1);
    dd($data->items);
});

Route::get('/receipt', [App\Http\Controllers\WithdrawalSlipController::class, 'index'])->name('receipt.index');

Route::post('/save_receipt', [App\Http\Controllers\WithdrawalSlipController::class, 'store']);

Route::get('/verify/{key?}', [VerifyDocuments::class, 'Verify_documents']);

require __DIR__.'/auth.php';

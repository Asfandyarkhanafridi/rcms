<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [UserController::class, 'index'])->name('users.index');

    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');

    //Stock
    Route::get('/stock', [App\Http\Controllers\StockController::class, 'index'])->name('stock.index');

//company
    Route::get('/company', [App\Http\Controllers\CompanyController::class, 'index'])->name('company.index');
    Route::post('/company', [App\Http\Controllers\CompanyController::class, 'store'])->name('company.store');
    Route::put('/company/update/{company}', [App\Http\Controllers\CompanyController::class, 'update'])->name('company.update');

//party
    Route::get('/party', [App\Http\Controllers\PartyController::class, 'index'])->name('party.index');
    Route::post('/party', [App\Http\Controllers\PartyController::class, 'store'])->name('party.store');
    Route::put('/party/update/{party}', [App\Http\Controllers\PartyController::class, 'update'])->name('party.update');

//quality
    Route::get('/quality', [App\Http\Controllers\QualityController::class, 'index'])->name('quality.index');
    Route::post('/quality', [App\Http\Controllers\QualityController::class, 'store'])->name('quality.store');
    Route::put('/quality/update/{quality}', [App\Http\Controllers\QualityController::class, 'update'])->name('quality.update');

//purchase
    Route::get('/purchase', [App\Http\Controllers\PurchaseController::class, 'index'])->name('purchase.index');
    Route::post('/purchase', [App\Http\Controllers\PurchaseController::class, 'store'])->name('purchase.store');
    Route::get('/purchase/show/{purchase}', [App\Http\Controllers\PurchaseController::class, 'show'])->name('purchase.show');
    Route::put('/purchase/update/{purchase}', [App\Http\Controllers\PurchaseController::class, 'update'])->name('purchase.update');
    Route::get('/purchase/destroy/{purchase}', [App\Http\Controllers\PurchaseController::class, 'destroy'])->name('purchase.destroy');

//sale
    Route::get('/sale', [App\Http\Controllers\SaleController::class, 'index'])->name('sale.index');
    Route::post('/sale', [App\Http\Controllers\SaleController::class, 'store'])->name('sale.store');
    Route::get('/sale/show/{sale}', [App\Http\Controllers\SaleController::class, 'show'])->name('sale.show');
    Route::put('/sale/update/{sale}', [App\Http\Controllers\SaleController::class, 'update'])->name('sale.update');
    Route::get('/sale/destroy/{sale}', [App\Http\Controllers\SaleController::class, 'destroy'])->name('sale.destroy');

//Company Payment
    Route::get('/company_payment', [App\Http\Controllers\Company_paymentController::class, 'index'])->name('company_payment.index');
    Route::post('/company_payment', [App\Http\Controllers\Company_paymentController::class, 'store'])->name('company_payment.store');
    Route::put('/company_payment/update/{company_payment}', [App\Http\Controllers\Company_paymentController::class, 'update'])->name('company_payment.update');
    Route::get('/company_payment/destroy/{company_payment}', [App\Http\Controllers\Company_paymentController::class, 'destroy'])->name('company_payment.destroy');
    Route::get('/company_payment/detail/{company}', [App\Http\Controllers\Company_paymentController::class, 'show'])->name('company_payment.show');

//Party Payment
    Route::get('/party_payment', [App\Http\Controllers\Party_paymentController::class, 'index'])->name('party_payment.index');
    Route::post('/party_payment', [App\Http\Controllers\Party_paymentController::class, 'store'])->name('party_payment.store');
    Route::put('/party_payment/update/{party_payment}', [App\Http\Controllers\Party_paymentController::class, 'update'])->name('party_payment.update');
    Route::get('/party_payment/destroy/{party_payment}', [App\Http\Controllers\Party_paymentController::class, 'destroy'])->name('party_payment.destroy');
    Route::get('/party_payment/detail/{party}', [App\Http\Controllers\Party_paymentController::class, 'show'])->name('party_payment.show');

});

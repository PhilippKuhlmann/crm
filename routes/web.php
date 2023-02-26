<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
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




Route::middleware('auth')->group(function () {

    Route::view('/', 'dashboard')->name('dashboard');


    Route::get('/customer', [CustomerController::class, 'search'])->name('customer.search');
    Route::get('/customer/{customer}', [CustomerController::class, 'index'])->name('customer.index');

    Route::get('/project/selectCustomer', [ProjectController::class, 'selectCustomer'])->name('project.selectCustomer');
    Route::get('/project/{customer}', [ProjectController::class, 'index'])->name('project.index');
    Route::get('/project/{customer}/{project}', [ProjectController::class, 'show'])->name('project.show');

});

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\invoiceController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}',[UserController::class, 'findOne']);
Route::post('/users', [UserController::class, 'create']);


Route::get('/addresses', [AddressController::class, 'index']);
Route::post('/addresses', [AddressController::class, 'create']);
Route::get('/addresses/{id}', [AddressController::class, 'findOne']);

Route::get('/invoices', [invoiceController::class, 'index']);
Route::post('/invoices', [invoiceController::class, 'create']);
Route::get('/invoices/{id}', [invoiceController::class, 'findOne']);
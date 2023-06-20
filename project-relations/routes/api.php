<?php

// ta foda esquecer de importar os controllers
use App\Http\Controllers\AddressController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'findOne']);
Route::post('/users', [Usercontroller::class, 'create']);

Route::get('/address', [AddressController::class, 'index']);
Route::get('/address/{id}', [AddressController::class, 'findOne']);
Route::post('/address', [AddressController::class, 'create']);
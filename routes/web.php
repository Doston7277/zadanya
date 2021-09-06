<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientRegisterController;

Route::get('/', function () {
    return view('frontend.client_register');
});


Route::get('/clients',                           [ClientRegisterController::Class, 'index']);
Route::post('/client_register_create',          [ClientRegisterController::class, 'create']);

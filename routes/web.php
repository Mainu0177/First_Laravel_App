<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\textController;

Route::get('/', function () {
    return view('first');
});

Route::post('/user-registration', [DemoController::class, 'UserRegistration']);
Route::get('/demo/{name}/{age}', [DemoController::class, 'DemoPerson']);
Route::get('/url-param', [DemoController::class, 'URLParam']);
Route::get('/test', [textController::class, 'index']);

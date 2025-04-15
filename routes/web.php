<?php

use App\Http\Controllers\MyController;

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
    //return view('index');
//});

Route::get('/', [MyController::class, 'homePage'])->name('index');
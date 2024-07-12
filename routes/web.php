<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', [PageController::class , 'test'])->name('test');

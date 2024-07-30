<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::redirect('/' , '/index');

Route::get('/index', [PageController::class , 'test'])->name('test');

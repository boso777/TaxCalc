<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaxController;

Route::get('/', [TaxController::class , 'index'])->name('home');
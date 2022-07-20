<?php

use App\Http\Controllers\CustomValidationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('custom-validation');
});

Route::post('/custom-validation/store', [CustomValidationController::class, 'store'])->name('custom.validation.store');

<?php

use App\Http\Controllers\NameController;



Route::get('/', [NameController::class, 'index']);
Route::post('/', [NameController::class, 'generateRandomName']);

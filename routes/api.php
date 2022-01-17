<?php

use App\Http\Controllers\api\DogsController;
use Illuminate\Support\Facades\Route;

Route::apiResource('dogs', DogsController::class);
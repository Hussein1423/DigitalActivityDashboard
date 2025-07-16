<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardApiController;

    Route::get('/dashboard', [DashboardApiController::class, 'all']);

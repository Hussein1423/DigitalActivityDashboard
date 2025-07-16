<?php

use App\Http\Controllers\DashboardApiController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'dashboard')->name('dashboard');

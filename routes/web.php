<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;

Route::get('/', [ApplicationController::class, 'dashboard'])->name('dashboard');
Route::get('/brm-access', [ApplicationController::class, 'brmAccess'])->name('brm-access');
Route::get('/ai-tools', [ApplicationController::class, 'aiTools'])->name('ai-tools');

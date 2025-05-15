<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/dashboard', [\App\Http\Controllers\DashbordController::class, 'dashboard']);

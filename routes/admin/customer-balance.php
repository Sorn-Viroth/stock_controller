<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/customer-balance', [\App\Http\Controllers\CustomerbalanceController::class, 'customerbalance']);

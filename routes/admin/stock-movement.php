<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/stock-movement', [\App\Http\Controllers\StockmovementController::class, 'stockmovement']);

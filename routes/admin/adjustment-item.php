<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/adjustment-item', [\App\Http\Controllers\AdjustmentitemController::class, 'adjustmentitem']);

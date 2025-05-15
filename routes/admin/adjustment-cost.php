<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/adjustment-cost', [\App\Http\Controllers\AdjustmentcostController::class, 'adjustmentcost']);

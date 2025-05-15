<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/unit', [\App\Http\Controllers\UnitController::class, 'unit']);

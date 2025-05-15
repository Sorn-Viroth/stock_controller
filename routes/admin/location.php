<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/location', [\App\Http\Controllers\LocationController::class, 'location']);

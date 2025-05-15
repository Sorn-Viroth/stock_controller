<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/resive-item', [\App\Http\Controllers\ResiveitemController::class, 'resiveitem']);

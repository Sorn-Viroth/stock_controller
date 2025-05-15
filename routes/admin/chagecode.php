<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/chagecode', [\App\Http\Controllers\ChagecodeController::class, 'chagecode']);

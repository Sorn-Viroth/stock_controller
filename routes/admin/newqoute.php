<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/newqoute', [\App\Http\Controllers\NewqouteController::class, 'newqoute']);

<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/rp-newqoute', [\App\Http\Controllers\RpnewqouteController::class, 'newqoute']);

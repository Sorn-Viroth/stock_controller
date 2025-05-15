<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/vendor', [\App\Http\Controllers\VendorController::class, 'vendor']);

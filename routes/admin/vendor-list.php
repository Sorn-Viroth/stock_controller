<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/vendor-list', [\App\Http\Controllers\VendorlistController::class, 'vendorlist']);

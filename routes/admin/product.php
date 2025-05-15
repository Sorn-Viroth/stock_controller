<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/product', [\App\Http\Controllers\ProductController::class, 'product']);

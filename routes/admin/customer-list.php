<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/customer-list', [\App\Http\Controllers\CustomerlistController::class, 'customerlist']);

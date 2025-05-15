<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/payment', [\App\Http\Controllers\PaymentController::class, 'payment']);

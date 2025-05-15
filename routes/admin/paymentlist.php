<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/paymentlist', [\App\Http\Controllers\PaymentlistController::class, 'paymentlist']);

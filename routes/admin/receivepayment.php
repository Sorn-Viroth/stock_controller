<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/receivepayment', [\App\Http\Controllers\ReceivepaymentController::class, 'receivepayment']);

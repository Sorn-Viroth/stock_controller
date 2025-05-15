<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/saleinvoice', [\App\Http\Controllers\SaleinvoiceController::class, 'saleinvoice']);

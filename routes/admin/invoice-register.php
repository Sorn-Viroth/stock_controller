<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/invoice-register', [\App\Http\Controllers\InvoiceregisterController::class, 'invoiceregister']);

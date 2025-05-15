<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/company', [\App\Http\Controllers\CompanyController::class, 'company']);

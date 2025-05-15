<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/companyinformetion', [\App\Http\Controllers\CompanyinformetionController::class, 'companyinformetion']);

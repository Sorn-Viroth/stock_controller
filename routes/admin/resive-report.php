<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/resive-report', [\App\Http\Controllers\ResivereportController::class, 'resivereport']);

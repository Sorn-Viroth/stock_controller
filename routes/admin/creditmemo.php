<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/creditmemo', [\App\Http\Controllers\CreditmemoController::class, 'creditmemo']);

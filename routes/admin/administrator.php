<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/administrator', [\App\Http\Controllers\AdministratorController::class, 'administrator']);

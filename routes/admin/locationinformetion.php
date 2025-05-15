<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/locationinformetion', [\App\Http\Controllers\LocationinformetionController::class, 'locationinformetion']);

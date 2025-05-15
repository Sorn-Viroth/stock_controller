<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/chageitem', [\App\Http\Controllers\ChageitemController::class, 'chageitem']);

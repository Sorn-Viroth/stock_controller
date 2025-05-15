<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/user', [\App\Http\Controllers\UserController::class, 'user']);

<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/createuser', [\App\Http\Controllers\CreateuserController::class, 'createuser']);

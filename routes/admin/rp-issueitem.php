<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/rp-issueitem', [\App\Http\Controllers\RpissueitemController::class, 'rpissueitem']);

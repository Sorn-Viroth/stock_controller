<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/item', [\App\Http\Controllers\ItemController::class, 'item']);

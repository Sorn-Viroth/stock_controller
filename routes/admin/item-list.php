<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/item-list', [\App\Http\Controllers\ItemlistController::class, 'itemlist']);

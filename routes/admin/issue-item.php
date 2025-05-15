<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

Route::get('/admin/issue-item', [\App\Http\Controllers\IssueitemController::class, 'issueitem']);

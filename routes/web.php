<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin','as' => 'admin.'], function()
{
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    //Categories
    Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
});

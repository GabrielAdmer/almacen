<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\KitController;
use Illuminate\Support\Facades\Route;

Route::get('admin', [HomeController::class, 'index'])->name('admin.home');

Route::resource('admin/kits', KitController::class)->names('admin.kits');

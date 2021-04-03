<?php

use App\Http\Controllers\Admin\AlmacenController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\KitController;
use App\Http\Controllers\Admin\ProveedorController;
use Illuminate\Support\Facades\Route;

Route::get('admin', [HomeController::class, 'index'])->name('admin.home');

Route::resource('admin/kits', KitController::class)->names('admin.kits');
Route::resource('admin/almacens', AlmacenController::class)->names('admin.almacens');
Route::resource('admin/categorias', CategoriaController::class)->names('admin.categorias');
Route::resource('admin/proveedor', ProveedorController::class)->names('admin.proveedor');

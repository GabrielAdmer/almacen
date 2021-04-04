<?php

use App\Http\Controllers\Admin\AlmacenController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\EmpleadoController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\KitController;
use App\Http\Controllers\Admin\PrestamoController;
use App\Http\Controllers\Admin\ProductoController;
use App\Http\Controllers\Admin\ProveedorController;
use App\Http\Controllers\Admin\ProyectoController;
use Illuminate\Support\Facades\Route;

Route::get('admin', [HomeController::class, 'index'])->name('admin.home');

Route::resource('admin/kits', KitController::class)->names('admin.kits');
Route::resource('admin/almacens', AlmacenController::class)->names('admin.almacens');
Route::resource('admin/categorias', CategoriaController::class)->names('admin.categorias');
Route::resource('admin/proveedor', ProveedorController::class)->names('admin.proveedor');
Route::resource('admin/productos', ProductoController::class)->names('admin.productos');

Route::resource('admin/empleados', EmpleadoController::class)->names('admin.empleados');
Route::resource('admin/proyectos', ProyectoController::class)->names('admin.proyectos');
Route::resource('admin/prestamos', PrestamoController::class)->names('admin.prestamos');

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Empleado;
use App\Models\Prestamo;
use App\Models\Producto;
use App\Models\Proyecto;
use Illuminate\Http\Request;


class PrestamoController extends Controller
{

   public function __construct()
   {
      $this->middleware('can:admin.prestamos.index')->only('index');
      $this->middleware('can:admin.prestamos.create')->only('create');
      $this->middleware('can:admin.prestamos.destroy')->only('destroy');
      $this->middleware('can:admin.prestamos.show')->only('show');
      $this->middleware('can:admin.prestamos.edit')->only('edit', 'update');
   }

   public function index()
   {
      $prestamos = Prestamo::latest('id')->get();
      return view('admin.prestamos.index', compact('prestamos'));
   }

   public function create()
   {
      $productos = Producto::pluck('pro_nombre', 'id');
      $empleados = Empleado::pluck('emp_nombre', 'id');
      $proyectos = Proyecto::pluck('proy_nombre', 'id');
      return view('admin.prestamos.create', compact('productos', 'empleados', 'proyectos'));
   }


   public function store(Request $request)
   {
      // return $request->productos;
      $prestamo = Prestamo::create($request->all());

      if ($request->productos) {
         $prestamo->productos()->attach(
            $request->productos
         );
      }

      return redirect()->route("admin.prestamos.index")->with("info", "Creado con éxito");
   }


   public function show(Prestamo $prestamo)
   {
      return view('admin.prestamos.show', compact('prestamo'));
   }

   public function edit(Prestamo $prestamo)
   {
      $productos = Producto::pluck('pro_nombre', 'id');
      $empleados = Empleado::pluck('emp_nombre', 'id');
      $proyectos = Proyecto::pluck('proy_nombre', 'id');
      return view('admin.prestamos.edit', compact('prestamo', 'productos', 'empleados', 'proyectos'));
   }

   public function update(Request $request, Prestamo $prestamo)
   {
      $prestamo->update($request->all());

      return redirect()->route("admin.prestamos.index")->with("info", "Actulizado con éxito");
   }

   public function destroy(Prestamo $prestamo)
   {
      $prestamo->delete();
      return redirect()->route("admin.prestamos.index")->with("info", "Eliminado con éxito");
   }
}

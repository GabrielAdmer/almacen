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
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      $prestamos = Prestamo::latest('id')->get();
      return view('admin.prestamos.index', compact('prestamos'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      $productos = Producto::pluck('pro_nombre', 'id');
      $empleados = Empleado::pluck('emp_nombre', 'id');
      $proyectos = Proyecto::pluck('proy_nombre', 'id');
      return view('admin.prestamos.create', compact('productos', 'empleados', 'proyectos'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
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

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Prestamo  $prestamo
    * @return \Illuminate\Http\Response
    */
   public function show(Prestamo $prestamo)
   {
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Prestamo  $prestamo
    * @return \Illuminate\Http\Response
    */
   public function edit(Prestamo $prestamo)
   {
      $productos = Producto::pluck('pro_nombre', 'id');
      $empleados = Empleado::pluck('emp_nombre', 'id');
      $proyectos = Proyecto::pluck('proy_nombre', 'id');
      return view('admin.prestamos.edit', compact('prestamo', 'productos', 'empleados', 'proyectos'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Prestamo  $prestamo
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Prestamo $prestamo)
   {
      $prestamo->update($request->all());

      return redirect()->route("admin.prestamos.index")->with("info", "Actulizado con éxito");
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Prestamo  $prestamo
    * @return \Illuminate\Http\Response
    */
   public function destroy(Prestamo $prestamo)
   {
      $prestamo->delete();
      return redirect()->route("admin.prestamos.index")->with("info", "Eliminado con éxito");
   }
}

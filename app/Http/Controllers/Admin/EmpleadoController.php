<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      $empleados = Empleado::latest('id')->get();
      return view('admin.empleados.index', compact('empleados'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      return view('admin.empleados.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
      $request->validate([
         "emp_nombre" => ["required"],
         "emp_app_paterno" => ["required"],
         "emp_app_materno" => ["required"],
         "emp_direccion" => ["required"],
         "emp_lugar" => ["required"],
      ]);

      // return $request->all();

      Empleado::create($request->all());
      return redirect()->route("admin.empleados.index")->with("info", "Creado con éxito");
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Empleado  $empleado
    * @return \Illuminate\Http\Response
    */
   public function show(Empleado $empleado)
   {
      //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Empleado  $empleado
    * @return \Illuminate\Http\Response
    */
   public function edit(Empleado $empleado)
   {
      return view('admin.empleados.edit', compact('empleado'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Empleado  $empleado
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Empleado $empleado)
   {
      $request->validate([
         "emp_nombre" => ["required"],
         "emp_app_paterno" => ["required"],
         "emp_app_materno" => ["required"],
         "emp_direccion" => ["required"],
         "emp_lugar" => ["required"],
      ]);

      $empleado->update($request->all());

      return redirect()->route("admin.empleados.index")->with("info", "Actulizado con éxito");
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Empleado  $empleado
    * @return \Illuminate\Http\Response
    */
   public function destroy(Empleado $empleado)
   {
      $empleado->delete();
      return redirect()->route("admin.empleados.index")->with("info", "Eliminado con éxito");
   }
}

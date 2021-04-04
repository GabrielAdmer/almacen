<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      $proyectos = Proyecto::latest('id')->get();
      return view('admin.proyectos.index', compact('proyectos'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      return view('admin.proyectos.create');
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
         "proy_nombre" => "required|unique:proyectos",
         "proy_ubicacion" => "required",
      ]);

      // return $request->all();

      Proyecto::create($request->all());
      return redirect()->route("admin.proyectos.index")->with("info", "Creado con éxito");
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Proyecto  $proyecto
    * @return \Illuminate\Http\Response
    */
   public function show(Proyecto $proyecto)
   {
      return $proyecto->prestamos;
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Proyecto  $proyecto
    * @return \Illuminate\Http\Response
    */
   public function edit(Proyecto $proyecto)
   {
      return view('admin.proyectos.edit', compact('proyecto'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Proyecto  $proyecto
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Proyecto $proyecto)
   {
      $request->validate([
         "proy_nombre" => "required|unique:proyectos,proy_nombre,$proyecto->id",
         "proy_ubicacion" => "required",
      ]);

      // return $request->all();

      $proyecto->update($request->all());
      return redirect()->route("admin.proyectos.index")->with("info", "Creado con éxito");
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Proyecto  $proyecto
    * @return \Illuminate\Http\Response
    */
   public function destroy(Proyecto $proyecto)
   {
      $proyecto->delete();
      return redirect()->route("admin.proyectos.index")->with("info", "Eliminado con éxito");
   }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Almacen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlmacenController extends Controller
{

   public function index()
   {
      $almacenes = Almacen::latest()->get();
      return view('admin.almacens.index', compact('almacenes'));
   }


   public function create()
   {
      return view('admin.almacens.create');
   }


   public function store(Request $request)
   {

      $request->validate([
         "alm_nombre" => "required|unique:almacens",
      ]);

      Almacen::create($request->all());

      return redirect()->route("admin.almacens.index")->with("info", "Creado con éxito");
   }


   public function show(Almacen $almacen)
   {
      return view('admin.almacens.show', compact('almacen'));
   }


   public function edit(Almacen $almacen)
   {
      return view('admin.almacens.edit', compact('almacen'));
   }


   public function update(Request $request, Almacen $almacen)
   {
      $request->validate([
         "alm_nombre" => "required|unique:almacens,alm_nombre,$almacen->id"
      ]);

      $almacen->update($request->all());

      return redirect()->route("admin.almacens.index")->with("info", "Actulizado con éxito");
   }


   public function destroy(Almacen $almacen)
   {

      $almacen->delete();
      return redirect()->route("admin.almacens.index")->with("info", "Eliminado con éxito");
   }
}

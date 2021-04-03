<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kit;
use Illuminate\Http\Request;

class KitController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      $kits = Kit::latest()->paginate(7);
      return view('admin.kit.index', compact('kits'));
   }
   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      return view('admin.kit.create');
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
         "kit_nombre" => "required|unique:kits",
         "kit_cantidad_piezas" => "required"
      ]);

      Kit::create($request->all());

      return redirect()->route("admin.kits.index")->with("info", "Creado con éxito");
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Kit  $kit
    * @return \Illuminate\Http\Response
    */
   public function show(Kit $kit)
   {
      return view('admin.kit.show', compact('kit'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Kit  $kit
    * @return \Illuminate\Http\Response
    */
   public function edit(Kit $kit)
   {
      return view('admin.kit.edit', compact('kit'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Kit  $kit
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Kit $kit)
   {
      $request->validate([
         "kit_nombre" => "required|unique:kits,kit_nombre,$kit->id",
         "kit_cantidad_piezas" => "required",
         "kit_descripcion" => "required"
      ]);
      $kit->update($request->all());

      return redirect()->route("admin.kits.index")->with("info", "Actulizado con éxito");
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Kit  $kit
    * @return \Illuminate\Http\Response
    */
   public function destroy(Kit $kit)
   {
      $kit->delete();
      return redirect()->route("admin.kits.index")->with("info", "Eliminado con éxito");
   }
}

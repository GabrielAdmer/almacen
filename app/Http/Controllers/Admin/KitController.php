<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kit;
use Illuminate\Http\Request;

class KitController extends Controller
{

   public function index()
   {
      $kits = Kit::latest()->paginate(7);
      return view('admin.kit.index', compact('kits'));
   }

   public function create()
   {
      return view('admin.kit.create');
   }


   public function store(Request $request)
   {
      $request->validate([
         "kit_nombre" => "required|unique:kits",
         "kit_cantidad_piezas" => "required"
      ]);

      Kit::create($request->all());

      return redirect()->route("admin.kits.index")->with("info", "Creado con éxito");
   }


   public function show(Kit $kit)
   {

      return view('admin.kit.show', compact('kit'));
   }


   public function edit(Kit $kit)
   {
      return view('admin.kit.edit', compact('kit'));
   }


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


   public function destroy(Kit $kit)
   {
      $kit->delete();
      return redirect()->route("admin.kits.index")->with("info", "Eliminado con éxito");
   }
}

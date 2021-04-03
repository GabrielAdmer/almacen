<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      $categorias = Categoria::latest('id')->get();
      return view('admin.categorias.index', compact('categorias'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      return view('admin.categorias.create');
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
         "cat_nombre" => "required|unique:categorias",
      ]);

      Categoria::create($request->all());

      return redirect()->route("admin.categorias.index")->with("info", "Creado con éxito");
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Categoria  $categoria
    * @return \Illuminate\Http\Response
    */
   public function show(Categoria $categoria)
   {
      $productos = DB::select("call mostrar_producto_categoria(?)", array($categoria->id));
      return view('admin.categorias.show', compact('productos', 'categoria'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Categoria  $categoria
    * @return \Illuminate\Http\Response
    */
   public function edit(Categoria $categoria)
   {
      return view('admin.categorias.edit', compact('categoria'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Categoria  $categoria
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Categoria $categoria)
   {
      $request->validate([
         "cat_nombre" => "required|unique:categorias,cat_nombre,$categoria->id",
      ]);

      $categoria->update($request->all());

      return redirect()->route("admin.categorias.index", $categoria)->with("info", "Actulizado con éxito");
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Categoria  $categoria
    * @return \Illuminate\Http\Response
    */
   public function destroy(Categoria $categoria)
   {
      $categoria->delete();
      return redirect()->route("admin.categorias.index")->with("info", "Eliminado con éxito");
   }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{

   public function __construct()
   {
      $this->middleware('can:admin.categorias.index')->only('index');
      $this->middleware('can:admin.categorias.create')->only('create');
      $this->middleware('can:admin.categorias.destroy')->only('destroy');
      $this->middleware('can:admin.categorias.show')->only('show');
      $this->middleware('can:admin.categorias.edit')->only('edit', 'update');
   }


   public function index()
   {
      $categorias = Categoria::latest('id')->get();
      return view('admin.categorias.index', compact('categorias'));
   }


   public function create()
   {
      return view('admin.categorias.create');
   }


   public function store(Request $request)
   {
      $request->validate([
         "cat_nombre" => "required|unique:categorias",
      ]);

      Categoria::create($request->all());

      return redirect()->route("admin.categorias.index")->with("info", "Creado con éxito");
   }


   public function show(Categoria $categoria)
   {
      return view('admin.categorias.show', compact('categoria'));
   }

   public function edit(Categoria $categoria)
   {
      return view('admin.categorias.edit', compact('categoria'));
   }


   public function update(Request $request, Categoria $categoria)
   {
      $request->validate([
         "cat_nombre" => "required|unique:categorias,cat_nombre,$categoria->id",
      ]);

      $categoria->update($request->all());

      return redirect()->route("admin.categorias.index", $categoria)->with("info", "Actulizado con éxito");
   }


   public function destroy(Categoria $categoria)
   {
      $categoria->delete();
      return redirect()->route("admin.categorias.index")->with("info", "Eliminado con éxito");
   }
}

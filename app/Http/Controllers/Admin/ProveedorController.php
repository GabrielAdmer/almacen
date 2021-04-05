<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProveedorController extends Controller
{
   public function __construct()
   {
      $this->middleware('can:admin.proveedor.index')->only('index');
      $this->middleware('can:admin.proveedor.create')->only('create');
      $this->middleware('can:admin.proveedor.destroy')->only('destroy');
      $this->middleware('can:admin.proveedor.show')->only('show');
      $this->middleware('can:admin.proveedor.edit')->only('edit', 'update');
   }
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      $proveedores = Proveedor::latest('id')->get();
      return view('admin.proveedores.index', compact('proveedores'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      return view('admin.proveedores.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
      // return $request;
      $request->validate([
         "prov_nombre" => "required|unique:proveedors",
      ]);

      Proveedor::create($request->all());

      return redirect()->route("admin.proveedor.index")->with("info", "Creado con éxito");
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Proveedor  $proveedor
    * @return \Illuminate\Http\Response
    */
   public function show(Proveedor $proveedor)
   {
      return view('admin.proveedores.show', compact('proveedor'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Proveedor  $proveedor
    * @return \Illuminate\Http\Response
    */
   public function edit(Proveedor $proveedor)
   {

      return view('admin.proveedores.edit', compact('proveedor'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Proveedor  $proveedor
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Proveedor $proveedor)
   {
      $request->validate([
         "prov_nombre" => "required|unique:proveedors,prov_nombre,$proveedor->id",
      ]);

      $proveedor->update($request->all());

      return redirect()->route("admin.proveedor.index", $proveedor)->with("info", "Actulizado con éxito");
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Proveedor  $proveedor
    * @return \Illuminate\Http\Response
    */
   public function destroy(Proveedor $proveedor)
   {
      $proveedor->delete();
      return redirect()->route("admin.proveedor.index", $proveedor)->with("info", "Actulizado con éxito");
   }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Almacen;
use App\Models\Categoria;
use App\Models\Kit;
use App\Models\Producto;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.productos.index')->only('index');
        $this->middleware('can:admin.productos.create')->only('create');
        $this->middleware('can:admin.productos.destroy')->only('destroy');
        $this->middleware('can:admin.productos.show')->only('show');
        $this->middleware('can:admin.productos.edit')->only('edit', 'update');
    }

   
    public function index()
    {

        $productos = Producto::latest()->get();
        return view("admin.productos.index", compact('productos'));
    }

    
    public function create()
    {
        $almacenes = Almacen::pluck('alm_nombre', "id");
        $categorias = Categoria::pluck('cat_nombre', "id");
        $kits = Kit::pluck('kit_nombre', "id");
        $proveedores = Proveedor::pluck('prov_nombre', 'id');

        return view('admin.productos.create', compact('almacenes', 'categorias', 'kits', 'proveedores'));
    }


    public function store(Request $request)
    {

        $request->validate([
            "pro_nombre" => "required|unique:productos",
            "pro_precio" => "required",
            "pro_cantidad" => "required",
            "pro_descripcion" => "required"
        ]);

        Producto::create($request->all());
        return redirect()->route("admin.productos.index")->with("info", "Creado con éxito");
    }

   
    public function show(Producto $producto)
    {
        return view('admin.productos.show', compact('producto'));
    }


    public function edit(Producto $producto)
    {
        $almacenes = Almacen::pluck('alm_nombre', "id");
        $categorias = Categoria::pluck('cat_nombre', "id");
        $kits = Kit::pluck('kit_nombre', "id");
        $proveedores = Proveedor::pluck('prov_nombre', 'id');

        return view('admin.productos.edit', compact('producto', 'almacenes', 'categorias', 'kits', 'proveedores'));
    }


    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            "pro_nombre" => "required|unique:productos,pro_nombre,$producto->id",
        ]);

        $producto->update($request->all());

        return redirect()->route("admin.productos.index")->with("info", "Actulizado con éxito");
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route("admin.productos.index")->with("info", "Eliminado con éxito");
    }
}

<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 =   Role::create(['name' => 'Administrador']);
        $role2 =  Role::create(['name' => 'Prestamos']);

        Permission::create([
            'name' => 'admin.home',
            'description' => 'Vel el dashboard'
        ])->syncRoles([$role1, $role2]);

        Permission::create([
            'name' => 'admin.users.index',
            'description' => 'Ver listado de usuarios'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.users.update',
            'description' => 'Asignar un rol'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.users.edit',
            'description' => 'Asignar un rol'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.categorias.index',
            'description' => 'Ver listado de categorias'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.categorias.create',
            'description' => 'Crear categoria'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.categorias.edit',
            'description' => 'Editar Categoria'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.categorias.destroy',
            'description' => 'Eliminar Categoria'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.categorias.show',
            'description' => 'Ver Categoria'
        ])->syncRoles([$role1]);


        Permission::create([
            'name' => 'admin.almacens.index',
            'description' => 'Ver listado de almacenes'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.almacens.create',
            'description' => 'Crear almacen'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.almacens.edit',
            'description' => 'Editar almacen'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.almacens.destroy',
            'description' => 'Eliminar almacen'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.almacens.show',
            'description' => 'ver almacen'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.kits.index',
            'description' => 'Ver listado de kits'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.kits.create',
            'description' => 'Crear kit'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.kits.edit',
            'description' => 'Editar Kit'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.kits.destroy',
            'description' => 'Eliminar kit'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.kits.show',
            'description' => 'Ver kit'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.proveedor.index',
            'description' => 'Ver lista de proveedores'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.proveedor.create',
            'description' => 'Crear Proveedor'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.proveedor.edit',
            'description' => 'Editar Proveedor'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.proveedor.destroy',
            'description' => 'Eliminar Proveedor'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.proveedor.show',
            'description' => 'ver Proveedor'
        ])->syncRoles([$role1]);


        Permission::create([
            'name' => 'admin.productos.index',
            'description' => 'Ver listado de productos'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.productos.create',
            'description' => 'Crear producto'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.productos.edit',
            'description' => 'Editar Producto'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.productos.destroy',
            'description' => 'Eliminar Producto'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.productos.show',
            'description' => 'Ver Producto'
        ])->syncRoles([$role1]);


        Permission::create([
            'name' => 'admin.empleados.index',
            'description' => 'Ver listado de empleados'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.empleados.create',
            'description' => 'Crear empleado'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.empleados.edit',
            'description' => 'Editar empleado'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.empleados.destroy',
            'description' => 'Elimnar empleado'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.empleados.show',
            'description' => 'Mostrar empleado'
        ])->syncRoles([$role1]);


        Permission::create([
            'name' => 'admin.proyectos.index',
            'description' => 'Listar Proyectos'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.proyectos.create',
            'description' => 'Crear Proyecto'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.proyectos.edit',
            'description' => 'Editar Proyecto'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.proyectos.destroy',
            'description' => 'Eliminar Proyecto'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.proyectos.show',
            'description' => 'Ver Proyecto'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.prestamos.index',
            'description' => 'Ver listado de prestamos'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.prestamos.create',
            'description' => 'Crear prestamo'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.prestamos.edit',
            'description' => 'Editar prestamo'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.prestamos.destroy',
            'description' => 'Elimnar prestamo'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.prestamos.show',
            'description' => 'Ver prestamo'
        ])->syncRoles([$role1, $role2]);
    }
}

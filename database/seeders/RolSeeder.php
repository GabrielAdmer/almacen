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

      Permission::create(['name' => 'admin.home'])->syncRoles([$role1, $role2]);

      Permission::create(['name' => 'admin.users.index'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.users.update'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.users.edit'])->syncRoles([$role1]);

      Permission::create(['name' => 'admin.categorias.index'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.categorias.create'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.categorias.edit'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.categorias.destroy'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.categorias.show'])->syncRoles([$role1]);


      Permission::create(['name' => 'admin.almacens.index'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.almacens.create'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.almacens.edit'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.almacens.destroy'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.almacens.show'])->syncRoles([$role1]);

      Permission::create(['name' => 'admin.kits.index'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.kits.create'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.kits.edit'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.kits.destroy'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.kits.show'])->syncRoles([$role1]);

      Permission::create(['name' => 'admin.proveedor.index'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.proveedor.create'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.proveedor.edit'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.proveedor.destroy'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.proveedor.show'])->syncRoles([$role1]);


      Permission::create(['name' => 'admin.productos.index'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.productos.create'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.productos.edit'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.productos.destroy'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.productos.show'])->syncRoles([$role1]);


      Permission::create(['name' => 'admin.empleados.index'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.empleados.create'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.empleados.edit'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.empleados.destroy'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.empleados.show'])->syncRoles([$role1]);


      Permission::create(['name' => 'admin.proyectos.index'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.proyectos.create'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.proyectos.edit'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.proyectos.destroy'])->syncRoles([$role1]);
      Permission::create(['name' => 'admin.proyectos.show'])->syncRoles([$role1]);

      Permission::create(['name' => 'admin.prestamos.index'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.prestamos.create'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.prestamos.edit'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.prestamos.destroy'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.prestamos.show'])->syncRoles([$role1, $role2]);
   }
}

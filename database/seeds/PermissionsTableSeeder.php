<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //definiendo permisos , sobre una ruta
        //USUARIO
        Permission::create([
        	'name' =>'Usuario index',
        	'slug' =>'users.index', //users:nombre del modulo
        	'description' =>'Listar usuario',

        ]);

        Permission::create([
        	'name' =>'ver usuario',
        	'slug' =>'users.show', //users:nombre del modulo
        	'description' =>'ver en detalle cada  usuario',

        ]);

        Permission::create([
        	'name' =>'Editar usuario',
        	'slug' =>'users.edit', //users:nombre del modulo
        	'description' =>'editar usuario',

        ]);
        Permission::create([
        	'name' =>'eliminar usuario',
        	'slug' =>'users.destroy', //users:nombre del modulo
        	'description' =>'borrar usuario',

        ]);

        //ROLES
        //
            Permission::create([
        	'name' =>'Listar roles',
        	'slug' =>'roles.index', //users:nombre del modulo
        	'description' =>'Listar roles',

        ]);

        Permission::create([
        	'name' =>'Ver detalle rol',
        	'slug' =>'roles.show', //users:nombre del modulo
        	'description' =>'ver en detalle cada  roles',

        ]);

        Permission::create([
        	'name' =>'Editar rol',
        	'slug' =>'roles.edit', //users:nombre del modulo
        	'description' =>'editar roles',

        ]);
        Permission::create([
        	'name' =>'eliminar rol',
        	'slug' =>'roles.destroy', //users:nombre del modulo
        	'description' =>'borrar roles',

        ]);
             Permission::create([
        	'name' =>'crear rol',
        	'slug' =>'roles.create', //users:nombre del modulo
        	'description' =>'borrar roles',

        	]);
       ///MATERIAS
        Permission::create([
        	'name' =>'Listar Asignatura',
        	'slug' =>'asignatura.index', //users:nombre del modulo
        	'description' =>'Listar asignatura',

        ]);

        Permission::create([
        	'name' =>'Ver detalle asignatura',
        	'slug' =>'asignatura.show', //users:nombre del modulo
        	'description' =>'ver en detalle cada  asignatura',

        ]);

        Permission::create([
        	'name' =>'Editar asignatura',
        	'slug' =>'asignatura.edit', //users:nombre del modulo
        	'description' =>'editar asignatura',

        ]);
        Permission::create([
        	'name' =>'eliminar asignatura',
        	'slug' =>'asignatura.destroy', //users:nombre del modulo
        	'description' =>'borrar asignatura',
        ]);
             Permission::create([
        	'name' =>'crear asignatura',
        	'slug' =>'asignatura.create', //users:nombre del modulo
        	'description' =>'borrar asignatura',


        ]);
        
    }
}

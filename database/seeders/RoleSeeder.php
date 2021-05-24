<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

       $role1= Role::create(['name' =>'Admin']);
       $role2= Role::create(['name' =>'Editor']);
     
      

       Permission::create(['name' =>'admin.home',  
             'description' =>'Ver el dashboard'          ])->syncRoles([$role1,$role2]);

       Permission::create(['name' =>'admin.users.index',  
             'description' =>'Ver listado de usuarios'          ])->syncRoles([$role1]);
       Permission::create(['name' =>'admin.users.edit',  
             'description' =>'Asignar un rol'          ])->syncRoles([$role1]);

       Permission::create(['name' =>'admin.roles.index',  
             'description' =>'Ver lista de roles'          ])->syncRoles([$role1]);

     
       Permission::create(['name' =>'admin.generos.index',  
             'description' =>'Ver listado de generos'          ])->syncRoles([$role1]);
       Permission::create(['name' =>'admin.generos.create',  
             'description' =>'Crear un nuevo genero'          ])->syncRoles([$role1]);
       Permission::create(['name' =>'admin.generos.edit',  
             'description' =>'Editar un genero'          ])->syncRoles([$role1]);
       Permission::create(['name' =>'admin.generos.destroy',  
             'description' =>'Borrar un genero'          ])->syncRoles([$role1]);

       Permission::create(['name' =>'admin.peliculas.index',  
             'description' =>'Ver listado de películas'          ])->syncRoles([$role1,$role2]);
       Permission::create(['name' =>'admin.peliculas.create',  
             'description' =>'Añadir una película'          ])->syncRoles([$role1,$role2]);
       Permission::create(['name' =>'admin.peliculas.edit',  
             'description' =>'Editar una película'          ])->syncRoles([$role1,$role2]);
       Permission::create(['name' =>'admin.peliculas.destroy',  
             'description' =>'Borrar una película'          ])->syncRoles([$role1,$role2]);

       Permission::create(['name' =>'admin.series.index',  
             'description' =>'Ver listado de series'          ])->syncRoles([$role1,$role2]);
       Permission::create(['name' =>'admin.series.create',  
             'description' =>'Añadir una serie'          ])->syncRoles([$role1,$role2]);
       Permission::create(['name' =>'admin.series.edit',  
             'description' =>'Editar una serie'          ])->syncRoles([$role1,$role2]);
       Permission::create(['name' =>'admin.series.destroy',  
             'description' =>'Borrar una serie'          ])->syncRoles([$role1,$role2]);

       Permission::create(['name' =>'admin.noticias.index',  
             'description' =>'Ver listado de noticias'          ])->syncRoles([$role1]);
       Permission::create(['name' =>'admin.noticias.create',  
             'description' =>'Añadir una noticia'          ])->syncRoles([$role1]);
       Permission::create(['name' =>'admin.noticias.edit',  
             'description' =>'Editar una noticia'          ])->syncRoles([$role1]);
       Permission::create(['name' =>'admin.noticias.destroy',  
             'description' =>'Borrar una noticia'          ])->syncRoles([$role1]);

      
     
                   


       


       




       


      
    }
}

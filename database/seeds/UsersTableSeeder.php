<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Configuration;
use App\Models\Permission;
use App\Models\Role;
use App\Models\Admin;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Teste',
        //     'email' => 'teste@teste.com',
        //     'password' => bcrypt('35286756')
        // ]);

        $user = new User();
        $user->name = 'Super Admin';
        if(App::environment('local')){
            $user->email = 'teste@teste.com';
            $user->password = bcrypt('123456');
        }
        if(!App::environment('local')){
            $user->email = 'admin@wesleylutero.com.br';
            $user->password = bcrypt('!Wesleylutero2021');
        }

        $admin = new Admin();
        $admin->type = 1;
        $admin->save();
        $admin->user()->save($user);

        DB::table('permissions')->insert([
          ['name'  => 'Sistema',    'label' => 'Gerenciar Sistema'],
          ['name'  => 'Usuarios',   'label' => 'Gerenciar Usuarios'],
          ['name'  => 'Blog',       'label' => 'Gerenciar Postagens do Blog'],
          ['name'  => 'Banners',    'label' => 'Gerenciar Banners'],
          ['name'  => 'Clientes',    'label' => 'Gerenciar Clientes'],
          ['name'  => 'Empresas',    'label' => 'Gerenciar Empresas'],
          ['name'  => 'Depoimentos',    'label' => 'Gerenciar Depoimentos'],
          ['name'  => 'Paginas',    'label' => 'Gerenciar Páginas'],
          ['name'  => 'Contato',    'label' => 'Gerenciar Contato'],
          ['name'  => 'Menu',    'label' => 'Gerenciar Menu'],
          ['name'  => 'Currículos',    'label' => 'Gerenciar Currículos']
        ]);

        Role::insert([
            'name'  => 'Superadmin',
            'label' => 'Super Administrador',
        ],[
            'name'  => 'Admin',
            'label' => 'Admin',
        ]
    );

        DB::table('role_user')->insert([
            'user_id' => 1,
            'role_id' => 1
        ]);

        DB::table('permission_role')->insert([
            ['permission_id' => 1, 'role_id' => 1],
            ['permission_id' => 2, 'role_id' => 1],
            ['permission_id' => 3, 'role_id' => 1],
            ['permission_id' => 4, 'role_id' => 1],
            ['permission_id' => 5, 'role_id' => 1],
            ['permission_id' => 6, 'role_id' => 1],
            ['permission_id' => 7, 'role_id' => 1],
            ['permission_id' => 8, 'role_id' => 1],
            ['permission_id' => 9, 'role_id' => 1],
            ['permission_id' => 10, 'role_id' => 1],
            ['permission_id' => 11, 'role_id' => 1]
        ]);


    }
}
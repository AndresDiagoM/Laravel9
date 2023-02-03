<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(2)->create();
        \App\Models\Post::factory(80)->create();

        // Crear un usuario para que funcione el login de breeze:
        User::create([
            'name' => 'andres',
            'email' => 'correo@correo.com',
            // metodo de encriptacion para la contraseña
            'password' => bcrypt('12345')
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

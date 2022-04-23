<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name' => 'Angel',
            'apellido_pat' => 'Díaz',
            'apellido_mat' => 'Cortés',
            'email' => 'angelcortes834@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // password
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Alberto',
            'apellido_pat' => 'Díaz',
            'apellido_mat' => 'Cortés',
            'email' => 'angelsistemas@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // password
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Beto',
            'apellido_pat' => 'D',
            'apellido_mat' => 'Cortés',
            'email' => 'angel-blue@outlook.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // password
            'remember_token' => Str::random(10),
        ]);
    }
}

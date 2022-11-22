<?php

namespace Database\Seeders;

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
        $user_data=[
            'name'=> 'admin',
            'lastname'=>'admin',
            'contact'=>'+56111111111',
            'position'=>'Administrador',
            'email'=>'admin@admin.cl',
            'password'=>bcrypt('123456'),
        
        ];
        $user= new User($user_data);
        $user->save();
    }
}

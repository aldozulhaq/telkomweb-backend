<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'irgi fahrias',
            'email' => 'fahrias600@gmail.com',
            'password' =>bcrypt('irgi551'),
            'group_id' => 1,
            'gambar' =>'img/user.png'
        ]);
        \App\User::create([
            'name' => 'Admind',
            'email' => 'admin@gmail.com',
            'password' =>bcrypt('admin'),
            'group_id' => 2,
            'gambar' =>'img/avatar.jpg' 
        ]);
        \App\User::create([
            'name' => 'Admind',
            'email' => 'aldo@gmail.com',
            'password' =>bcrypt('admin'),
            'group_id' => 3,
            'gambar' =>'img/logos.png'        
        ]);
    }
}

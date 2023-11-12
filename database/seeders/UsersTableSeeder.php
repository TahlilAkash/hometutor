<?php

namespace Database\Seeders;

use App\Models\User; // User Model
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //User=Model Name
        User::create([
            'name'=>'akash',
            'role'=>'admin',
            'email'=>'admin01@gmail.com',
            'password'=>bcrypt('123456789'),
        ]);
    }
}

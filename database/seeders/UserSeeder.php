<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// improt prot
use DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        User::create([
            'name'     => 'Admin',
            'email'    => 'admin@gmail.com',
            'password' => bcrypt('rahasia'),
            'isAdmin'  => 1,
        ]); 

        User::create([
            'name'     => 'Member',
            'email'    => 'member@gmail.com',
            'password' => bcrypt('rahasia'),
            'isAdmin'  => 0,
        ]); 
    }
}

<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // role admin
        DB::table('users')->insert([
        	'name' => 'admin',
        	'email' => 'admin@kode.com',
        	'password' => bcrypt('123456'),
        	'remember_token' => str_random(60),
        	'role' => 'admin'
        ]);
        
        // role user
        DB::table('users')->insert([
        	'name' => 'user',
        	'email' => 'user@kode.com',
        	'password' => bcrypt('123456'),
        	'remember_token' => str_random(60),
        	'role' => 'user'
        ]);
        
        // role penulis
        DB::table('users')->insert([
        	'name' => 'penulis',
        	'email' => 'penulis@kode.com',
        	'password' => bcrypt('123456'),
        	'remember_token' => str_random(60),
        	'role' => 'penulis'
        ]);
        
        // role pengurus
        DB::table('users')->insert([
        	'name' => 'pengurus',
        	'email' => 'pengurus@kode.com',
        	'password' => bcrypt('123456'),
        	'remember_token' => str_random(60),
        	'role' => 'pengurus'
        ]);
    }
}

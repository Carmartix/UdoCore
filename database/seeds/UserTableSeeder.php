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
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'type' => 'admin',
            'password' => bcrypt('secret1'),
        ]);
        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@admin.com',
            'type' => 'user',
            'password' => bcrypt('secret'),
        ]);
    }
}

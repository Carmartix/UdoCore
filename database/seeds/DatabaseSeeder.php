<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(SemestresSeeder::class);
        $this->call(CarrerasSeeder::class);
        $this->call(MateriasSeeder::class);
        $this->call(MateriasCarrera::class);
    }
}

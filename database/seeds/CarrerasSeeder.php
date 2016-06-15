<?php

use Illuminate\Database\Seeder;

class CarrerasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($carreras as $carrera) {
          DB::table('carreras')->insert($carrera);
        }
    }
    $carreras = array(
      array('id' => '1','name' => 'Ingeniería de Sistemas','abr' => 'IS'),
      array('id' => '2','name' => 'Ingeniería de Petroleo','abr' => 'IP'),
      array('id' => '3','name' => 'Ingeniería de Producción Animal','abr' => 'IPA'),
      array('id' => '4','name' => 'Ingeniería Agronómica','abr' => 'IA'),
      array('id' => '5','name' => 'Licenciatura en Gerencia de Recursos Humanos','abr' => 'LG'),
      array('id' => '6','name' => 'Licenciatura en Administración','abr' => 'LA'),
      array('id' => '7','name' => 'Licenciatura en Contaduría Pública','abr' => 'LC'),
      array('id' => '8','name' => 'Licenciatura en Tecnología de los Alimentos','abr' => 'LT')
    );
}

<?php

use Illuminate\Database\Seeder;

class SemestresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     $semestres = array(
      array('id' => '1','name' => '1er. Semestre','otro' => 'Primero'),
      array('id' => '2','name' => '2do. Semestre','otro' => 'Segundo'),
      array('id' => '3','name' => '3er. Semestre','otro' => 'Tercer'),
      array('id' => '4','name' => '4to. Semestre','otro' => 'Cuarto'),
      array('id' => '5','name' => '5to. Semestre','otro' => 'Quinto'),
      array('id' => '6','name' => '6to. Semestre','otro' => 'Sexto'),
      array('id' => '7','name' => '7mo. Semestre','otro' => 'Septimo'),
      array('id' => '8','name' => '8vo. Semestre','otro' => 'Octavo'),
      array('id' => '9','name' => '9no. Semestre','otro' => 'Noveno'),
      array('id' => '10','name' => '10mo. Semestre','otro' => 'Decimo'),
      array('id' => '88','name' => 'Electivas Tecnicas','otro' => 'E.T.'),
      array('id' => '99','name' => 'Electivas Socio-Humanisticas','otro' => 'E.SH.'),
      array('id' => '100','name' => 'Areas de Grado','otro' => 'A.G.')
    );
    public function run()
    {
      foreach ($semestres as $semestre) {
          DB::table('semestres')->insert([
              $semestre
          ]);
      }

    }
}

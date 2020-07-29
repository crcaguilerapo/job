<?php

use Illuminate\Database\Seeder;
use App\Faculty;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'Artes'],
            ['id' => 2, 'name' => 'Ciencias'],
            ['id' => 3, 'name' => 'Ciencias Agrarias'],
            ['id' => 4,'name' => 'Ciencias Económicas'],
            ['id' => 5,'name' => 'Ciencias Humanas'],
            ['id' => 6,'name' => 'Derecho, Ciencias Políticas y Sociales'],
            ['id' => 7,'name' => 'Enfermería'],
            ['id' => 8,'name' => 'Ingeniería'],
            ['id' => 9,'name' => 'Medicina'],
            ['id' => 10,'name' => 'Medicina Veterinaria y de Zootecnia'],
            ['id' => 11,'name' => 'Odontología']
        ];

        Faculty::insert($data);
    }
}

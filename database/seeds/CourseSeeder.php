<?php

use Illuminate\Database\Seeder;
use App\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            //Artes
            ['name' => 'Arquitectura', 'faculty_id' => 1],
            ['name' => 'Artes Plásticas', 'faculty_id' => 1],
            ['name' => 'Cine y Televisión', 'faculty_id' => 1],
            ['name' => 'Diseño Gráfico', 'faculty_id' => 1],
            ['name' => 'Diseño Industrial', 'faculty_id' => 1],
            ['name' => 'Música', 'faculty_id' => 1],
            ['name' => 'Música Instrumental', 'faculty_id' => 1],
            //Ciencias
            ['name' => 'Biología', 'faculty_id' => 2],
            ['name' => 'Ciencias de la Computación', 'faculty_id' => 2],
            ['name' => 'Estadística', 'faculty_id' => 2],
            ['name' => 'Farmacia', 'faculty_id' => 2],
            ['name' => 'Física', 'faculty_id' => 2],
            ['name' => 'Geología', 'faculty_id' => 2],
            ['name' => 'Matemáticas', 'faculty_id' => 2],
            ['name' => 'Química', 'faculty_id' => 2],
            //Ciencias Agrarias
            ['name' => 'Ingeniería Agronómica', 'faculty_id' => 3],
            //Ciencieas Económicas
            ['name' => 'Administración de Empresas', 'faculty_id' => 4],
            ['name' => 'Contaduría Pública', 'faculty_id' => 4],
            ['name' => 'Economía', 'faculty_id' => 4],
            //Ciencias Humanas
            ['name' => 'Antropología', 'faculty_id' => 5],
            ['name' => 'Español y Filología Clásica', 'faculty_id' => 5],
            ['name' => 'Estudios Literarios', 'faculty_id' => 5],
            ['name' => 'Filología e Idiomas - Alemán', 'faculty_id' => 5],
            ['name' => 'Filología e Idiomas - Humanidades Clásicas', 'faculty_id' => 5],
            ['name' => 'Filología e Idiomas  - Francés', 'faculty_id' => 5],
            ['name' => 'Filología e Idiomas - Inglés', 'faculty_id' => 5],
            ['name' => 'Filosofía', 'faculty_id' => 5],
            ['name' => 'Geografía', 'faculty_id' => 5],
            ['name' => 'Historia', 'faculty_id' => 5],
            ['name' => 'Lingüística', 'faculty_id' => 5],
            ['name' => 'Psicología', 'faculty_id' => 5],
            ['name' => 'Sociología', 'faculty_id' => 5],
            ['name' => 'Trabajo Social', 'faculty_id' => 5],
            //Derecho, Ciencias Políticas y Sociales
            ['name' => 'Ciencia Política', 'faculty_id' => 6],
            ['name' => 'Derecho', 'faculty_id' => 6],
            //Enfermería
            ['name' => 'Enfermería', 'faculty_id' => 7],
            //Ingeniería
            ['name' => 'Ingeniería Agrícola', 'faculty_id' => 8],
            ['name' => 'Ingeniería Civil', 'faculty_id' => 8],
            ['name' => 'Ingeniería de Sistemas y Computación', 'faculty_id' => 8],
            ['name' => 'Ingeniería Eléctrica', 'faculty_id' => 8],
            ['name' => 'Ingeniería Electrónica', 'faculty_id' => 8],
            ['name' => 'Ingeniería Industrial', 'faculty_id' => 8],
            ['name' => 'Ingeniería Mecánica', 'faculty_id' => 8],
            ['name' => 'Ingeniería Mecatrónica', 'faculty_id' => 8],
            ['name' => 'Ingeniería Química', 'faculty_id' => 8],
            //Medicina
            ['name' => 'Fisioterapia', 'faculty_id' => 9],
            ['name' => 'Fonoaudiología', 'faculty_id' => 9],
            ['name' => 'Medicina', 'faculty_id' => 9],
            ['name' => 'Nutrición y Dietética', 'faculty_id' => 9],
            ['name' => 'Terapia Ocupacional', 'faculty_id' => 9],
            //Medicina Veterinaria y de Zootecnia
            ['name' => 'Medicina Veterinaria', 'faculty_id' => 10],
            ['name' => 'Zootecnia', 'faculty_id' => 10],
            //Odontología
            ['name' => 'Odontología', 'faculty_id' => 11]

        ];

        Course::insert($data);
    }
}

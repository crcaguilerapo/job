<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(LevelSeeder::class);
        $this->call(FacultySeeder::class);
        $this->call(CourseSeeder::class);
    }
}

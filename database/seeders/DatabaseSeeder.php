<?php

namespace Database\Seeders;

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
        $this->call([
            FacultyTableSeeder::class,
            DepartmentTableSeeder::class,
            RoomTableSeeder::class,
            GroupTableSeeder::class,
            UserTableSeeder::class,
            AcademicCouncilTableSeeder::class,
            SheikhRasalHallTableSeeder::class,
            NoticeBoardTableSeeder::class
        ]);
    }
}

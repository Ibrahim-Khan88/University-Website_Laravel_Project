<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designations')->insert([
            [
                "name" => "Professor"
            ],
            [
                "name" => "Associate Professor"
            ],
            [
                "name" => "Assistant Professor"
            ],
            [
                "name" => "Lecturer"
            ],
        ]);
    }
}

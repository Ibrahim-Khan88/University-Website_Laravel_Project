<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
            [
                "grade" => "1"
            ],
            [
                "grade" => "2"
            ],
            [
                "grade" => "3"
            ],
            [
                "grade" => "4"
            ],
            [
                "grade" => "5"
            ],
            [
                "grade" => "6"
            ],
            [
                "grade" => "7"
            ],
            [
                "grade" => "8"
            ],
            [
                "grade" => "9"
            ],
            [
                "grade" => "10"
            ],
            [
                "grade" => "11"
            ],

            [
                "grade" => "12"
            ],
            [
                "grade" => "13"
            ],
            [
                "grade" => "14"
            ],
            [
                "grade" => "15"
            ],
            [
                "grade" => "16"
            ],
            [
                "grade" => "17"
            ],
            [
                "grade" => "18"
            ],
            [
                "grade" => "19"
            ],
            [
                "grade" => "20"
            ]
        ]);
    }
}

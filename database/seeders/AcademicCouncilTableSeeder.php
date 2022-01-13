<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AcademicCouncilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('academic_councils')->insert([
            [
                "role" => "Chairman",
                "user_id" => "1"
            ],
            [
                "role" => "Member",
                "user_id" => "3"
            ],
            [
                "role" => "Member",
                "user_id" => "9"
            ],
            [
                "role" => "Member",
                "user_id" => "10"
            ],
        ]);
    }
}

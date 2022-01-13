<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SheikhRasalHallTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sheikh_rasal_halls')->insert([
            [
                "role" => "Provost",
                "user_id" => "12"
            ],
            [
                "role" => "Member",
                "user_id" => "11"
            ],
            [
                "role" => "Member",
                "user_id" => "13"
            ]
        ]);
    }
}

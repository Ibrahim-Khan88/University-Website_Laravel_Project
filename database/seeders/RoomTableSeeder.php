<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            [
                "roomNumber" => "301 Administrative Building",
                "description" => "Administrative Building",
                "department_id" => 10
            ],
            [
                "roomNumber" => "302 Administrative Building",
                "description" => "Administrative Building",
                "department_id" => 10
            ],
            [
                "roomNumber" => "303 Administrative Building",
                "description" => "Administrative Building",
                "department_id" => 10
            ],
            [
                "roomNumber" => "304 Administrative Building",
                "description" => "Administrative Building",
                "department_id" => 10
            ],
            [
                "roomNumber" => "305 Administrative Building",
                "description" => "Administrative Building",
                "department_id" => 10
            ],
            [
                "roomNumber" => "406 Administrative Building",
                "description" => "Administrative Building",
                "department_id" => 10
            ],
            [
                "roomNumber" => "407 Administrative Building",
                "description" => "Administrative Building",
                "department_id" => 10
            ],
            [
                "roomNumber" => "408 Administrative Building",
                "description" => "Administrative Building",
                "department_id" => 10
            ],
            [
                "roomNumber" => "409 Administrative Building",
                "description" => "Administrative Building",
                "department_id" => 10
            ],
            [
                "roomNumber" => "410 Administrative Building",
                "description" => "Administrative Building",
                "department_id" => 10
            ],
            [
                "roomNumber" => "310 Administrative Building",
                "description" => "Administrative Building",
                "department_id" => 10
            ],
            [
                "roomNumber" => "401 Academic Building",
                "description" => "Academic Building",
                "department_id" => 1
            ],
            [
                "roomNumber" => "402 Academic Building",
                "description" => "Academic Building",
                "department_id" => 1
            ],
            [
                "roomNumber" => "403 Academic Building",
                "description" => "Academic Building",
                "department_id" => 1
            ],
            [
                "roomNumber" => "404 Academic Building",
                "description" => "Academic Building",
                "department_id" => 1
            ],
            [
                "roomNumber" => "405 Academic Building",
                "description" => "Academic Building",
                "department_id" => 1
            ],
            [
                "roomNumber" => "406 Academic Building",
                "description" => "Academic Building",
                "department_id" => 1
            ],
            [
                "roomNumber" => "407 Academic Building",
                "description" => "Academic Building",
                "department_id" => 1
            ],


        ]);
    }
}

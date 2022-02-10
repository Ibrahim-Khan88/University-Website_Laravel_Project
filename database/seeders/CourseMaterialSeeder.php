<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_materials')->insert([
            [
                "discription" => "dummy value 1",
                "user_id" => "1",
                "users_registration_request_id" => null
            ],
            [
                "discription" => "dummy value 2",
                "user_id" => "1",
                "users_registration_request_id" => null
            ],
            [
                "discription" => "dummy value 3",
                "user_id" => "1",
                "users_registration_request_id" => null
            ],
            [
                "discription" => "dummy value 1",
                "user_id" => "2",
                "users_registration_request_id" => null
            ],
            [
                "discription" => "dummy value 2",
                "user_id" => "2",
                "users_registration_request_id" => null
            ],
            [
                "discription" => "dummy value 3",
                "user_id" => "2",
                "users_registration_request_id" => null
            ],
            [
                "discription" => "dummy value 1",
                "users_registration_request_id" => "1",
                "user_id" => null
            ],
            [
                "discription" => "dummy value 2",
                "users_registration_request_id" => "1",
                "user_id" => null
            ],
        ]);
    }
}

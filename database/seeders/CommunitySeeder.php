<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('communities')->insert([
            [
                "name" => "Academic Council"
            ],
            [
                "name" => "Reject Board"
            ],
            [
                "name" => "Planing And Development Community"
            ],
            [
                "name" => "Sheikh Rasal Hall"
            ],
            [
                "name" => "Sadinota Dibos Hall"
            ],
            [
                "name" => "Bijoy Dibos Hall"
            ],
            [
                "name" => "Proctor Office"
            ],
            [
                "name" => "Examinations Controller Office"
            ],
            [
                "name" => "University Library"
            ],
            [
                "name" => "Medical Center"
            ],
            [
                "name" => "Ict Cell"
            ],
            [
                "name" => "Transport Office"
            ],
            [
                "name" => "Computer Science and Engineering"
            ],
            [
                "name" => "Electrical and Electronic Engineering"
            ],
            [
                "name" => "Applied Chemistry and Chemical Engineering"
            ]
        ]);   
    }
}

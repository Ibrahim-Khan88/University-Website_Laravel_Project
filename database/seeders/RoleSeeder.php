<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                "name" => "SuperAdmin"
            ],
            [
                "name" => "Computer Science and Engineering"
            ],
            [
                "name" => "Electrical and Electronic Engineerin"
            ],
            [
                "name" => "Applied Chemistry and Chemical Engineering"
            ], 
            [
                "name" => "Ict Cell" 
            ],
            [
                "name" => "Medical Center" 
            ],
            [
                "name" => "University Library" 
            ],
            [
                "name" => "Transport Office" 
            ],
            [
                "name" => "Examinations Controller Office" 
            ],
            [
                "name" => "Sheikh Rasal Hall" 
            ],
            [
                "name" => "Academic Council"
            ],
            [
                "name" => "Reject Board"
            ],
            [
                "name" => "Planning And Development Community"
            ],
            [
                "name" => "Sadinota Dibos Hall"
            ],
            [
                "name" => "Bijoy Dibos Hall"
            ],
            [
                "name" => "Proctor Office"
            ]
        ]);    
    }
}

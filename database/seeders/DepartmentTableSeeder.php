<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            [
                'name' => "Computer Science and Engineering",
                "faculty_id" => "1"
            ],
            [
                'name' => "Electrical and Electronic Engineering",
                "faculty_id" => "1"
            ], 
            [
                'name' => "Applied Chemistry and Chemical Engineering",
                "faculty_id" => "1"
            ],
            [
                'name' => "Civil Engineering",
                "faculty_id" => "1"
            ],
            [
                'name' => "Food and Agroprocess Engineering",
                "faculty_id" => "1"
            ],
            [
                'name' => "Architecture",
                "faculty_id" => "1"
            ],
            [
                'name' => "Mathematics",
                "faculty_id" => "2"
            ],
            [
                'name' => "Statistics",
                "faculty_id" => "2"
            ],
            [
                'name' => "Chemistry",
                "faculty_id" => "2"
            ],
            [
                'name' => "Physics",
                "faculty_id" => "2"
            ],
            [
                'name' => "Environmental Science & Disaster Management",
                "faculty_id" => "2"
            ],
            [
                'name' => "Pharmacy",
                "faculty_id" => "3"
            ],
            [
                'name' => "Biotechnology and Genetic Engineering",
                "faculty_id" => "3"
            ],
            [
                'name' => "Biochemistry and Molecular Biolog",
                "faculty_id" => "3"
            ],
            [
                'name' => "Psychology",
                "faculty_id" => "3"
            ],
            [
                'name' => "Botany",
                "faculty_id" => "3"
            ],
            [
                'name' => "English",
                "faculty_id" => "4"
            ],
            [
                'name' => "Bangla",
                "faculty_id" => "4"
            ],
            [
                'name' => "History",
                "faculty_id" => "4"
            ],
            [
                'name' => "Sociology",
                "faculty_id" => "5"
            ],
            [
                'name' => "Public Administration",
                "faculty_id" => "5"
            ],
            [
                'name' => "International Relations",
                "faculty_id" => "5"
            ],
            [
                'name' => "Economics",
                "faculty_id" => "5"
            ],
            [
                'name' => "Political Science",
                "faculty_id" => "5"
            ],
            [
                'name' => "Management Studies",
                "faculty_id" => "6"
            ],
            [
                'name' => "Accounting and Information Systems",
                "faculty_id" => "6"
            ],
            [
                'name' => "Marketing",
                "faculty_id" => "6"
            ],
            [
                'name' => "Finance and Banking",
                "faculty_id" => "6"
            ],
            [
                'name' => "Tourism and Hospitality Managemen",
                "faculty_id" => "6"
            ],
            [
                'name' => "Law",
                "faculty_id" => "7"
            ],
            [
                'name' => "Agriculture",
                "faculty_id" => "8"
            ],
            [
                'name' => "Fisheries and Marine Bioscience",
                "faculty_id" => "8"
            ],
            [
                'name' => "Livestock Science and Veterinary Medicineaw",
                "faculty_id" => "8"
            ]


            
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            [ "name" => "Reject Board"],
            [ "name" => "Academic Council"],
            [ "name" => "Sheikh Rasal Hall"],
            [ "name" => "Engineering Faculty"],
            [ "name" => "Science Faculty"],
            [ "name" => "Life Science Faculty"],
            [ "name" => "Humanities Faculty"],
            [ "name" => "Social Science Faculty"], 
            [ "name" => "Business Studies Faculty"],
            [ "name" => "Law Faculty"],
            [
                'name' => "Computer Science and Engineering"
            ],
            [
                'name' => "Electrical and Electronic Engineering"
            ], 
            [
                'name' => "Applied Chemistry and Chemical Engineering"
            ],
            [
                'name' => "Civil Engineering"
            ],
            [
                'name' => "Food and Agroprocess Engineering"
            ],
            [
                'name' => "Architecture"
            ],
            [
                'name' => "Mathematics"
            ],
            [
                'name' => "Statistics"
            ],
            [
                'name' => "Chemistry"
            ],
            [
                'name' => "Physics"
            ],
            [
                'name' => "Environmental Science & Disaster Management"
            ],
            [
                'name' => "Pharmacy"
            ],
            [
                'name' => "Biotechnology and Genetic Engineering"
            ],
            [
                'name' => "Biochemistry and Molecular Biolog"
            ],
            [
                'name' => "Psychology"
            ],
            [
                'name' => "Botany"
            ],
            [
                'name' => "English"
            ],
            [
                'name' => "Bangla"
            ],
            [
                'name' => "History"
            ],
            [
                'name' => "Sociology"
            ],
            [
                'name' => "Public Administration"
            ],
            [
                'name' => "International Relations"
            ],
            [
                'name' => "Economics"
            ],
            [
                'name' => "Political Science"
            ],
            [
                'name' => "Management Studies"
            ],
            [
                'name' => "Accounting and Information Systems"
            ],
            [
                'name' => "Marketing"
            ],
            [
                'name' => "Finance and Banking"
            ],
            [
                'name' => "Tourism and Hospitality Managemen"
            ],
            [
                'name' => "Law"
            ]

        ]);
    }
}

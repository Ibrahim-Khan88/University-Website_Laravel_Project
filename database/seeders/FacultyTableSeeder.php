<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacultyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faculties')->insert([
            [ "name" => "Engineering Faculty"],
            [ "name" => "Science Faculty"],
            [ "name" => "Life Science Faculty"],
            [ "name" => "Humanities Faculty"],
            [ "name" => "Social Science Faculty"], 
            [ "name" => "Business Studies Faculty"],
            [ "name" => "Law Faculty"], 
            [ "name" => "Agriculture"]
        ]);
    }
}

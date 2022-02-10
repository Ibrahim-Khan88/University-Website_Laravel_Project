<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommunityUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('community_user')->insert([
            [
                "community_id" => 1,
                "user_id" => 1,
                "role" => "Chairman"
            ],
            [
                "community_id" => 2,
                "user_id" => 1,
                "role" => "Chairman"
            ],

            [
                "community_id" => 11,
                "user_id" => 1,
                "role" => "Chairman"
            ],
            [
                "community_id" => 8,
                "user_id" => 1,
                "role" => "Chairman"
            ],
            [
                "community_id" => 4,
                "user_id" => 1,
                "role" => "Chairman"
            ],
            [
                "community_id" => 1,
                "user_id" => 2,
                "role" => "member"
            ],
            [
                "community_id" => 3,
                "user_id" => 2,
                "role" => "member"
            ],
            [
                "community_id" => 4,
                "user_id" => 3,
                "role" => "member"
            ],
            [
                "community_id" => 3,
                "user_id" => 3,
                "role" => "member"
            ],
            [
                "community_id" => 4,
                "user_id" => 6,
                "role" => "Provost"
            ],
            [
                "community_id" => 12,
                "user_id" => 7,
                "role" => "Administrator"
            ],
            [
                "community_id" => 9,
                "user_id" => 4,
                "role" => "Member"
            ],
            [
                "community_id" => 10,
                "user_id" => 5,
                "role" => "Senior Medical Officer"
            ]
        ]);  
    }
}

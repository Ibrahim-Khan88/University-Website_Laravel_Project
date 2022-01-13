<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticeBoardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notice_boards')->insert([
            [
                'title' => "Academic Council",
                "body" => "Academic Council post one",
                "user_id" => 9,
                "group_id" => 2
            ],
            [
                'title' => "Academic Council",
                "body" => "Academic Council post 2",
                "user_id" => 3,
                "group_id" => 2
            ],
            [
                'title' => "Academic Council",
                "body" => "Academic Council post 3",
                "user_id" => 1,
                "group_id" => 2
            ],
            [
                'title' => "Academic Council",
                "body" => "Academic Council post 4",
                "user_id" => 10,
                "group_id" => 2
            ],
            [
                'title' => "Sheikh Rasal Hall",
                "body" => "Sheikh Rasal Hall post 1",
                "user_id" => 11,
                "group_id" => 3
            ],
            [
                'title' => "Sheikh Rasal Hall",
                "body" => "Sheikh Rasal Hall post 2",
                "user_id" => 12,
                "group_id" => 3
            ],
            [
                'title' => "Sheikh Rasal Hall",
                "body" => "Sheikh Rasal Hall post 3",
                "user_id" => 13,
                "group_id" => 3
            ],
        ]);   
    }
}

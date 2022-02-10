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
                'title' => "This is notice title 1",
                "body" => "IDE example Incredible Tooling Build features quickly with simple, declarative templates. Extend the template language with your own components and use a wide array of existing components. Get immediate Angular-specific help and feedback with nearly every
                IDE and editor. All this comes together so you can focus on building amazing apps rather than trying to make the code work. IDE example Incredible Tooling Build features quickly with simple, declarative templates.
                Extend the template language with your own components and use a wide array of existing components. Get immediate Angular-specific help and feedback with nearly every IDE and editor. All this comes together so
                you can focus on building amazing apps rather than trying to make the code work.",
                "user_id" => 1,
                "category_id" => 2,
                "community_id" => null,
            ],
            [
                'title' => "This is notice title 2",
                "body" => "IDE example Incredible Tooling Build features quickly with simple, declarative templates. Extend the template language with your own components and use a wide array of existing components. Get immediate Angular-specific help and feedback with nearly every
                IDE and editor. All this comes together so you can focus on building amazing apps rather than trying to make the code work. IDE example Incredible Tooling Build features quickly with simple, declarative templates.
                Extend the template language with your own components and use a wide array of existing components. Get immediate Angular-specific help and feedback with nearly every IDE and editor. All this comes together so
                you can focus on building amazing apps rather than trying to make the code work.",
                "user_id" => 1,
                "category_id" => 2,
                "community_id" => null,
            ],
            [
                'title' => "This is notice title 3",
                "body" => "IDE example Incredible Tooling Build features quickly with simple, declarative templates. Extend the template language with your own components and use a wide array of existing components. Get immediate Angular-specific help and feedback with nearly every
                IDE and editor. All this comes together so you can focus on building amazing apps rather than trying to make the code work. IDE example Incredible Tooling Build features quickly with simple, declarative templates.
                Extend the template language with your own components and use a wide array of existing components. Get immediate Angular-specific help and feedback with nearly every IDE and editor. All this comes together so
                you can focus on building amazing apps rather than trying to make the code work.",
                "user_id" => 1,
                "category_id" => null,
                "community_id" => 2,
            ],
            [
                'title' => "This is notice title 4",
                "body" => "IDE example Incredible Tooling Build features quickly with simple, declarative templates. Extend the template language with your own components and use a wide array of existing components. Get immediate Angular-specific help and feedback with nearly every
                IDE and editor. All this comes together so you can focus on building amazing apps rather than trying to make the code work. IDE example Incredible Tooling Build features quickly with simple, declarative templates.
                Extend the template language with your own components and use a wide array of existing components. Get immediate Angular-specific help and feedback with nearly every IDE and editor. All this comes together so
                you can focus on building amazing apps rather than trying to make the code work.",
                "user_id" => 2,
                "category_id" => null,
                "community_id" => 2,
            ],
            [
                'title' => "This is notice title 5",
                "body" => "IDE example Incredible Tooling Build features quickly with simple, declarative templates. Extend the template language with your own components and use a wide array of existing components. Get immediate Angular-specific help and feedback with nearly every
                IDE and editor. All this comes together so you can focus on building amazing apps rather than trying to make the code work. IDE example Incredible Tooling Build features quickly with simple, declarative templates.
                Extend the template language with your own components and use a wide array of existing components. Get immediate Angular-specific help and feedback with nearly every IDE and editor. All this comes together so
                you can focus on building amazing apps rather than trying to make the code work.",
                "user_id" => 1,
                "category_id" => null,
                "community_id" => 3,
            ],
            [
                'title' => "This is notice title 6",
                "body" => "IDE example Incredible Tooling Build features quickly with simple, declarative templates. Extend the template language with your own components and use a wide array of existing components. Get immediate Angular-specific help and feedback with nearly every
                IDE and editor. All this comes together so you can focus on building amazing apps rather than trying to make the code work. IDE example Incredible Tooling Build features quickly with simple, declarative templates.
                Extend the template language with your own components and use a wide array of existing components. Get immediate Angular-specific help and feedback with nearly every IDE and editor. All this comes together so
                you can focus on building amazing apps rather than trying to make the code work.",
                "user_id" => 1,
                "category_id" => null,
                "community_id" => 2,
            ],
            [
                'title' => "This is notice title 7",
                "body" => "IDE example Incredible Tooling Build features quickly with simple, declarative templates. Extend the template language with your own components and use a wide array of existing components. Get immediate Angular-specific help and feedback with nearly every
                IDE and editor. All this comes together so you can focus on building amazing apps rather than trying to make the code work. IDE example Incredible Tooling Build features quickly with simple, declarative templates.
                Extend the template language with your own components and use a wide array of existing components. Get immediate Angular-specific help and feedback with nearly every IDE and editor. All this comes together so
                you can focus on building amazing apps rather than trying to make the code work.",
                "user_id" => 1,
                "category_id" => null,
                "community_id" => 1,
            ],
        ]);   
    }
}

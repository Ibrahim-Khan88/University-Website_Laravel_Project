<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersRegistrationRequestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_registration_requests')->insert([
            [
                'name' => "User Registration",
                "password"=>bcrypt("11"),
                "grade_name" => "1",
                "category_name" => "Faculty Member",
                "room_number" => "301 Administrative Building",
                "designation_name" => "Assistant Professor",
                "department_name"=> "Computer Science and Engineering",
                "website" => "www.userregistrationdummydata.com",
                "phone" => "0000000000",
                "email" => "dummydata123@gmail.com",
                "biographyFiledOfSpecialization" => "dummy data"
            ],
            [
                'name' => "User Registration 1",
                "password"=>bcrypt("11"),
                "grade_name" => "1",
                "category_name" => "Faculty Member",
                "room_number" => "301 Administrative Building",
                "designation_name" => "Assistant Professor",
                "department_name"=> "Computer Science and Engineering",
                "website" => "www.userregistrationdummydata.com",
                "phone" => "0000000000",
                "email" => "dummydata2@gmail.com",
                "biographyFiledOfSpecialization" => "dummy data"
            ],
            [
                'name' => "User Registration 2",
                "password"=>bcrypt("11"),
                "grade_name" => "1",
                "category_name" => "Faculty Member",
                "room_number" => "301 Administrative Building",
                "designation_name" => "Assistant Professor",
                "department_name"=> "Computer Science and Engineering",
                "website" => "www.userregistrationdummydata.com",
                "phone" => "0000000000",
                "email" => "dummydata3@gmail.com",
                "biographyFiledOfSpecialization" => "dummy data"
            ],
            [
                'name' => "User Registration 4" ,
                "password"=>bcrypt("11"),
                "grade_name" => "3",
                "category_name" => "Staff",
                "room_number" => "301 Administrative Building",
                "designation_name" => null,
                "department_name"=> "Computer Science and Engineering",
                "website" => "www.userregistrationdummydata.com",
                "phone" => "0000000000",
                "email" => "dummydata4@gmail.com",
                "biographyFiledOfSpecialization" => "dummy data"
            ],
            
            [
                'name' => "User Registration 5",
                "password"=>bcrypt("11"),
                "grade_name" => "1",
                "category_name" => "Faculty Member",
                "room_number" => "301 Administrative Building",
                "designation_name" => "Assistant Professor",
                "department_name"=> "Computer Science and Engineering",
                "website" => "www.userregistrationdummydata.com",
                "phone" => "0000000000",
                "email" => "dummydata5@gmail.com",
                "biographyFiledOfSpecialization" => "dummy data"
            ],
            [
                'name' => "User Registration 6",
                "password"=>bcrypt("11"),
                "grade_name" => "1",
                "category_name" => "Faculty Member",
                "room_number" => "301 Administrative Building",
                "designation_name" => "Assistant Professor",
                "department_name"=> "Computer Science and Engineering",
                "website" => "www.userregistrationdummydata.com",
                "phone" => "0000000000",
                "email" => "dummydata6@gmail.com",
                "biographyFiledOfSpecialization" => "dummy data"
            ],
            [
                'name' => "User Registration 7",
                "password"=>bcrypt("11"),
                "grade_name" => "1",
                "category_name" => "Faculty Member",
                "room_number" => "301 Administrative Building",
                "designation_name" => "Assistant Professor",
                "department_name"=> "Computer Science and Engineering",
                "website" => "www.userregistrationdummydata.com",
                "phone" => "0000000000",
                "email" => "dummydata7@gmail.com",
                "biographyFiledOfSpecialization" => "dummy data"
            ],
            [
                'name' => "User Registration 8",
                "password"=>bcrypt("11"),
                "grade_name" => "1",
                "category_name" => "Faculty Member",
                "room_number" => "301 Administrative Building",
                "designation_name" => "Assistant Professor",
                "department_name"=> "Computer Science and Engineering",
                "website" => "www.userregistrationdummydata.com",
                "phone" => "0000000000",
                "email" => "dummydata8@gmail.com",
                "biographyFiledOfSpecialization" => "dummy data"
            ],
            [
                'name' => "User Registration 8",
                "password"=>bcrypt("11"),
                "grade_name" => "1",
                "category_name" => "Faculty Member",
                "room_number" => "301 Administrative Building",
                "designation_name" => "Assistant Professor",
                "department_name"=> "Computer Science and Engineering",
                "website" => "www.userregistrationdummydata.com",
                "phone" => "0000000000",
                "email" => "dummydata1239@gmail.com",
                "biographyFiledOfSpecialization" => "dummy data"
            ],
            [
                'name' => "Student 1",
                "password"=>bcrypt("11"),
                "grade_name" => null,
                "category_name" => "Student",
                "room_number" => null,
                "designation_name" => null,
                "department_name"=> "Computer Science and Engineering",
                "website" => "www.userregistrationdummydata.com",
                "phone" => "0000000000",
                "email" => "dummydatas1@gmail.com",
                "biographyFiledOfSpecialization" => null
            ],
            [
                'name' => "Student 2",
                "password"=>bcrypt("11"),
                "grade_name" => null,
                "category_name" => "Student",
                "room_number" => null,
                "designation_name" => null,
                "department_name"=> "Computer Science and Engineering",
                "website" => "www.userregistrationdummydata.com",
                "phone" => "0000000000",
                "email" => "dummydatas2@gmail.com",
                "biographyFiledOfSpecialization" => null
            ],
            [
                'name' => "Student 3",
                "password"=>bcrypt("11"),
                "grade_name" => null,
                "category_name" => "Student",
                "room_number" => null,
                "designation_name" => null,
                "department_name"=> "Computer Science and Engineering",
                "website" => "www.userregistrationdummydata.com",
                "phone" => "0000000000",
                "email" => "dummydatas3@gmail.com",
                "biographyFiledOfSpecialization" => null
            ],
            [
                'name' => "Student 1",
                "password"=>bcrypt("11"),
                "grade_name" => null,
                "category_name" => "Student",
                "room_number" => null,
                "designation_name" => null,
                "department_name"=> "Electrical and Electronic Engineering",
                "website" => "www.userregistrationdummydata.com",
                "phone" => "0000000000",
                "email" => "dummydatas4@gmail.com",
                "biographyFiledOfSpecialization" => null
            ],
            [
                'name' => "Student 2",
                "password"=>bcrypt("11"),
                "grade_name" => null,
                "category_name" => "Student",
                "room_number" => null,
                "designation_name" => null,
                "department_name"=> "Electrical and Electronic Engineering",
                "website" => "www.userregistrationdummydata.com",
                "phone" => "0000000000",
                "email" => "dummydatas5@gmail.com",
                "biographyFiledOfSpecialization" => null
            ],
            [
                'name' => "Student 3",
                "password"=>bcrypt("11"),
                "grade_name" => null,
                "category_name" => "Student",
                "room_number" => null,
                "designation_name" => null,
                "department_name"=> "Electrical and Electronic Engineering",
                "website" => "www.userregistrationdummydata.com",
                "phone" => "0000000000",
                "email" => "dummydatas6@gmail.com",
                "biographyFiledOfSpecialization" => null
            ]

        ]);
    }
}

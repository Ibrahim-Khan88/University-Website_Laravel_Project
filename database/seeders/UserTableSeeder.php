<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => "Professor Dr. A.Q.M. Mahbub",
                "password"=>bcrypt("11"),
                "department_id" => null,
                "category_id" => 2,
                "grade_id" => 1,
                "room_id" => 2,
                "designation_id"=>1,
                "website" => "www.dummydata.com",
                "phone" => "0000000000",
                "email" => "dummydata@gmail.com",
                "biographyFiledOfSpecialization" => "dummy data"
            ],
            [
                'name' => "Professor Dr. Md. Abdul Rohim Khan",
                "password"=>bcrypt("11"),
                "designation_id"=> 1,
                "department_id" => 7,
                "category_id" => 2,
                "grade_id" => 1,
                "room_id" => 3,
                "phone" => "dummy data",
                "email" => "dummydata1@gmail.com",
                "website" => "dummy data",
                "biographyFiledOfSpecialization" => "dummy data"
            ],
            [
                'name' => "Dr. Saleh Ahmed",
                "password"=>bcrypt("11"),
                "department_id" => "1",
                "designation_id"=> 2,
                "category_id" => 2,
                "grade_id" => 1,
                "room_id" => 16,
                "phone" => "dummy data",
                "email" => "dummydata2@gmail.com",
                "website" => "dummy data",
                "biographyFiledOfSpecialization" => "dummy data"
            ],
            [
                'name' => "Md Nasirul Islam",
                "password"=>bcrypt("11"),
                "department_id" => null,
                "designation_id"=> null,
                "category_id" => 3,
                "grade_id" => 2,
                "room_id" => 16,
                "phone" => "dummy data",
                "email" => "nasirul777@gmail.com",
                "website" => "dummy data",
                "biographyFiledOfSpecialization" => "dummy data"
            ],
            [
                'name' => "Avishek Biswas",
                "password"=>bcrypt("11"),
                "department_id" => null,
                "designation_id"=> null,
                "category_id" => 3,
                "grade_id" => 1,
                "room_id" => 16,
                "phone" => "dummy data",
                "email" => "Biswas@gmail.com",
                "website" => "dummy data",
                "biographyFiledOfSpecialization" => "dummy data"
            ],
            [
                'name' => "Md. Faykuzzaman Mia",
                "password"=>bcrypt("11"),
                "designation_id" => 3,
                "department_id" => 26,
                "category_id" => 2,
                "room_id" => 5,
                "grade_id" => 1,
                "phone" => "01722000165",
                "email" => "fzaman.ru@gmail.com",
                "website" => "dummy data",
                "biographyFiledOfSpecialization" => "dummy data"
            ],
            [
                'name' => "Tapos Bala",
                "password"=>bcrypt("11"),
                "designation_id" => 2,
                "department_id" => 28,
                "category_id" => 2,
                "room_id" => 5,
                "grade_id" => 1,
                "phone" => "01722000165",
                "email" => "dummyvalue@gmail.com",
                "website" => "dummy data",
                "biographyFiledOfSpecialization" => "dummy data"
            ],
            [
                'name' => "Mr CSE",
                "password"=>bcrypt("11"),
                "designation_id" => null,
                "department_id" => 1,
                "category_id" => 3,
                "room_id" => 5,
                "grade_id" => 2,
                "phone" => "01722000165",
                "email" => "dummyvaluecse@gmail.com",
                "website" => "dummy data",
                "biographyFiledOfSpecialization" => "dummy data"
            ],
            [
                'name' => "Mr EEE",
                "password"=>bcrypt("11"),
                "designation_id" => null,
                "department_id" => 2,
                "category_id" => 3,
                "room_id" => 4,
                "grade_id" => 2,
                "phone" => "01722000165",
                "email" => "dummyvalueeee@gmail.com",
                "website" => "dummy data",
                "biographyFiledOfSpecialization" => "dummy data"
            ],
            
            
            // [
            //     'name' => "Professor Dr. N.A Sattar",
            //     "password"=>bcrypt("11"),
            //     "designation" => "Professor",
            //     "department_id" => "12",
            //     "grade_id" => null,
            //     "room_id" => 8,
            //     "phone" => "dummy data",
            //     "email" => "dummydata3@gmail.com",
            //     "website" => "dummy data",
            //     "biographyFiledOfSpecialization" => "dummy data",
            //     "researchInterest" => "dummy data",
            //     "currentResearchAndCollaboration" => "dummy data",
            //     "fellowshipOfScientificAndProfessionalSociaties" => "dummy data",
            //     "journals"=>"dummy data",
            //     "awardAndRecognition" => "dummy data",
            //     "publication" => "dummy data",
            //     "conference" => "dummy data",
            //     "graduateSupervision" => "dummy data",
            //     "courseOffered" => "dummy data",
            //     "courseMaterial" => "dummy data",
            //     "teachingExperience" => "dummy data",
            //     "educationExperience" => "dummy data",
            //     "researchExperience" => "dummy data"
            // ],
            // [
            //     'name' => "Dr. Mojahar Ali",
            //     "password"=>bcrypt("11"),
            //     "designation" => "Professor",
            //     "department_id" => "31",
            //     "grade_id" => null,
            //     "room_id" => 4,
            //     "phone" => "dummy data",
            //     "email" => "dummydata4@gmail.com",
            //     "website" => "dummy data",
            //     "biographyFiledOfSpecialization" => "dummy data",
            //     "researchInterest" => "dummy data",
            //     "currentResearchAndCollaboration" => "dummy data",
            //     "fellowshipOfScientificAndProfessionalSociaties" => "dummy data",
            //     "journals"=>"dummy data",
            //     "awardAndRecognition" => "dummy data",
            //     "publication" => "dummy data",
            //     "conference" => "dummy data",
            //     "graduateSupervision" => "dummy data",
            //     "courseOffered" => "dummy data",
            //     "courseMaterial" => "dummy data",
            //     "teachingExperience" => "dummy data",
            //     "educationExperience" => "dummy data",
            //     "researchExperience" => "dummy data"
            // ],
            // [
            //     'name' => "Dr. Mrinal Kanti Baowaly",
            //     "password"=>bcrypt("11"),
            //     "designation" => "Associate Professor",
            //     "department_id" => "1",
            //     "grade_id" => null,
            //     "room_id" => 13,
            //     "phone" => "+8801913912066",
            //     "email" => "baowaly@gmail.com",
            //     "website" => "dummy data",
            //     "biographyFiledOfSpecialization" => "dummy data",
            //     "researchInterest" => "dummy data",
            //     "currentResearchAndCollaboration" => "dummy data",
            //     "fellowshipOfScientificAndProfessionalSociaties" => "dummy data",
            //     "journals"=>"dummy data",
            //     "awardAndRecognition" => "dummy data",
            //     "publication" => "dummy data",
            //     "conference" => "dummy data",
            //     "graduateSupervision" => "dummy data",
            //     "courseOffered" => "dummy data",
            //     "courseMaterial" => "dummy data",
            //     "teachingExperience" => "dummy data",
            //     "educationExperience" => "dummy data",
            //     "researchExperience" => "dummy data"
            // ],
            // [
            //     'name' => "Md. Jamal Uddin",
            //     "password"=>bcrypt("11"),
            //     "designation" => "Assistant Professor",
            //     "department_id" => "1",
            //     "room_id" => 18,
            //     "grade_id" => null,
            //     "phone" => "+8801734-531900",
            //     "email" => "jamal.bsmrstu@gmail.com",
            //     "website" => "dummy data",
            //     "biographyFiledOfSpecialization" => "dummy data",
            //     "researchInterest" => "dummy data",
            //     "currentResearchAndCollaboration" => "dummy data",
            //     "fellowshipOfScientificAndProfessionalSociaties" => "dummy data",
            //     "journals"=>"dummy data",
            //     "awardAndRecognition" => "dummy data",
            //     "publication" => "dummy data",
            //     "conference" => "dummy data",
            //     "graduateSupervision" => "dummy data",
            //     "courseOffered" => "dummy data",
            //     "courseMaterial" => "dummy data",
            //     "teachingExperience" => "dummy data",
            //     "educationExperience" => "dummy data",
            //     "researchExperience" => "dummy data"
            // ],
            // [
            //     'name' => "Md. Nesarul Hoque",
            //     "password"=>bcrypt("11"),
            //     "designation" => "Assistant Professor",
            //     "department_id" => "1",
            //     "room_id" => 18,
            //     "grade_id" => 1,
            //     "phone" => "+8801712-820727",
            //     "email" => "mnhshisir@gmail.com",
            //     "website" => "dummy data",
            //     "biographyFiledOfSpecialization" => "dummy data",
            //     "researchInterest" => "dummy data",
            //     "currentResearchAndCollaboration" => "dummy data",
            //     "fellowshipOfScientificAndProfessionalSociaties" => "dummy data",
            //     "journals"=>"dummy data",
            //     "awardAndRecognition" => "dummy data",
            //     "publication" => "dummy data",
            //     "conference" => "dummy data",
            //     "graduateSupervision" => "dummy data",
            //     "courseOffered" => "dummy data",
            //     "courseMaterial" => "dummy data",
            //     "teachingExperience" => "dummy data",
            //     "educationExperience" => "dummy data",
            //     "researchExperience" => "dummy data"
            // ],
            // [
            //     'name' => "Rabiul Islam",
            //     "password"=>bcrypt("11"),
            //     "designation" => "Assistant Professor",
            //     "department_id" => "26",
            //     "grade_id" => 1,
            //     "room_id" => 7,
            //     "phone" => "01712944031",
            //     "email" => "rabiul.islam75@yahoo.com",
            //     "website" => "dummy data",
            //     "biographyFiledOfSpecialization" => "dummy data",
            //     "researchInterest" => "dummy data",
            //     "currentResearchAndCollaboration" => "dummy data",
            //     "fellowshipOfScientificAndProfessionalSociaties" => "dummy data",
            //     "journals"=>"dummy data",
            //     "awardAndRecognition" => "dummy data",
            //     "publication" => "dummy data",
            //     "conference" => "dummy data",
            //     "graduateSupervision" => "dummy data",
            //     "courseOffered" => "dummy data",
            //     "courseMaterial" => "dummy data",
            //     "teachingExperience" => "dummy data",
            //     "educationExperience" => "dummy data",
            //     "researchExperience" => "dummy data"
            // ],
            // [
            //     'name' => "Dr. Md. Abdullah Al Asad",
            //     "password"=>bcrypt("11"),
            //     "designation" => "Associate Professor",
            //     "department_id" => "2",
            //     "room_id" => 6,
            //     "grade_id" => 1,
            //     "phone" => "01712944031",
            //     "email" => "abdullah Al Asad@yahoo.com",
            //     "website" => "dummy data",
            //     "biographyFiledOfSpecialization" => "dummy data",
            //     "researchInterest" => "dummy data",
            //     "currentResearchAndCollaboration" => "dummy data",
            //     "fellowshipOfScientificAndProfessionalSociaties" => "dummy data",
            //     "journals"=>"dummy data",
            //     "awardAndRecognition" => "dummy data",
            //     "publication" => "dummy data",
            //     "conference" => "dummy data",
            //     "graduateSupervision" => "dummy data",
            //     "courseOffered" => "dummy data",
            //     "courseMaterial" => "dummy data",
            //     "teachingExperience" => "dummy data",
            //     "educationExperience" => "dummy data",
            //     "researchExperience" => "dummy data"
            // ],
            // [
            //     'name' => "Shihab Ahammed",
            //     "password"=>bcrypt("11"),
            //     "designation" => "Associate Professor",
            //     "department_id" => "2",
            //     "room_id" => 12,
            //     "grade_id" => 1,
            //     "phone" => "8801813127037",
            //     "email" => "shihabahammed4979@yahoo.com",
            //     "website" => "dummy data",
            //     "biographyFiledOfSpecialization" => "dummy data",
            //     "researchInterest" => "dummy data",
            //     "currentResearchAndCollaboration" => "dummy data",
            //     "fellowshipOfScientificAndProfessionalSociaties" => "dummy data",
            //     "journals"=>"dummy data",
            //     "awardAndRecognition" => "dummy data",
            //     "publication" => "dummy data",
            //     "conference" => "dummy data",
            //     "graduateSupervision" => "dummy data",
            //     "courseOffered" => "dummy data",
            //     "courseMaterial" => "dummy data",
            //     "teachingExperience" => "dummy data",
            //     "educationExperience" => "dummy data",
            //     "researchExperience" => "dummy data"
            // ],
            // [
            //     'name' => "Md. Faykuzzaman Mia",
            //     "password"=>bcrypt("11"),
            //     "designation" => "Assistant Professor",
            //     "department_id" => "2",
            //     "room_id" => 5,
            //     "grade_id" => 1,
            //     "phone" => "01722000165",
            //     "email" => "fzaman.ru@gmail.com",
            //     "website" => "dummy data",
            //     "biographyFiledOfSpecialization" => "dummy data",
            //     "researchInterest" => "dummy data",
            //     "currentResearchAndCollaboration" => "dummy data",
            //     "fellowshipOfScientificAndProfessionalSociaties" => "dummy data",
            //     "journals"=>"dummy data",
            //     "awardAndRecognition" => "dummy data",
            //     "publication" => "dummy data",
            //     "conference" => "dummy data",
            //     "graduateSupervision" => "dummy data",
            //     "courseOffered" => "dummy data",
            //     "courseMaterial" => "dummy data",
            //     "teachingExperience" => "dummy data",
            //     "educationExperience" => "dummy data",
            //     "researchExperience" => "dummy data"
            // ],
            // [
            //     'name' => "Mr X.",
            //     "password"=>bcrypt("11"),
            //     "designation" => "Assistant Professor",
            //     "department_id" => "2",
            //     "room_id" => 5,
            //     "grade_id" => 1,
            //     "phone" => "23456789",
            //     "email" => "x@gmail.com",
            //     "website" => "dummy data",
            //     "biographyFiledOfSpecialization" => "dummy data",
            //     "researchInterest" => "dummy data",
            //     "currentResearchAndCollaboration" => "dummy data",
            //     "fellowshipOfScientificAndProfessionalSociaties" => "dummy data",
            //     "journals"=>"dummy data",
            //     "awardAndRecognition" => "dummy data",
            //     "publication" => "dummy data",
            //     "conference" => "dummy data",
            //     "graduateSupervision" => "dummy data",
            //     "courseOffered" => "dummy data",
            //     "courseMaterial" => "dummy data",
            //     "teachingExperience" => "dummy data",
            //     "educationExperience" => "dummy data",
            //     "researchExperience" => "dummy data"
            // ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            GradeSeeder::class,
            CategorySeeder::class,
            DesignationSeeder::class,
            FacultyTableSeeder::class,
            DepartmentTableSeeder::class,
            RoomTableSeeder::class,
            GroupTableSeeder::class,
            UserTableSeeder::class,
            UsersRegistrationRequestTableSeeder::class,
            AcademicCouncilTableSeeder::class,
            SheikhRasalHallTableSeeder::class,
            GraduateSupervisionSeeder::class,
            ConferenceSeeder::class,
            CurrentResearchAndCollaborationSeeder::class,
            EducationExperienceSeeder::class,
            CourseMaterialSeeder::class,
            TeachingExperienceSeeder::class,
            CourseOfferedSeeder::class,
            AwardAndRecognitionSeeder::class,
            PublicationSeeder::class,
            ResearchExperienceSeeder::class,
            JournalsSeeder::class,
            RoleSeeder::class,
            RoleUserTableSeeder::class,
            CommunitySeeder::class,
            CommunityUserTableSeeder::class,
            NoticeBoardTableSeeder::class
        ]);
    }
}

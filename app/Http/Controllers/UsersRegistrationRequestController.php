<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Room;
use App\Models\Grade;
use App\Models\Role;

use App\Models\TemporaryObject;
use App\Models\User;
use App\Models\UsersRegistrationRequest;
use App\Modules\LoginService\LoginService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Console\Output\ConsoleOutput;

use App\Models\EducationExperience;
use Faker\Core\Number;

class UsersRegistrationRequestController extends Controller
{
    private $loginService;
    public function __construct()
    {
        $this->loginService = new LoginService();
    }

    public function updateUserById(Request $request){

       $image = base64_encode(file_get_contents($request->file('photo')->getRealPath()));
     

     // return $request->userId;

        // $user = User::where('id', $request->userId)->first();
        // return $user;
        $update = User::where('id', $request->userId)
        ->update([
            "photo" => $image
        ]);

        if ($update != 1) {
            return response() -> json([
                'message' => "Error occured",
            ], 401);
        }
        return "Updated";


    }

    public function fetchRoleByUserId(Request $request)
    {

        $user = User::find(1);

        $role = Role::find(4);

        $roles = User::find(1)->roles()->select('name')->get();

        return $roles;

        // $user -> roles() -> attach($role);
        // $user -> roles() -> attach([1,2,3,4]);
        //    $user -> roles() -> detach([4]);

    }

    public function fetchUsersById(Request $request)
    {

        $user = User::find($request->id);

        for ($i = 0; $i < count($user); $i++) {
            $user[$i] = $this->assignAllValue($user[$i]);
        }

        return $user;
    }

    public function fetchAllUsers()
    {
        $user = User::where('category_id', 2)->get();

        for ($i = 0; $i < count($user); $i++) {

            $dept = $user[$i]->department()->select("name")->first();

            if ($dept != null) {
                $user[$i]->department_name = $dept->name;
            } else  $user[$i]->department_name = null;
        }
        return $user;
    }

    public function assignAllValue($user)
    {
        $temp = new TemporaryObject();
        $temp->awardAndRecognitions = $user->awardAndRecognitions;
        $temp->conferences = $user->conferences;
        $temp->courseMaterials = $user->courseMaterials;
        $temp->courseOffereds = $user->courseOffereds;
        $temp->currentResearchAndCollaborations = $user->currentResearchAndCollaborations;
        $temp->educationExperiences = $user->educationExperiences;
        $temp->graduateSupervisions = $user->graduateSupervisions;
        $temp->journalss = $user->journalss;
        $temp->publications = $user->publications;
        $temp->researchExperiences = $user->researchExperiences;
        $temp->teachingExperiences = $user->teachingExperiences;
        // $user->awardAndRecognitions = $user->awardAndRecognitions;
        // $user->conferences = $user->conferences;
        // $user->courseMaterials = $user->courseMaterials;
        // $user->courseOffereds = $user->courseOffereds;
        // $user->currentResearchAndCollaborations = $user->currentResearchAndCollaborations;
        // $user->educationExperiences = $user->educationExperiences;
        // $user->graduateSupervisions = $user->graduateSupervisions;
        // $user->journalss = $user->journalss;
        // $user->publications = $user->publications;
        // $user->researchExperiences = $user->researchExperiences;
        // $user->teachingExperiences = $user->teachingExperiences;
        return $user;
    }

    public function fetchUsersRegistrationRequest(Request $request)
    {

        //  $user = UsersRegistrationRequest::find($request->id);

        $roles = User::find($request->id)->roles()->select('name')->get();
        $usersOfSuperAdmin = [];
        $count = 0;

       // return $roles;

        if ($roles[0]->name == "SuperAdmin") {

            $category = ["Faculty Member", "Staff"];

            for ($i = 0; $i < 2; $i++) {
                $temp = UsersRegistrationRequest::where('category_name', $category[$i])->get();
                //return $temp;

                for ($j = 0; $j < count($temp); $j++) {
                   // $temp[$i] = $this->assignAllValue($temp[$i]);
                    $usersOfSuperAdmin[$count++] = $temp[$j];
                }
            }

           

            //$length = $count - 1;
           // return $usersOfSuperAdmin;
        }
        // For student
        else {
            $temp = UsersRegistrationRequest::where('department_name', $roles[0]->name)->
            where('category_name', 'Student')->get();
            for ($j = 0; $j < count($temp); $j++) {
                // $temp[$i] = $this->assignAllValue($temp[$i]);
                 $usersOfSuperAdmin[$count++] = $temp[$j];
             }
        }

        if (count($usersOfSuperAdmin) > 0) {
            usort($usersOfSuperAdmin, function ($first, $second) {
                return $first->id < $second->id;
            });
        }

        return $usersOfSuperAdmin;




        // for ($i = 0; $i < $length; $i++) {
        //     $usersOfSuperAdmin[$i] = $this->assignAllValue($usersOfSuperAdmin[$i]);
        // }

        // if (Count($usersOfSuperAdmin) > 0){
        //     usort($usersOfSuperAdmin,function($first,$second){
        //         return $first->id < $second->id;
        //     });
        //     return $usersOfSuperAdmin;
        // }

        return [];
    }

    public function saveUsersRegistrationRequest(Request $request)
    {
        $outputResult = new UsersRegistrationRequest();
        $receivedObject = json_decode($request->Object);

        //return $receivedObject;

        $image = base64_encode(file_get_contents($request->file('photo')->getRealPath()));
        $receivedObject->photo = $image;


        $usersRegistrationRequest = $this->loginService->requestRegistrationDataAssign($receivedObject, $outputResult, false);

        $result = $usersRegistrationRequest->save();
        if ($result == 1) {

            for ($j = 0; $j < 11; $j++) {

                $attribute = $this->multipleAttributeOfUser($j, true);

                $attributeValue = $receivedObject->$attribute;
                $model = $this->multipleAttributeOfUser($j, false);

                for ($i = 0; $i < count($attributeValue); $i++) {
                    if ($attributeValue[$i] != "") {
                        $modelObject = new $model();
                        $modelObject->discription = $attributeValue[$i];
                        $modelObject->usersRegistrationRequest()->associate($usersRegistrationRequest);
                        $modelObject->save();
                    }
                }
            }
        }

        return "Your registration request has been received. We will sent you an email within 24 hours for your account confirmation.";
    }

    public function usersRegistrationRequestResponse(Request $request)
    {
        $isAccepted = false;
        $isAccepted = $request -> isAccept; 

        if($isAccepted){
            
            $outputResult = new User();
            $receivedResult = UsersRegistrationRequest::find($request->memberId);
    
            $userObject = $this->loginService->requestRegistrationDataAssign($receivedResult, $outputResult, true);
    
            $fetchDepartment = Department::select("*")->where("name", "=", $receivedResult->department_name)->get();
            $fetchRoom = Room::select("*")->where("roomNumber", "=", $receivedResult->room_number)->get();
            $fetchGrade = Grade::select("*")->where("grade", "=", $receivedResult->grade_name)->get();
            $fetchDesignation = Designation::select("*")->where("name", "=", $receivedResult->designation_name)->get();
            $fetchCategory = Category::select("*")->where("name", "=", $receivedResult->category_name)->get();
    
            if (count($fetchDepartment) > 0)
                $userObject->department()->associate($fetchDepartment[0]);
    
            if (count($fetchRoom) > 0)
                $userObject->room()->associate($fetchRoom[0]);
    
            if (count($fetchGrade) > 0)
                $userObject->grade()->associate($fetchGrade[0]);
    
            if (count($fetchDesignation) > 0)
                $userObject->designation()->associate($fetchDesignation[0]);
    
            if (count($fetchCategory) > 0)
                $userObject->category()->associate($fetchCategory[0]);
    
            $result = $userObject->save();
    
            if ($result == 1) {
    
                $userId = new User();
                $userId = User::select("*")->where("email", "=", $userObject->email)->select('id')->get();
    
                for ($j = 0; $j < 11; $j++) {
    
                    $attribute = $this->multipleAttributeOfUser($j, true);
    
                    $attributeValue = $receivedResult->$attribute;
                    $model = $this->multipleAttributeOfUser($j, false);
    
                    for ($i = 0; $i < count($attributeValue); $i++) {
    
                        $update = $model::where('id', $attributeValue[$i]->id)
                            ->update([
                                'user_id' => $userId[0]->id,
                                "users_registration_request_id" => null
                            ]);
    
                        if ($update != 1) {
                            return response() -> json([
                                'message' => "Error occured",
                            ], 401);
                        }
                    }
                }
            }
    
            $receivedResult -> delete();
            $this->loginService->sendConfirmMail($userObject->email);
            return "Successfully save";
        }
        else{
            $receivedResult = UsersRegistrationRequest::find($request->memberId);
            $receivedResult -> delete();
            return "Rejected";
        }
       
    }

    public function multipleAttributeOfUser($index, $isAttribute)
    {

        $attribute = [
            "awardAndRecognitions",
            "conferences",
            "courseMaterials",
            "courseOffereds",
            "currentResearchAndCollaborations",
            "educationExperiences",
            "graduateSupervisions",
            "journalss",
            "publications",
            "researchExperiences",
            "teachingExperiences",
        ];

        $model = [

            "App\Models\AwardAndRecognition",
            "App\Models\Conference",
            "App\Models\CourseMaterial",
            "App\Models\CourseOffered",
            "App\Models\CurrentResearchAndCollaboration",
            "App\Models\EducationExperience",
            "App\Models\GraduateSupervision",
            "App\Models\Journals",
            "App\Models\Publication",
            "App\Models\ResearchExperience",
            "App\Models\TeachingExperience",

        ];

        if ($isAttribute) {
            return $attribute[$index];
        }

        return $model[$index];
    }
}



            // $outputResult2 = new User();
            // $outputResult2 -> name = "First comment";
            // $outputResult2 -> phone = "kdj@gmail.com";
            // $outputResult2 -> email = "kdj@gmail.com";
            // $outputResult2 -> password = "kdj@gmail.com";
            //$departmentcc =  DB::table('departments')->where('name', $receivedResult -> department_name)->first();
           // $room = DB::table('rooms')->where('roomNumber', $receivedResult -> room_number)->first(); 
           //!(strlen("ll")==0 && strlen($receivedResult -> room_number)

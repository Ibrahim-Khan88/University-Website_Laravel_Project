<?php

namespace App\Modules\LoginService;

use App\Mail\LoginMail;
use App\Models\AcademicCouncil;
use App\Models\RejectBoard;
use App\Models\SheikhRasalHall;
use App\Models\User;
use App\Models\AwardAndRecognition;
use App\Models\UsersRegistrationRequest;
use App\Modules\NoticeBoard\NoticeBoardService;
use App\Queries\LoginQueries;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Console\Output\ConsoleOutput;

class LoginService
{
    use LoginQueries;
    private $noticeBoardService;

    public function __construct()
    {
        $this->noticeBoardService = new NoticeBoardService();
    }
    public function requestRegistrationDataAssign($usersRegistrationRequestReceived, $outputResult, $isUser)
    {

        $output = new ConsoleOutput();
        $usersRegistrationRequest = $outputResult;

        $usersRegistrationRequest->name = $usersRegistrationRequestReceived->name;
        $usersRegistrationRequest->email = $usersRegistrationRequestReceived->email;
        $usersRegistrationRequest->phone = $usersRegistrationRequestReceived->phone;
        $usersRegistrationRequest->photo = $usersRegistrationRequestReceived->photo;
        $usersRegistrationRequest->website  = $usersRegistrationRequestReceived->website;
        $usersRegistrationRequest->biographyFiledOfSpecialization = $usersRegistrationRequestReceived->biographyFiledOfSpecialization;



        // $usersRegistrationRequest -> researchInterest = $usersRegistrationRequestReceived -> researchInterest;
        // $usersRegistrationRequest -> currentResearchAndCollaboration =  $usersRegistrationRequestReceived -> currentResearchAndCollaboration;
        // $usersRegistrationRequest -> fellowshipOfScientificAndProfessionalSociaties = $usersRegistrationRequestReceived -> fellowshipOfScientificAndProfessionalSociaties;
        // $usersRegistrationRequest -> educationExperience = $usersRegistrationRequestReceived -> educationExperience;
        // $usersRegistrationRequest -> teachingExperience = $usersRegistrationRequestReceived -> teachingExperience;
        // $usersRegistrationRequest -> researchExperience = $usersRegistrationRequestReceived -> researchExperience;
        // $usersRegistrationRequest -> awardAndRecognition = $usersRegistrationRequestReceived -> awardAndRecognition;
        // $usersRegistrationRequest -> publication = $usersRegistrationRequestReceived -> publication;
        // $usersRegistrationRequest -> journals = $usersRegistrationRequestReceived -> journals;
        // $usersRegistrationRequest -> conference = $usersRegistrationRequestReceived -> conference;
        // $usersRegistrationRequest -> graduateSupervision = $usersRegistrationRequestReceived -> graduateSupervision;
        // $usersRegistrationRequest -> courseOffered = $usersRegistrationRequestReceived -> courseOffered;
        // $usersRegistrationRequest -> courseMaterial = $usersRegistrationRequestReceived -> courseMaterial;
        // $usersRegistrationRequest -> email_verified_at = $usersRegistrationRequestReceived -> email_verified_at;


        if (!$isUser) {
            $usersRegistrationRequest->password = bcrypt($usersRegistrationRequestReceived->password);
            $usersRegistrationRequest->grade_name = $usersRegistrationRequestReceived->grade_name;
            $usersRegistrationRequest->category_name = $usersRegistrationRequestReceived->category_name;
            $usersRegistrationRequest->department_name = $usersRegistrationRequestReceived->department_name;
            $usersRegistrationRequest->room_number = $usersRegistrationRequestReceived->room_number;
            $usersRegistrationRequest->designation_name = $usersRegistrationRequestReceived->designation_name;
        } else {
            $usersRegistrationRequest->password = $usersRegistrationRequestReceived->password;
        }

        return $usersRegistrationRequest;
    }


    public function selectTableAndrRoleAssignFunction($tableName, $role, $userObject)
    {

        if (strcmp($tableName, "Reject Board") == 0) {
            $Object = new RejectBoard();
            $Object->role = $role;
            $resultObject = $userObject->rejectBoardFunction()->save($Object);
        } else if (strcmp($tableName, "Academic Council") == 0) {
            $Object = new AcademicCouncil();
            $Object->role = $role;
            $resultObject = $userObject->academicCouncilFunction()->save($Object);
        } else if (strcmp($tableName, "Sheikh Rasal Hall") == 0) {
            $Object = new SheikhRasalHall();
            $Object->role = $role;
            $resultObject = $userObject->shakhRasalHallFunction()->save($Object);
        }

        return $resultObject;
    }

    public function sendConfirmMail($toAccount)
    {
        $detail = [
            "title" => "Account confirm",
            "body" => "Your request is accepted in BSMRSTU for opening account"
        ];

        Mail::to($toAccount)->send(new LoginMail($detail));
        return "Mail sent successfully";
    }

    // public function checkRole($user_id, $groupName){
    //     if(!strcmp($groupName,"Academic Council")){
    //         $findObject = AcademicCouncil::select("*")->where("user_id", "=", $user_id)->get();
    //         if(count($findObject) == 1){
    //             return $findObject;
    //         }
    //         return 0;
    //     }
    // }

    public function findUser($gmailId)
    {
        $user = User::select("*")->where("email", "=", $gmailId)->first();
        $user -> photo = $this -> convertImage($user -> photo);
        return $user;
    }

    public function convertImage($photo){
        if($photo != null){
            return "data:image/jpg;base64," . $photo;
        }
    }

    public function checkRole($user)
    {

        $roleList = $user->roles()->select("name")->get();

        $role = array();

        for ($i = 0; $i < count($roleList); $i++) {

            $role[$i] = $roleList[$i]->name;
        }
        return $role;
    }
}

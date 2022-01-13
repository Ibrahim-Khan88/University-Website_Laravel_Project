<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Room;
use App\Models\User;
use App\Models\UsersRegistrationRequest;
use App\Modules\LoginService\LoginService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Console\Output\ConsoleOutput;

class UsersRegistrationRequestController extends Controller
{
    private $loginService;
    public function __construct(){
        $this -> loginService = new LoginService();
    }

    public function fetchUsersRegistrationRequest(){
        $output = new ConsoleOutput();
        $resultList = UsersRegistrationRequest::all();
     
        
        for($i = 0; $i < count($resultList); $i++){
            if (!is_null($resultList[$i]->roles)){
                $list = explode(",",$resultList[$i] -> roles);
                $resultList[$i] -> roleList =  $list;
            //$output->writeln("my message--". $i. " - ". $resultList[$i] -> roles);
        }
    }
        return $resultList;
    }

    public function saveUsersRegistrationRequest(Request $request){

        $outputResult = new UsersRegistrationRequest();
        $outputResult->roles = "not empty";
        $receivedObject = json_decode($request->Object);


        $image = base64_encode(file_get_contents($request->file('photo')->getRealPath()));
        $receivedObject -> photo = $image;

        $usersRegistrationRequest = $this -> loginService -> requestRegistrationDataAssign($receivedObject, $outputResult);
         

        //return $image;
        //  $output = new ConsoleOutput();
        //  if (!is_null($outputResult->roles)){
        //     $output->writeln("indss". $usersRegistrationRequest -> roles);;
        //  }
        //  else $output->writeln("indss else ". $usersRegistrationRequest -> roles);;
        $result = $usersRegistrationRequest -> save();

        if($result == 1){
            return "Your registration request has been received. We will sent you an email within 24 hours for your account confirmation.";
        }

        
    }

    public function usersRegistrationRequestAssign(Request $request){

        $output = new ConsoleOutput();

        $outputResult = new User();
        $receivedResult = UsersRegistrationRequest::find($request->id);

        $userObject = $this -> loginService -> requestRegistrationDataAssign($receivedResult, $outputResult);      
        $roleObject = json_decode($request->roles);
         
        
        if ( !is_null($receivedResult -> department_name) && !is_null($receivedResult -> room_number) ){
            
            $fetchDepartment = Department::select("*")->where("name", "=", $receivedResult -> department_name)->get();
            $fetchRoom = Room::select("*")->where("roomNumber", "=", $receivedResult -> room_number)->get();

            $userObject->department()->associate($fetchDepartment[0]);
            $userObject->room()->associate($fetchRoom[0]);
        }
        
         $userObject-> save();


        foreach ($roleObject as $key => $value) {
           $tableObject = $this -> loginService -> selectTableAndrRoleAssignFunction($key, $value, $userObject);
           if(is_null($tableObject)){
               return "An error is occured";
           }
        }

         $this -> loginService -> sendConfirmMail($userObject -> email);
         return "Successfully save";
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

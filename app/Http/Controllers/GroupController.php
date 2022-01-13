<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\AcademicCouncil;
use App\Models\Department;
use App\Models\Room;
use App\Models\TemporaryObject;
use App\Models\User;
use App\Modules\GroupService\GroupService;
use Symfony\Component\Console\Output\ConsoleOutput;

class GroupController extends Controller
{
    private $groupService;
    public function __construct()
    {
        $this -> groupService = new GroupService();
    }

    public function fetchGroupMemberByGroupName($groupName){
        $output = new ConsoleOutput();
        $modelName = "App\\Models\\" . str_replace(' ', '', $groupName); 
        $allValueOfGroup = $modelName::get();

        for($i = 0; $i < count($allValueOfGroup); $i++){

            $temp = User::find($allValueOfGroup[$i] -> user_id);
            $tempUser = $this -> groupService -> reformateObject($temp);

            if(!is_null($temp  -> room_id)){
                $tempUser -> roomNumber = Room::find($temp -> room_id) -> roomNumber;
            }
            if(!is_null($temp  -> department_id)){
                $tempUser -> department = Department::find($temp -> department_id) -> name;
            }
           
           // $output->writeln("value -> ". $allValueOfGroup[$i]  -> room_id ." " .$allValueOfGroup[$i]  -> department_id);
            $connectedMember[] = $tempUser;
        }

        return $connectedMember;
    }

}
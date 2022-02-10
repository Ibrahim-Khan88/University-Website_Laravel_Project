<?php

namespace App\Http\Controllers;

use App\Models\AcademicCouncil;
use App\Models\Achievement;
use App\Models\Department;
use App\Models\Room;
use Illuminate\Http\Request;
use App\Models\User;
use App\Modules\LoginService\LoginService;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    public function fetchRoomByDepartment($deptName){

        $departmentObject = Department::select("*")->where("name", "=", $deptName)->get();
        $result = Room::select("*")->where("department_id", "=", $departmentObject[0] -> id)->get();
        return $result;
        
      }


      public function fetchRoom()
      {
          $room = Room::all();
          $roomName = array();
  
          for($i = 0; $i < count($room); $i++){
              $roomName[$i] = $room[$i] -> roomNumber;
          }
          return $roomName;
      } 

}
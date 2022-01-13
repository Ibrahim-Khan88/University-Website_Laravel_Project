<?php

namespace App\Http\Controllers;

use App\Models\AcademicCouncil;
use App\Models\Achievement;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Author;
use App\Models\Department;
use App\Models\RejectBoard;
use App\Models\Room;
use App\Modules\GroupService\GroupService;
use App\Modules\LoginService\LoginService;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
  private $groupService;
  public function __construct()
  {
    $this->groupService = new GroupService();
  }

  public function fetchTeacherByDepartment($deptName)
  {

    $departmentObject = Department::select("*")->where("name", "=", $deptName)->get();
    $result = User::select("*")->where("department_id", "=", $departmentObject[0]->id)->get();


    for ($i = 0; $i < count($result); $i++) {

      $tempUser = $this->groupService->reformateObject($result[$i]);
      if (!is_null($result[$i]->room_id)) {
        $tempUser->roomNumber = Room::find($result[$i]->room_id)->roomNumber;
      }

      $teacherList[] = $tempUser;
    }

    return $teacherList;
  }
}

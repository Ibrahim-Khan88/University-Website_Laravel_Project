<?php

namespace App\Http\Controllers;

use App\Models\AcademicCouncil;
use App\Models\Achievement;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Author;
use App\Models\Department;
use App\Models\RejectBoard;
use App\Modules\LoginService\LoginService;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Output\ConsoleOutput;

class AchievementController extends Controller
{
    public function saveAchievement(Request $request)
    {

        $receivedObject = json_decode($request->Object);
        $image = base64_encode(file_get_contents($request->file('photo')->getRealPath()));


        $achievement = new Achievement();
        $achievement->title = $receivedObject->title;
        $achievement->body = $receivedObject->body;
        $achievement->photo = $image;

        $departmentObject = Department::select("*")->where("name", "=", $receivedObject->department)->get();
        $achievement->department()->associate($departmentObject[0]);

        $achievement->save();

        return $achievement->save();
    }


    public function fetchAchievementBydepartment($deptName)
    {
        $departmentObject = Department::select("*")->where("name", "=", $deptName)->get();
        $result = Achievement::select("*")->where("department_id", "=", $departmentObject[0]->id)->get();
        //$allPost = [];
        $temp  = new Achievement();
        $output = new ConsoleOutput();

       // $output->writeln("group value ->> ".   );

        for ($i = 0; $i < count($result); $i++) {

            $temp  = new Achievement();
            // $temp->title = $result[$i]->title;
            // $temp->body = $result[$i]->body;
            // $temp->photo = $result[$i]->photo;
            $temp = $result[$i];
            $allPost[$i] = $temp;

            //$output->writeln("group value ->> ". $allPost[$i]->title );
        }
        // for ($i = 0; $i < count($allPost); $i++) {
        //     $output->writeln("group value ->> ". $allPost[$i]->title );
        // }

        // foreach ($result as $value) {
        //     //$output->writeln("group value ->> ". $value );
        //     $allPost[] = $value;
        //   }
      
        return $result;
    }
}

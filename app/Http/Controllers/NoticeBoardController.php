<?php

namespace App\Http\Controllers;

use App\Models\AcademicCouncil;
use App\Models\Faculty;
use App\Models\Group;
use App\Models\NoticeBoard;
use App\Models\RejectBoard;
use App\Models\SheikhRasalHall;
use App\Models\User;
use App\Modules\LoginService\LoginService;
use App\Modules\NoticeBoard\NoticeBoardService;
use Illuminate\Http\Request;
use Symfony\Component\Console\Output\ConsoleOutput;

class NoticeBoardController extends Controller
{

    private $noticeBoardService;
    private $loginService;
    
    public function __construct(){
        $this -> noticeBoardService = new NoticeBoardService();
        $this -> loginService = new LoginService();
    }

    public function fetchNotice($id){
  
        $output = new ConsoleOutput();
        $connectedModelList = $this -> noticeBoardService -> connectedModelListById($id);

        // $result = AcademicCouncil::select("*")->where("user_id", "=", $id)->get();
        // return $result;
        

        for($i = 0; $i < count($connectedModelList); $i++){

            // $temp = explode('\\', $connectedModelList[$i]);
            // $groupName = preg_replace('/(?<!\ )[A-Z]/', ' $0', $temp[count($temp)-1]);
            // $groupName = ltrim($groupName, $groupName[0]);

            $groupName = $this -> noticeBoardService -> splitGroupName($connectedModelList[$i]);

            $tempObject = $this -> noticeBoardService ->fetchNoticeByGroupName($groupName);
            for($j = 0; $j < count($tempObject); $j++){

                $user = User::find($tempObject[$j] -> user_id);
                $tempObject[$j] -> postUserName = $user -> name;
                $tempObject[$j] -> groupName = $groupName;
                $tempObject[$j] -> postUserPhoto = $user -> photo;
                $allPost[] = $tempObject[$j];
            }
            
        }

        $user = User::find($id);
        if(!empty($user -> department_id)){

            $tempObject = $this -> noticeBoardService ->fetchNoticeByGroupName($user -> department -> name);
            for($j = 0; $j < count($tempObject); $j++){
                $user = User::find($tempObject[$j] -> user_id);
                $tempObject[$j] -> postUserName = $user -> name;
                $tempObject[$j] -> groupName = $user -> department -> name;
                $tempObject[$j] -> postUserPhoto = $user -> photo;
                $allPost[] = $tempObject[$j];
             }

            $tempObject = $this -> noticeBoardService ->fetchNoticeByGroupName($user -> department -> faculty -> name);
            for($j = 0; $j < count($tempObject); $j++){
                $user = User::find($tempObject[$j] -> user_id);
                $tempObject[$j] -> postUserName = $user -> name;
                $tempObject[$j] -> groupName = $user -> department -> faculty -> name;
                $tempObject[$j] -> postUserPhoto = $user -> photo;
                $allPost[] = $tempObject[$j];
            }

        }
        else $output->writeln("else");

        usort($allPost,function($first,$second){
            return $first->id < $second->id;
        });

        return $allPost;

    }

    public function insertNotice(Request $request, $id){

        $noticeBoard = new NoticeBoard();
        $noticeBoard -> title = $request -> title;
        $noticeBoard -> body = $request -> body;

        $user = User::find($id);
        $groupName = $request -> group_name;
        $checkRole = false;

        // Checking if groupName is  department or faculty
        if(!strcmp($groupName,"department")){
            $groupName = $user -> department -> name;
            $checkRole = true;
        }
        else if(!strcmp($groupName,"faculty")){
            $groupName = $user -> department -> faculty -> name;
            $checkRole = true;
        }

        // checking role
        if(!$checkRole){
            $result =  $this -> noticeBoardService -> checkRole($id, $groupName);

            if(count($result) == 0){
                return response('Unauthorized', 401);
            }
        }

       // finding group
        $group = Group::select("*")->where("name", "=", $groupName)->get();
        
        $noticeBoard->user()->associate($user);
        $noticeBoard->group()->associate($group[0]);

        if($noticeBoard -> save() == 1){
            return "Save successfully.";
        }
    }
}

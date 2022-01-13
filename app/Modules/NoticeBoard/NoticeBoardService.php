<?php

namespace App\Modules\NoticeBoard;

use App\Models\AcademicCouncil;
use App\Models\Group;
use App\Models\NoticeBoard;
use App\Models\RejectBoard;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\Console\Output\ConsoleOutput;

class NoticeBoardService 
{
    
    private $noticeBoardService;
   

    public function __construct(){
       // $this -> noticeBoardService = new NoticeBoardService();
    }

    public function checkRole($user_id, $groupName){

        // if(!strcmp($groupName,"Academic Council")){
        //     $findObject = AcademicCouncil::select("*")->where("user_id", "=", $user_id)->get();
        //     return $findObject;
        // }

        // if(!strcmp($groupName,"Reject Board")){
        //     $findObject = RejectBoard::select("*")->where("user_id", "=", $user_id)->get();
        //     return $findObject;
        // }

        $groupList = $this  -> groupList();
        for ($i = 0; $i < count($groupList); $i++){

            $modelName = $this -> splitGroupName($groupList[$i]);

            if(!strcmp($groupName, $modelName)){

                $findObject = $groupList[$i]::select("*")->where("user_id", "=", $user_id)->get();
                return $findObject;

            }
               
        }
        return 0;
    }

    public function connectedModelListById($user_id){

        $output = new ConsoleOutput();
        $groupList = $this  -> groupList();
        $connectedGroupArray = array();
        $j = 0;

        for ($i = 0; $i < count($groupList); $i++){

            $result = $groupList[$i] ::select("*")->where("user_id", "=", $user_id)->get();;
            if(!empty($result[0])){
                $connectedGroupArray[$j] = $groupList[$i];
                $j++;
                //$output->writeln("connected -> ". $groupList[$i] . " ". $result);
            }
               
        }

        return $connectedGroupArray;
        //return $groupList;
    }

    public function groupList(){
        return [
            "App\Models\AcademicCouncil",
            "App\Models\RejectBoard",
            "App\Models\SheikhRasalHall"
        ];
    }

    public function fetchNoticeByGroupName($groupName){
        $group = Group::select("*")->where("name", "=", $groupName)->get();
        $noticeBoard = NoticeBoard::select("*")->where("group_id", "=", $group[0] -> id)->get();
        return $noticeBoard;
        //return $group;
    }

    public function splitGroupName($modelLink){
        $temp = explode('\\', $modelLink);
        $groupName = preg_replace('/(?<!\ )[A-Z]/', ' $0', $temp[count($temp)-1]);
        $groupName = ltrim($groupName, $groupName[0]);
        return $groupName;
    }


    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

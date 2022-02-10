<?php

namespace App\Http\Controllers;

use App\Models\AcademicCouncil;
use App\Models\Category;
use App\Models\Community;
use App\Models\Faculty;
use App\Models\Group;
use App\Models\NoticeBoard;
use App\Models\RejectBoard;
use App\Models\SheikhRasalHall;
use App\Models\TemporaryObject;
use App\Models\User;
use App\Modules\LoginService\LoginService;
use App\Modules\NoticeBoard\NoticeBoardService;
use DateTime;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;
use Symfony\Component\Console\Output\ConsoleOutput;

class NoticeBoardController extends Controller
{

    private $noticeBoardService;
    private $loginService;

    public function __construct()
    {
        $this->noticeBoardService = new NoticeBoardService();
        $this->loginService = new LoginService();
    }

    public function fetchNoticeByUserId($userId)
    {

        $connectedCommunityId = User::find($userId)->communities()->select("community_id")->get();
        $allNotices = [];
        $output = new ConsoleOutput();
        

        for ($i = 0; $i < count($connectedCommunityId); $i++) {
            $temp = Community::find($connectedCommunityId[$i]->community_id)->noticeBoards()->with(['user'])->get();

            for ($j = 0; $j < count($temp); $j++) {

                $allNotices[] = $this -> noticeBoardConvert($temp[$j]);
                
            }
        }

      //  return  $allNotices;



        $categoryId = User::find($userId)->category()->select("id")->first();
        $temp = Category::find($categoryId->id)->noticeBoards()->with(['user'])->get();

        for ($j = 0; $j < count($temp); $j++) {
            $allNotices[] = $this -> noticeBoardConvert($temp[$j]);
        }


        $temp = Category::where("name", "All")->first()->noticeBoards()->with(['user'])->get();

        for ($j = 0; $j < count($temp); $j++) {
            $allNotices[] = $this -> noticeBoardConvert($temp[$j]);
        }

        if (Count($allNotices) > 0) {
            usort($allNotices, function ($first, $second) {
                return $first->id < $second->id;
            });
            return  $allNotices;
        }
        return [];

    }


    public function noticeBoardConvert($temp){

        $output = new ConsoleOutput();
        $date = strtotime($temp -> created_at);
        $new_date = date('d-m-Y', $date);

        $tt = new TemporaryObject();
        $tt -> id = $temp -> id;
        $tt -> title = $temp -> title;
        $tt -> body = $temp -> body;
        $tt -> createdAt = $new_date;
        $tt -> userName = $temp->user->name;
        $tt -> userPhoto = $this->loginService->convertImage($temp->user->photo);

       
     
        $output->writeln($new_date);
        return $tt;
    }

    public function insertNotice(Request $request, $userId)
    {

        //return $request->userId;

        if ($request->category_name != null) {

            $categoryId = Category::where('name', $request->category_name)->select("id")->first();

            if ($categoryId->id != null) {

                $noticeBoard = new NoticeBoard();
                $noticeBoard->title = $request->title;
                $noticeBoard->body = $request->body;
                $noticeBoard->category_id = $categoryId->id;
                $noticeBoard->user_id = $userId;
                $noticeBoard->community_id = null;

                if ($noticeBoard->save() == 1) {
                    return "Save successfully.";
                }
            }
            return response('Not Found', 404);
        } else {
            $roles = User::find($request->userId)->roles()->where('name', $request->community_name)->first();
            $communityId = Community::where('name', $request->community_name)->select("id")->first();

            //return $roles;
            if ($roles != null) {

                $noticeBoard = new NoticeBoard();
                $noticeBoard->title = $request->title;
                $noticeBoard->body = $request->body;
                $noticeBoard->category_id = null;
                $noticeBoard->user_id = $userId;
                $noticeBoard->community_id = $communityId->id;

                if ($noticeBoard->save() == 1) {
                    return "Save successfully.";
                }
            }

            return response('Not Found', 404);
        }
    }
}

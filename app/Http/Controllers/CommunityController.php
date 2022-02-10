<?php

namespace App\Http\Controllers;

use App\Models\Community;
use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;

class CommunityController extends Controller
{

    public function fetchCommunityName(){
        $community = Community::all();
        $communityName = array();

        for($i = 0; $i < count($community); $i++){
            $communityName[$i] = $community[$i] -> name;
        }
        return $communityName;
    }

    public function fetchUserByCommunityId(Request $request)
    {
        $user = Community::where('name', $request -> name)->first()->users()->get();
        
        for ($i = 0; $i < count($user); $i++) {
            
            $dept = $user[$i] -> department() -> select("name") -> first();
            $desigination = $user[$i] -> designation() -> select("name") -> first();
            $user[$i] -> role = $user[$i] -> pivot -> role; 

            if($dept != null){
                $user[$i] -> department_name = $dept -> name;
            }
            else  $user[$i] -> department_name = null;

            if($desigination != null){
                $user[$i] -> desigination_name = $desigination -> name;
            } 
            else $user[$i] -> desigination_name = null;
           
        }
        return $user;
    }

    public function addMember(Request $request)
    {

        $role = User::find($request->userId)->roles()->where('name', "SuperAdmin")->get();

        if (Count($role) > 0) {
            $community = Community::where('name', $request->communityName)->first();
            $memberIdList = explode(",", $request->memberIdList);
            $memberRoleList = explode(",", $request->memberRoleList); 

            for ($i = 0; $i < count($memberRoleList); $i++) {
                $community->users()->attach([
                    $memberIdList[$i] => [
                        "role" => $memberRoleList[$i]
                    ]
                ]);
            }

            return response([
                'message' => "created"
            ], 201);
        }
        else{
            return response([
                'message' => "invalid credential"
            ], 401);
        }

    }

    public function fetchConnectedCommunityOfUserByUserId(Request $request){
        return User::find($request -> id)->communities()->select("name")->get();
    }

    public function removeMember(Request $request){ 

       // return $request->communityId;
        
        $role = User::find($request->userId)->roles()->where('name', "SuperAdmin")->get();

        if (Count($role) > 0) {
            $community = Community::where('name', $request -> communityName)->first();
            $memberId = $request->memberId;

            $community->users()->detach([
                $memberId
            ]);

            return response([
                'message' => "deleted"
            ], 200);

        }
        else{
            return response([
                'message' => "invalid credential"
            ], 401);
        }
    }
}

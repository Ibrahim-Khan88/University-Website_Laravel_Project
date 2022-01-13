<?php

namespace App\Http\Controllers;

use App\Mail\LoginMail;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Author;
use App\Modules\LoginService\LoginService;
use Illuminate\Support\Facades\Mail;
use stdClass;

class AuthConroller extends Controller
{
    private $loginService;
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','register']]);
        $this -> loginService = new LoginService();
    }

    public function login(Request $request)
    {
        if(!$token = auth()->attempt($request-> only('email', 'password'))){
            return response([
                'message' => "invalid credential"
            ], 401);
        }

        $accessGroupList = $this -> loginService -> checkRole($request -> email);
        // $responseObject = new stdClass();
        // for ($i = 0; $i < count($accessGroupList); $i++){

        //     $responseObject -> accessGroupList[$i] = true;
        // }
        // return $responseObject;

        return $this->createNewToken($token, $accessGroupList);
    }

    

    public function createNewToken($token, $accessGroupList){
        return response() -> json([
            'jwt' => $token,
            'accessGroup' => $accessGroupList
        ]);
    }

    public function register(Request $request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

        return response() -> json([
            'message' => "user successfully register",
            'user' => $user
        ], 201);
    }

    public function profile(){

        $phoneResult = Author::find(4) -> phoneFunction;  
      
        return $phoneResult;
    }




}

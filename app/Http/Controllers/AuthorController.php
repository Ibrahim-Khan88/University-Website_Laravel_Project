<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Phone;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Http\Controllers\BlogController;
use App\Modules\LoginService\LoginService;

class AuthorController extends Controller
{

    private $loginService;
    public function __construct(){
        $this->middleware('auth:api', ['except' => ['login','register','deleteAuthor','deletePhone']]);
        $this -> loginService = new LoginService();
    }

    public function insertRecords(){

      $phone = new Phone();
      $phone -> number = "99393939";
      $phone -> number2 = "99393939";

      $author = new Author();
      $author-> name = "Ibrahim";
      $author-> email = "obak@gmail.com";

      $author -> save();
      $author-> phoneFunction() -> save($phone);
      return "save successfully";
    }

    public function fetchPhoneByAuthor($id){

        $phone = new Phone();
        $phoneResult = Author::find($id) -> phoneFunction;  
        $phone -> number1 = $phoneResult -> number;
        $phone -> tt = $phoneResult -> number2 ;
        return $phoneResult;

    }

    public function deleteAuthor( $id){

        // $dd = $this -> loginService -> requestRegistrationDataAssign();
        // return $dd;

        //$test = $dd.testFunction();
       // return ["result" => "Fail to delete ".$id];
        // $author = Author::find($id);
        // $result = $author -> delete();
        // if ($result){
        //     return ["result" => "Successfully deleted"];
        // }
        // else{
        //     return ["result" => "Fail to delete"];
        // }

    }

    public function deletePhone($id){

        // return ["result" => "Fail to delete ".$id];
         $phone = Phone::find($id);
         $result = $phone -> delete();
         if ($result){
             return ["result" => "Successfully deleted"];
         }
         else{
             return ["result" => "Fail to delete"];
         }
 
     }

    public function profile(){

        $phoneResult = Author::find(4) -> phoneFunction;  
      
        return $phoneResult;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAuthorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAuthorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAuthorRequest  $request
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAuthorRequest $request, Author $author)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        //
    }
}

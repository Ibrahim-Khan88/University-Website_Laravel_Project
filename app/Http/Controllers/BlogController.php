<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    function show($data){
        //return ["name" => "Ibrahim"];
        return Blog::find($data);
    }

    public function testFunction(){
        return "testFunction is called";
    }

}




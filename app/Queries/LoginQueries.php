<?php

namespace App\Queries;

use App\Models\Phone;
use App\Models\Post;
use App\Models\UsersRegistrationRequest;

trait LoginQueries
{
    public function requestData(){
        return UsersRegistrationRequest::all();
    }
}

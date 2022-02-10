<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User; 
use App\Models\UsersRegistrationRequest;

class CourseOffered extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function usersRegistrationRequest()
    {
        return $this->belongsTo(UsersRegistrationRequest::class);
    }
}

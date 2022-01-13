<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersRegistrationRequest extends Model
{
    use HasFactory;

    protected $hidden = [
        'password',
        'remember_token',
    ];

  
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Room extends Model
{
    use HasFactory;

    public function userFunction()
    {
        return $this->hasMany(User::class);
    }
}

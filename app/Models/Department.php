<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Achievement;
use App\Models\Faculty;

class Department extends Model
{
    use HasFactory;

    public function userFunction()
    {
        return $this->hasMany(User::class);
    }

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    public function achievement()
    {
        return $this->hasMany(Achievement::class);
    }
  
}

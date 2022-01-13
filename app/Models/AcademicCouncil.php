<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class AcademicCouncil extends Model
{
    use HasFactory;

    public function userFunction(){
        return $this->belongsTo(User::class);
    }
}

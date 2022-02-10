<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\NoticeBoard;

class Community extends Model
{
    use HasFactory;

    public function noticeBoards(){
        return $this->hasMany(NoticeBoard::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot("role");
    }
}

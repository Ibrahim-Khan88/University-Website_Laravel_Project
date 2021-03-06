<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\NoticeBoard;

class Group extends Model
{
    use HasFactory;

    public function noticeBoard(){
        return $this->hasMany(NoticeBoard::class);
    }
}

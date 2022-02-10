<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\NoticeBoard;

class Category extends Model
{
    use HasFactory;

    public function noticeBoards(){
        return $this->hasMany(NoticeBoard::class);
    }
}

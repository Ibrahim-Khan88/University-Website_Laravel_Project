<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Achievement extends Model
{
    use HasFactory;
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}

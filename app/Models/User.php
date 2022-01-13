<?php

namespace App\Models;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\RejectBoard;
use App\Models\AcademicCouncil;
use App\Models\SheikhRasalHall;
use App\Models\Department;
use App\Models\Room;
use App\Models\NoticeBoard;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function rejectBoardFunction(){
        return $this->hasOne(RejectBoard::class);
    }

    public function noticeBoard(){
        return $this->hasMany(NoticeBoard::class);
    }

    public function academicCouncilFunction(){
        return $this->hasOne(AcademicCouncil::class);
    }

    public function shakhRasalHallFunction(){
        return $this->hasOne(SheikhRasalHall::class);
    }

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
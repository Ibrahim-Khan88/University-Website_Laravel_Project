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
use App\Models\AwardAndRecognition; 
use App\Models\Conference;
use App\Models\CourseMaterial;
use App\Models\CourseOffered;
use App\Models\CurrentResearchAndCollaboration;
use App\Models\EducationExperience;
use App\Models\GraduateSupervision;
use App\Models\Journals;
use App\Models\Publication;
use App\Models\ResearchExperience;
use App\Models\TeachingExperience; 
use App\Models\Category;
use App\Models\Designation;
use App\Models\Grade;
use App\Models\Role;
use App\Models\Community;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function communities()
    {
        return $this->belongsToMany(Community::class);
    }

    public function courseMaterials(){
        return $this->hasMany(CourseMaterial::class);
    }

    public function courseOffereds(){
        return $this->hasMany(CourseOffered::class);
    }
    public function currentResearchAndCollaborations(){
        return $this->hasMany(CurrentResearchAndCollaboration::class);
    }

    public function educationExperiences(){
        return $this->hasMany(EducationExperience::class);
    }

    public function graduateSupervisions(){
        return $this->hasMany(GraduateSupervision::class);
    }

    public function journalss(){
        return $this->hasMany(Journals::class); 
    }
    
    public function publications(){
        return $this->hasMany(Publication::class);
    }

    public function researchExperiences(){
        return $this->hasMany(ResearchExperience::class);
    }

    public function teachingExperiences(){
        return $this->hasMany(TeachingExperience::class);
    }

    public function awardAndRecognitions(){
        return $this->hasMany(AwardAndRecognition::class);
    }

    public function conferences(){
        return $this->hasMany(Conference::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function rejectBoardFunction(){
        return $this->hasOne(RejectBoard::class);
    }

    public function noticeBoards(){
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

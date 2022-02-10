<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\Room;
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

class UsersRegistrationRequest extends Model
{
    use HasFactory;

    public function awardAndRecognitions(){
        return $this->hasMany(AwardAndRecognition::class);
    }
    public function conferences(){
        return $this->hasMany(Conference::class);
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







    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];

  
}

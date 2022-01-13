<?php

namespace App\Modules\GroupService;

use App\Models\TemporaryObject;

class GroupService
{
    public function reformateObject($objectReceives){

        $outputObject = new TemporaryObject(); 

        $outputObject -> name = $objectReceives -> name;
        $outputObject -> email = $objectReceives -> email;
        $outputObject -> designation = $objectReceives -> designation;
        $outputObject -> phone = $objectReceives -> phone;
        
        $outputObject -> photo = $objectReceives -> photo;
        $outputObject -> website  = $objectReceives -> website;
        $outputObject -> biographyFiledOfSpecialization = $objectReceives -> biographyFiledOfSpecialization;
        $outputObject -> researchInterest = $objectReceives -> researchInterest;
        $outputObject -> currentResearchAndCollaboration =  $objectReceives -> currentResearchAndCollaboration;
        $outputObject -> fellowshipOfScientificAndProfessionalSociaties = $objectReceives -> fellowshipOfScientificAndProfessionalSociaties;
        $outputObject -> educationExperience = $objectReceives -> educationExperience;
        $outputObject -> teachingExperience = $objectReceives -> teachingExperience;
        $outputObject -> researchExperience = $objectReceives -> researchExperience;
        $outputObject -> awardAndRecognition = $objectReceives -> awardAndRecognition;
        $outputObject -> publication = $objectReceives -> publication;
        $outputObject -> journals = $objectReceives -> journals;
        $outputObject -> conference = $objectReceives -> conference;
        $outputObject -> graduateSupervision = $objectReceives -> graduateSupervision;
        $outputObject -> courseOffered = $objectReceives -> courseOffered;
        $outputObject -> courseMaterial = $objectReceives -> courseMaterial;
        // $outputObject -> department_name = $objectReceives -> department_name;
        // $outputObject -> room_number = $objectReceives -> room_number;

        return $outputObject;
    }
}
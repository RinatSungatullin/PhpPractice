<?php

require_once __DIR__ . "/../entity/SurveyEntity.php";

class SurveyRepository
{
    private PDO $pdo;
    
    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function addSurvey(SurveyEntity $survey)
    {
        $stmt = $this->pdo->prepare("INSERT INTO surveys (
        id, email, phone_number, experience, language, additional_information
        )
        VALUES (:id, :email, :phone_number, :experience, :language, :additional_information)"); 

        $stmt->execute([
            'id' => $survey->getId(),
            'email' => $survey->getEmail(),
            'phone_number' => $survey->getPhoneNumber(),
            'experience' => $survey->getExperience(),
            'language' => $survey->getLanguage(),
            'additional_information' => $survey->getAdditionalInformation()
        ]);
    }
}

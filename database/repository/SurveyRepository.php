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
        user_id, full_name, email, phone_number, experience, language, additional_info
        )
        VALUES (:id, :full_name, :email, :phone_number, :experience, :language, :additional_information)"); 

        $stmt->execute([
            'id' => $survey->getId(),
            'full_name' => $survey->getFullName(),
            'email' => $survey->getEmail(),
            'phone_number' => $survey->getPhoneNumber(),
            'experience' => $survey->getExperience(),
            'language' => $survey->getLanguage(),
            'additional_information' => $survey->getAdditionalInformation()
        ]);
    }

    public function getSurvey(int $userId): ?SurveyEntity
    {
        $sth = $this->pdo->prepare('SELECT
                                    user_id, full_name, email, phone_number, experience, language, additional_info
                                    FROM surveys
                                    WHERE user_id = :id');


        $sth->execute([
            'id' => $userId
        ]);

        $survey = $sth->fetch(PDO::FETCH_ASSOC);

        if ($survey === false) {
            return null;
        }

        return new SurveyEntity(
            $survey['user_id'],
            $survey['full_name'],
            $survey['email'],
            $survey['phone_number'],
            $survey['experience'],
            $survey['language'],
            $survey['additional_info']
        );
    }

    public function deleteSurvey(int $userId)
    {
        $sth = $this->pdo->prepare('DELETE FROM surveys
                                    WHERE user_id = :id');


        $sth->execute([
            'id' => $userId
        ]);
    }
}

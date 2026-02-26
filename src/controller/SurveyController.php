<?php

require_once __DIR__ . "/../model/SurveyModel.php";
require_once __DIR__ . "/../../dto/SurveyDto.php";

class SurveyController
{
    private SurveyModel $surveyModel;

    public function __construct(SurveyModel $surveyModel)
    {
        $this->surveyModel = $surveyModel;
    }

    public function showSurvey()
    {
        $surveyDto = $this->surveyModel->getSurvey($_SESSION['user_id']);

        if ($surveyDto !== null) {
            $survey = (object) [
                'id' => $surveyDto->getId(),
                'full_name' => $surveyDto->getFullName(),
                'email' => $surveyDto->getEmail(),
                'phone_number' => $surveyDto->getPhoneNumber(),
                'experience' => $surveyDto->getExperience(),
                'language' => $surveyDto->getLanguage(),
                'additional_info' => $surveyDto->getAdditionalInformation(),
            ];
        }

        require_once __DIR__ . '/../view/survey.php';
    }

    public function submitSurvey()
    {
        try {
            $this->surveyModel->add(new SurveyDto(
                $_SESSION['user_id'],
                $_POST['full_name'],
                $_POST['email'],
                $_POST['phone_number'],
                $_POST['experience'],
                $_POST['language'],
                $_POST['additional_information'],
            ));
        } catch (Exception $e) {
            $error = $e->getMessage();
        }

        header('Location: index.php?route=survey');
        exit;
    }
}

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
        require_once __DIR__ . '/../view/survey.php';
    }

    public function submitSurvey()
    {
        try {
            $this->surveyModel->add(new SurveyDto(
                $_SESSION['user_id'],
                $_POST['email'],
                $_POST['phone_number'],
                $_POST['experience'],
                $_POST['language'],
                $_POST['additional_information'],
            ));
        } catch(Exception $e) {
            echo $e->getMessage();
        }
        
        /* echo 'submit survey' . '<br>';
        echo 'email: ' . $_POST['email'] . '<br>';
        echo 'phone number: ' . $_POST['phone_number'] . '<br>';
        echo 'experience: ' . $_POST['experience'] . '<br>';
        echo 'language: ' . $_POST['language'] . '<br>';
        echo 'additional info: ' . nl2br($_POST['additional_information']) . '<br>'; */
    }
}
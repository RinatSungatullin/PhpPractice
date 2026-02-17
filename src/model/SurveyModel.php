<?php

require_once __DIR__ . "/../../database/repository/SurveyRepository.php";
require_once __DIR__ . "/../../dto/SurveyDto.php";
require_once __DIR__ . "/../../resources/SurveyFieldsValidator.php";

class SurveyModel
{
    private SurveyRepository $repository;
    private SurveyFieldsValidator $validator;

    public function __construct(SurveyRepository $surveyRepository, SurveyFieldsValidator $surveyFieldsValidator)
    {
        $this->repository = $surveyRepository;
        $this->validator = $surveyFieldsValidator;
    }

    public function add(SurveyDto $surveyDto)
    {
        $id = $surveyDto->getId();
        $email = $surveyDto->getEmail();
        $phoneNumber = $surveyDto->getPhoneNumber();
        $experience = strtolower($surveyDto->getExperience());

        switch($surveyDto->getLanguage()) {
            case 'Java':
                $language = 'java';
                break;
            case 'PHP':
                $language = 'php';
                break;
            case 'C':
                $language = 'c';
                break;
            case 'C#':
                $language = 'csharp';
            case 'C++':
                $language = 'cpp';
        }

        $additionalInformation = $surveyDto->getAdditionalInformation();

        if (!$this->validator->validateEmail($email)) {
            throw new Exception('Invalid field: email');
        }

        if (!$this->validator->validatePhoneNumber($phoneNumber)) {
            throw new Exception('Invalid field: phone number');
        }

        if (!$this->validator->validateExperience($experience)) {
            throw new Exception('Invalid field: experience');
        }

        if (!$this->validator->validateLanguage($language)) {
            throw new Exception('Invalid field: language');
        }

        if (!$this->validator->validateAdditionalInformation($additionalInformation)) {
            throw new Exception('Invalid field: additional information');
        }
        
        $this->repository->addSurvey(new SurveyEntity(
            $id,
            $email,
            $phoneNumber,
            $experience,
            $language,
            $additionalInformation
        ));
    }
}

<?php

class SurveyFieldsValidator
{
    public function validateEmail(string $email): bool
    {
        if (
            !filter_var($email, FILTER_VALIDATE_EMAIL)
            || empty($email)
        ) {
            return false;
        }

        return true;
    }

    public function validatePhoneNumber(string $phoneNumber): bool
    {
        if (empty($phoneNumber)) {
            return false;
        }

        $pattern = "/^\+[1-9][0-9]{10}$/";

        if (!preg_match($pattern, $phoneNumber)) {
            return false;
        }

        return true;
    }

    public function validateExperience(string $experience): bool
    {
        if (empty($experience)) {
            return false;
        }

        if (!($experience === 'Yes' || $experience === 'No')) {
            return false;
        }

        return false;
    }

    public function validateLanguage(string $language): bool
    {
        $languageDict = [
            'java' => 'Java',
            'php' => 'PHP',
            'c' => 'C',
            'csharp' => 'C#',
            'cpp' => 'C++'
        ];

        if (empty($language) || !(isset($languageDict[$language]))) {
            return false;
        }

        return true;
    }

    public function validateAdditionalInformation(string $additionalInformation) : bool
    {
        if (strlen($additionalInformation) > 255) {
            return false;
        }

        return true;
    }
}

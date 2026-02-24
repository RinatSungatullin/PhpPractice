<?php

require_once __DIR__ . "/Language.php";

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

        if ($experience !== 'yes' && $experience !== 'no') {
            return false;
        }

        return true;
    }

    public function validateLanguage(string $language): bool
    {
        // $languages = ['java', 'php', 'c', 'csharp', 'cpp'];
        
        $lang = Language::tryFrom($language)->name;
        
        if (!$lang) {
            return false;
        }

        

        return true;
    }

    public function validateAdditionalInformation(string $additionalInformation): bool
    {
        if (strlen($additionalInformation) > 255) {
            return false;
        }

        return true;
    }
}

<?php

class SurveyDto
{
    private int $id;

    private string $email;

    private string $phoneNumber;

    private string $experience;

    private string $language;

    private string $additionalInformation;

    public function __construct($id, $email, $phoneNumber, $experience, 
                                $language, $additionalInformation) {
        $this->id = $id;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->experience = $experience;
        $this->language = $language;
        $this->additionalInformation = $additionalInformation;
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function setEmail($value)
    {
        $this->email = $value;
    }

    public function getPhoneNumber() : string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber($value)
    {
        $this->phoneNumber = $value;
    }

    public function getExperience() : string
    {
        return $this->experience;
    }

    public function setExperience($value)
    {
        $this->experience = $value;
    }

    public function getLanguage() : string
    {
        return $this->language;
    }

    public function setLanguage($value)
    {
        $this->language = $value;
    }

    public function getAdditionalInformation() : string
    {
        return $this->additionalInformation;
    }

    public function setAdditionalInformation($value)
    {
        $this->additionalInformation = $value;
    }
}

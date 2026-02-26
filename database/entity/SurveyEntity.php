<?php

class SurveyEntity
{
    private int $id;

    private string $fullname;

    private string $email;

    private string $phoneNumber;

    private string $experience;

    private string $language;

    private string $additionalInformation;

    public function __construct(int $id, string $email, string $fullName, string $phoneNumber,
                                string $experience, string $language, string $additionalInformation) {
        $this->id = $id;
        $this->fullname = $fullName;
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

    public function setId(int $value)
    {
        $this->id = $value;
    }

    public function getFullName()
    {
        return $this->fullname;
    }

    public function setFullName(string $value)
    {
        $this->fullname = $value;
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function setEmail(string $value)
    {
        $this->email = $value;
    }

    public function getPhoneNumber() : string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $value)
    {
        $this->phoneNumber = $value;
    }

    public function getExperience() : string
    {
        return $this->experience;
    }

    public function setExperience(string $value)
    {
        $this->experience = $value;
    }

    public function getLanguage() : string
    {
        return $this->language;
    }

    public function setLanguage(string $value)
    {
        $this->language = $value;
    }

    public function getAdditionalInformation() : string
    {
        return $this->additionalInformation;
    }

    public function setAdditionalInformation(string $value)
    {
        $this->additionalInformation = $value;
    }
}

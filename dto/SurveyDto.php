<?php

class SurveyDto
{
    private int $id;

    private string $fullName;

    private string $email;

    private string $phoneNumber;

    private string $experience;

    private string $language;

    private string $additionalInformation;

    public function __construct(int $id, string $fullName, string $email, string $phoneNumber,
                                string $experience, string $language, string $additionalInformation) {
        $this->id = $id;
        $this->fullName = $fullName;
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
        return $this->fullName;
    }

    public function setFullName(string $value)
    {
        $this->fullName = $value;
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

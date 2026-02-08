<?php

class RegistrationUserDto
{
    private string $full_name;

    private string $login;

    private string $password;

    private string $confirmed_password;

    public function __construct($full_name, $login, $password, $accepted_password) {
        $this->full_name = $full_name;
        $this->login = $login;
        $this->password = $password;
        $this->confirmed_password = $accepted_password;
    }

    public function getFullName()
    {
        return $this->full_name;
    }

    public function setFullName($value)
    {
        $this->full_name = $value;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($value)
    {
        $this->login = $value;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($value)
    {
        $this->password = $value;
    }

    public function getConfirmedPassword()
    {
        return $this->confirmed_password;
    }

    public function setConfirmedPassword($value)
    {
        $this->confirmed_password = $value;
    }
}

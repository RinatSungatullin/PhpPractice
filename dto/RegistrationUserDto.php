<?php

class RegistrationUserDto
{
    private string $login;

    private string $password;

    private string $confirmed_password;

    public function __construct(string $login, string $password, string $accepted_password) {
        $this->login = $login;
        $this->password = $password;
        $this->confirmed_password = $accepted_password;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin(string $value)
    {
        $this->login = $value;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword(string $value)
    {
        $this->password = $value;
    }

    public function getConfirmedPassword()
    {
        return $this->confirmed_password;
    }

    public function setConfirmedPassword(string $value)
    {
        $this->confirmed_password = $value;
    }
}

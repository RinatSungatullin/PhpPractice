<?php

class AuthenticationUserDto
{
    private string $login;

    private string $password;

    public function __construct(string $login, string $passwordHash)
    {
        $this->login = $login;
        $this->password = $passwordHash;
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
}

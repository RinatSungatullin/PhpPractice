<?php

class UserEntity
{
    private ?int $id;

    private string $fullname;

    private string $login;

    private string $passwordHash;

    public function __construct($fullname, $login, $passwordHash, ?int $id = null) {
        $this->id = $id;
        $this->fullname = $fullname;
        $this->login = $login;
        $this->passwordHash = $passwordHash;
    }

    public function getId()
    {
        return $this->id;
    }
    
    public function setId($value)
    {
        $this->id = $value;
    }

    public function getFullName()
    {
        return $this->fullname;
    }

    public function setFullName($value)
    {
        $this->fullname = $value;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($value)
    {
        $this->login = $value;
    }

    public function getPasswordHash()
    {
        return $this->passwordHash;
    }

    public function setPasswordHash($value)
    {
        $this->passwordHash = $value;
    }
}

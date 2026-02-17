<?php

class UserEntity
{
    private ?int $id;

    private ?string $fullname;

    private ?string $login;

    private ?string $passwordHash;

    public function __construct(?string $fullName = null, ?string $login = null, 
                                    ?string $passwordHash = null, ?int $id = null) {
        $this->id = $id;
        $this->fullname = $fullName;
        $this->login = $login;
        $this->passwordHash = $passwordHash;
    }

    public function getId()
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

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin(string $value)
    {
        $this->login = $value;
    }

    public function getPasswordHash()
    {
        return $this->passwordHash;
    }

    public function setPasswordHash(string $value)
    {
        $this->passwordHash = $value;
    }
}

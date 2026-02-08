<?php

class UserDto
{
    private int $id;

    private string $fullName;

    private string $login;

    public function __construct($id, $fullName, $login) {
        $this->id = $id;
        $this->fullName = $fullName;
        $this->login = $login;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function getFullname()
    {
        return $this->fullName;
    }

    public function setFullName($value)
    {
        $this->fullName = $value;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($value)
    {
        $this->login = $value;
    }
}

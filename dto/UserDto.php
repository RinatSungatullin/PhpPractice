<?php

class UserDto
{
    private int $id;

    private string $login;

    public function __construct(int $id, string $login) {
        $this->id = $id;
        $this->login = $login;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId(int $value)
    {
        $this->id = $value;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin(string $value)
    {
        $this->login = $value;
    }
}

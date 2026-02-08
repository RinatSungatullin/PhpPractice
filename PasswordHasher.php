<?php

class PasswordHasher
{
    public function __construct()
    {}

    public function hash (string $password) : string
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public function verify(string $password, string $password_hash) : bool
    {
        if (password_verify($password, $password_hash)) {
            return true;
        }

        return false;
    }
}

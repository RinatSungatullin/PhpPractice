<?php

class RegistrationDataValidator
{

    public function __construct()
    {}

    public function isValidFullName($fullName) : bool
    {
        $pattern = "/^[a-zA-Z ]+$/";

        if (!preg_match($pattern, $fullName)) {
            return false;
        }

        if (empty($fullName) || strlen($fullName) < 2 || strlen($fullName) > 255) {
            return false;
        }

        return true;
    }

    public function isValidLogin($login) : bool
    {   
        $pattern = "/^[a-zA-Z0-9_-]+$/";

        if (!preg_match($pattern, $login)) {
            return false;
        }

        if (strlen($login) < 4 || strlen($login) > 10) {
            return false;
        }

        return true;
    }

    public function isValidPassword($password) : bool
    {
        $pattern = "/^[a-zA-Z0-9_-]+$/";

        if (!preg_match($pattern, $password)) {
            return false;
        }

        if (strlen($password) < 5 || strlen($password) > 20) {
            return false;
        }

        return true;
    }

    public function isValidConfirmedPassword($password, $confirmedPassword) : bool
    {
        if ($password !== $confirmedPassword) {
            return false;
        }

        return true;
    }
}

<?php
require_once __DIR__ . "/../model/UserModel.php";
require_once __DIR__ . "/../../dto/AuthenticationUserDto.php";
require_once __DIR__ . "/../../dto/UserDto.php";

class AuthController
{
    private UserModel $userModel;

    public function __construct(UserModel $userModel) {
        $this->userModel = $userModel;
    }

    public function showLoginForm()
    {
        require_once __DIR__ . '/../view/login.php';
    }

    public function authorizeUser()
    {
        $this->userModel->authorize(new AuthenticationUserDto(
            $_POST['login'],
            $_POST['password']
        ));

        $user = $this->userModel->authorize(new AuthenticationUserDto(
            $_POST['login'],
            $_POST['password']
        ));

        echo $user->getId() . "<br>";
        echo $user->getFullname() . "<br>";
        echo $user->getLogin() . "<br>";

        require_once __DIR__ . '/../view/survey_form.php';
    }
}

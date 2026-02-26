<?php
require_once __DIR__ . "/../model/UserModel.php";
require_once __DIR__ . "/../../dto/RegistrationUserDto.php";

class RegistrationController
{
    private UserModel $userModel;

    public function __construct(UserModel $userModel) {
        $this->userModel = $userModel;
    }

    public function showRegisterForm()
    {
        require_once __DIR__ . '/../view/register.php';
    }

    public function registerUser()
    {
        try {
            $this->userModel->register(new RegistrationUserDto(
            $_POST['login'],
            $_POST['password'],
            $_POST['accept_password']
            ));

            header('Location: index.php?route=login');
            exit;
        } catch (Exception $e) {
            $error = $e->getMessage();

            require_once __DIR__ . "/../view/register.php";
        }
    }
}

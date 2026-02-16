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
            $_POST['full_name'],
            $_POST['login'],
            $_POST['password'],
            $_POST['accept_password']
            ));

            header('Location: index.php?route=login');
            exit;
        } catch (Exception $e) {
            echo "Error: {$e->getMessage()}";

            require_once __DIR__ . "/../view/register.php";
        }
        
        /* echo $_POST['full_name'] . '<br>';
        echo $_POST['login'] . '<br>';
        echo $_POST['password'] . '<br>';
        echo $_POST['accept_password'] . '<br>'; */
    }
}

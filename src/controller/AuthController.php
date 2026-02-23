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
        try {
            $user = $this->userModel->authorize(new AuthenticationUserDto(
            $_POST['login'],
            $_POST['password']
        ));

        $_SESSION['authorized'] = true;
        $_SESSION['user_id'] = $user->getId();

        header('Location: index.php?route=survey');

        exit;
        } catch (Exception $e) {
            $error = $e->getMessage();
            // echo "Error: {$e->getMessage()}";

            require_once __DIR__ . "/../view/login.php";
        }
    }

    public function logout()
    {
        $_SESSION = [];

        session_destroy();

        header("Location: index.php?route=login");
        exit;
    }
}

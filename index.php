<?php
require_once "database/Database.php";
require_once "database/repository/UserRepository.php";
require_once "src/model/UserModel.php";
require_once "src/controller/AuthController.php";
require_once "src/controller/RegistrationController.php";
require_once "PasswordHasher.php";
require_once "resources/RegistrationDataValidator.php";

try {
    $pdo = Database::connect();
} catch(PDOException $e) {
    var_dump("Error: {$e->getMessage()}");
}

$userRepository = new UserRepository($pdo);

$passwordHasher = new PasswordHasher();

$registrationDataValidator = new RegistrationDataValidator();

$userModel = new UserModel($userRepository, $passwordHasher, $registrationDataValidator);

$authController = new AuthController($userModel);
$registerController = new RegistrationController($userModel);

$route = $_GET['route'];
$method = $_SERVER['REQUEST_METHOD'];

switch($route) {
    case 'login':
        if ($method === 'POST') {
            $authController->authorizeUser();
        } elseif ($method === 'GET') {
            $authController->showLoginForm();
        }
        
        break;
    case '':
        $authController->showLoginForm();
        break;
    case 'register':
        
        if ($method === 'POST') {
            $registerController->registerUser();
        } elseif ($method === 'GET') {
            $registerController->showRegisterForm();
        }

        break;
}
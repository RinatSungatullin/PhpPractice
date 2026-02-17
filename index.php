<?php
require_once "database/Database.php";
require_once "database/repository/UserRepository.php";
require_once "src/model/UserModel.php";
require_once "src/model/SurveyModel.php";
require_once "src/controller/AuthController.php";
require_once "src/controller/RegistrationController.php";
require_once "src/controller/SurveyController.php";
require_once "PasswordHasher.php";
require_once "resources/RegistrationDataValidator.php";
require_once "resources/SurveyFieldsValidator.php";

session_start();

try {
    $pdo = Database::connect();
} catch(PDOException $e) {
    var_dump("Error: {$e->getMessage()}");
}

$userRepository = new UserRepository($pdo);

$surveyRepository = new SurveyRepository($pdo);

$passwordHasher = new PasswordHasher();

$registrationDataValidator = new RegistrationDataValidator();

$surveyFieldsValidator = new SurveyFieldsValidator();

$userModel = new UserModel($userRepository, $passwordHasher, $registrationDataValidator);

$surveyModel = new SurveyModel($surveyRepository, $surveyFieldsValidator);

$authController = new AuthController($userModel);
$registerController = new RegistrationController($userModel);
$surveyController = new SurveyController($surveyModel);

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
        $surveyController->showSurvey();
        break;
    case 'survey':
        if ($method === 'POST') {
            $surveyController->submitSurvey();
        } elseif ($method === 'GET') {
            $surveyController->showSurvey();
        }
        break;
    case 'register':
        
        if ($method === 'POST') {
            $registerController->registerUser();
        } elseif ($method === 'GET') {
            $registerController->showRegisterForm();
        }
        break;
    case 'logout':
        $authController->logout();
        break;
    default:
        $authController->showLoginForm();
}
<?php

require_once __DIR__ . "/../../PasswordHasher.php";
require_once __DIR__ . "/../../database/repository/UserRepository.php";
require_once __DIR__ . "/../../dto/RegistrationUserDto.php";
require_once __DIR__ . "/../../resources/RegistrationDataValidator.php";
require_once __DIR__ . "/../../dto/AuthenticationUserDto.php";
require_once __DIR__ . "/../../dto/UserDto.php";

class UserModel
{
    private UserRepository $userRepository;
    
    private PasswordHasher $passwordHasher;

    private RegistrationDataValidator $dataValidator;

    public function __construct($userRepository, $passwordHasher, $dataValidator) {
        $this->userRepository = $userRepository;

        $this->passwordHasher = $passwordHasher;

        $this->dataValidator = $dataValidator;
    }

    function register(RegistrationUserDto $registrationUserDto) {
        
        $fullName = $registrationUserDto->getFullName();

        $login = $registrationUserDto->getLogin();

        $password = $registrationUserDto->getPassword();
        
        $confirmedPassword = $registrationUserDto->getConfirmedPassword();

        if (!($this->dataValidator->isValidFullName($fullName)))
        {
            throw new Exception('invalid full name');
        }

        if (!($this->dataValidator->isValidLogin($login)))
        {
            throw new Exception('invalid login');
        }

        if (!($this->dataValidator->isValidPassword($password)))
        {
            throw new Exception('invalid password');
        }

        if (!($this->dataValidator->isValidConfirmedPassword($password, $confirmedPassword)))
        {
            throw new Exception('invalid confirmed password');
        }

        $passwordHash = $this->passwordHasher->hash($password);

        $this->userRepository->addUser(new UserEntity(
            $fullName,
            $login,
            $passwordHash
        ));
    }

    public function authorize(AuthenticationUserDto $authUserDto)
    {
        $userEntity = $this->userRepository->getUserByLogin($authUserDto->getLogin());

        if (!$userEntity) {
            throw new Exception("invalid login or password");
        }

        if (!($this->passwordHasher->verify($authUserDto->getPassword(), $userEntity->getPasswordHash()))) {
            throw new Exception('invalid login or password');
        }

        return new UserDto(
            $userEntity->getId(),
            $userEntity->getFullName(),
            $userEntity->getLogin()
        );
    }
}

<?php

require_once __DIR__ . "/../entity/UserEntity.php";

class UserRepository
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function addUser(UserEntity $user)
    {
        $stmt = $this->pdo->prepare("INSERT INTO users (full_name, login, password_hash)
        VALUES (:full_name, :login, :password_hash)"); 

        $stmt->execute([
            'full_name' => $user->getFullName(),
            'login' => $user->getLogin(),
            'password_hash' => $user->getPasswordHash(),
        ]);
    }

    public function getUserByLogin(string $login) : UserEntity
    {
        $sth = $this->pdo->prepare('SELECT id, full_name, login, password_hash
                                    FROM users
                                    WHERE login = :login');

        $sth->bindParam(':login', $login, PDO::PARAM_STR);

        $sth->execute();

        $user = $sth->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            throw new Exception('user not found');
        }

        return new UserEntity(
            $user['full_name'],
            $user['login'],
            $user['password_hash'],
            $user['id']
        );
    }
}

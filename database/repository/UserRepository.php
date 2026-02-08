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
        $stmt = $this->pdo->prepare("INSERT INTO users (full_name, username, password_hash)
        VALUES (:full_name, :username, :password_hash)"); 

        $stmt->execute([
            'full_name' => $user->getFullName(),
            'username' => $user->getLogin(),
            'password_hash' => $user->getPasswordHash(),
        ]);
    }

    public function getUserByLogin(string $login) : UserEntity
    {
        $sth = $this->pdo->prepare('SELECT id, full_name, username, password_hash
                                    FROM users
                                    WHERE username = :username');

        $sth->bindParam(':username', $login, PDO::PARAM_STR);

        $sth->execute();

        $user = $sth->fetch(PDO::FETCH_ASSOC);

        return new UserEntity(
            $user['full_name'],
            $user['username'],
            $user['password_hash'],
            $user['id']
        );
    }
}

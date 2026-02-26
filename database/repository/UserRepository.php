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
        $stmt = $this->pdo->prepare("INSERT INTO users (login, password_hash)
        VALUES (:login, :password_hash)");

        $stmt->execute([
            'login' => $user->getLogin(),
            'password_hash' => $user->getPasswordHash(),
        ]);
    }

    public function getUserByLogin(string $login): ?UserEntity
    {
        $sth = $this->pdo->prepare('SELECT id, login, password_hash
                                    FROM users
                                    WHERE login = :login');

        //$sth->bindParam(':login', $login, PDO::PARAM_STR);

        $sth->execute([
            'login' => $login
        ]);

        $user = $sth->fetch(PDO::FETCH_ASSOC);

        if ($user === false) {
            return null;
        }

        return new UserEntity(
            $user['login'],
            $user['password_hash'],
            $user['id']
        );
    }

    public function deleteUserAccount($userId) {
        /* $stmt = $this->pdo->prepare("DELETE FROM users
        WHERE user_id  = :userId");

        $stmt->execute([
            'userId' => $userId
        ]);


        $stmt->execute([
            'login' => $user->getLogin(),
            'password_hash' => $user->getPasswordHash(),
        ]); */
    }
}

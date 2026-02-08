<?php

class Database
{
    public static function connect(): PDO
    {
        try {
            $dbh = new PDO(
                "mysql:host=localhost;dbname=survey_db;charset=utf8", "dev", "Ql_135_ghpts14"
            );

            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $dbh;

        } catch (PDOException $e) {
            die("Error " . $e->getMessage());
        }
    }
}

/* class Database
{
    public static function connect(): PDO
    {
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=survey_db', 'dev', 'Ql_135_ghpts14');
            
        } catch(PDOException $e) {
            echo "Error: {$e->getMessage()}";
        }
        
        return $dbh;
    }
} */

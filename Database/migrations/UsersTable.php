<?php

class UsersTable{

    public static function createUsersTable($pdo){
        try {
                $query = "CREATE TABLE IF NOT EXISTS users(
                id INT AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(255) NOT NULL UNIQUE,
                email VARCHAR(255) NOT NULL UNIQUE,
                password VARCHAR(255) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )";
        } catch (\Throwable $th) {
            $th->getMessage();
        }

        $stm = $pdo->prepare($query);
        $stm->execute();
    }
}
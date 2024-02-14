<?php

class StudentsTable{
    public static function CreateStudentsTable($pdo){
        try {
            $query = "CREATE TABLE IF NOT EXISTS students(
                id INT AUTO_INCREMENT PRIMARY KEY,
                fname VARCHAR(255) NOT NULL,
                lname VARCHAR(255) NOT NULL,
                age VARCHAR(255) NOT NULL,
                class VARCHAR(255) NOT NULL,
                state VARCHAR(255) NOT NULL,
                religion VARCHAR(255) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )";
        } catch (\Throwable $th) {
            $th->getMessage();
        }

        $stm = $pdo->prepare($query);
        $stm->execute();
    }
}
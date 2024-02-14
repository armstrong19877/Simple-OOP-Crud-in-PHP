<?php

$config = require "../config.php";
require "../Database/Connection.php";
require "../Database/migrations/UsersTable.php";
require "../Database/migrations/StudentsTable.php";
$pdo = Connection::connect($config['database']);
UsersTable::createUsersTable($pdo);
StudentsTable::createStudentsTable($pdo);
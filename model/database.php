<?php
    $dsn = 'mysql:host=sql1.njit.edu;dbname=mwe3';
    $username = 'mwe3';
    $password = 'SCqrutvGv';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>

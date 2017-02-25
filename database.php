<?php
    $dsn= 'mysql:host=sql1.njit.edu;dbname=psl9';
    $username = 'psl9';
    $password = 'g9HizRBk';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>

<?php
    global $pdo;
    $host = 'localhost';
    $dbname = 'svaz';/*Тут пишешь название своей базы данных*/
    $username = 'root';
    $password = '';
    try {
        $pdo= new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    } catch (Exception $pe) {
        echo "Ошибка";
    }
?>
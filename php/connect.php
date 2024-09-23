<?php
$host = '127.0.0.1';
$dbname = 'repeat';
$user = 'root'; // Замените на ваше имя пользователя базы данных
$pass = ''; // Замените на ваш пароль базы данных

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>

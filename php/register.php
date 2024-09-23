<?php
require 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Хешируем пароль
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Подготовленный запрос для предотвращения SQL инъекций
    $stmt = $pdo->prepare("INSERT INTO users (name, login, password) VALUES (?, ?, ?)");
    if ($stmt->execute([$name, $login, $hashedPassword])) {
        echo '<script>alert("Регистрация прошла успешно!")</script>';
        header("location: /login.php");
    } else {
        echo '<script>alert("Ошибка регистрации.")</script>';
    }
}
?>

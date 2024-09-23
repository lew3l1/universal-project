<?php
session_start();
require 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Подготовленный запрос для предотвращения SQL инъекций
    $stmt = $pdo->prepare("SELECT password FROM users WHERE login = ?");
    $stmt->execute([$login]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        echo '<script>("Авторизация успешна!")</script>';   
        // Здесь вы можете создать сессию для пользователя или выполнить другую необходимую логику
        header("Location: ../index.php");
        
    } else {
        echo '<script>("Неверный логин или пароль.")</script>';
    }
}
?>

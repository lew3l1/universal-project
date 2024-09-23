<?php
session_start();
require 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];

   
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE login = ?");
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($userId, $hashedPassword);
    $stmt->fetch();

    if ($stmt->num_rows > 0 && password_verify($password, $hashedPassword)) {
      
        $_SESSION['user_id'] = $userId;

        echo '<script>alert("Авторизация успешна!"); window.location.href="../index.php";</script>';
        exit; 
    } else {
        echo '<script>alert("Неверный логин или пароль."); window.history.back();</script>';
    }

    $stmt->close();
}
?>

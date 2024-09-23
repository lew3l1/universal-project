<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/auth-form.css">
</head>
<body>
<div class="register-container">
        <div class="image-container">
            <!-- Место для изображения -->
            <img src="img/pictures/freedom.jpg" alt="Изображение пользователя">
        </div>
        <h2>Регистрация</h2>
        <form method="post" action="php/register.php">
            <label for="name">Имя:</label>
            <input type="text" id="name" name="name" required>
            <label for="login">Логин:</label>
            <input type="text" id="login" name="login" required>
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Зарегистрироваться">
        </form>
        <div class="login-link">
            <p>Уже есть аккаунт? <a href="login.php">Войдите</a></p>
        </div>
    </div>
</body>
</html>

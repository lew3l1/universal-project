<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="css/auth-form.css">
</head>
<body>
<div class="login-container">
        <div class="image-container">
            <img src="/img/pictures/flag.jpg" alt="Квадратное изображение">
        </div>
        <h2>Авторизация</h2>
        <form method="post" action="../php/login.php">
            <label for="login">Логин:</label>
            <input type="text" id="login" name="login" required>
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Войти">
        </form>
        <div class="register-link">
            <p>Нет аккаунта? <a href="register.php">Зарегистрируйтесь</a></p>
        </div>
    </div>
</form>
</body>
</html>

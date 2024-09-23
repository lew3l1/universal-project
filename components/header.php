<?php
require_once "php/connect.php";
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universal</title>
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="header-group left-group">
                <img src="img/svg/free.svg" alt="Statue of Liberty">
                <h1>Boston and New York Bear Brunt</h1>
            </div>
            <div class="header-group center-group">
                <h1>Universal</h1>
            </div>
            <div class="header-group right-group">
                <div class="date-box">
                    <?php include 'php/date.php'; ?>
                </div>
                <div id="weather">
                    <img src="/img/svg/Sun.svg" alt="Weather Icon"> --°C
                </div>
                <div class="auth-box">
                    <?php
                    if (isset($_SESSION['user_id'])) {
                        $userId = $_SESSION['user_id'];
                        $stmt = $conn->prepare("SELECT name FROM users WHERE id = ?");
                        $stmt->bind_param("i", $userId);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        $user = $result->fetch_assoc();

                        if ($user) {
                            echo '<span>Добро пожаловать, <a href="profile.php">' . htmlspecialchars($user['name']) . '</a></span>';
                        } else {
                            echo "Ошибка: пользователь не найден.";
                        }
                    } else {
                        echo '<a href="login.php" class="sign-in-link">
                              <img src="img/svg/user.svg" alt="Profile Icon"> Войти </a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </header>

    <nav>
        <ul>
            <li><a href="#">News</a></li>
            <li><a href="#">Opinion</a></li>
            <li><a href="#">Science</a></li>
            <li><a href="#">Life</a></li>
            <li><a href="#">Travel</a></li>
            <li><a href="#">Moneys</a></li>
            <li><a href="#">Art & Design</a></li>
            <li><a href="#">Sports</a></li>
            <li><a href="#">People</a></li>
            <li><a href="#">Health</a></li>
            <li><a href="/php/out.php">Education</a></li>
        </ul>
    </nav>

    <script src="js/weather.js"></script>
</body>
</html>

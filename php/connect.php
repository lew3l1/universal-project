    <?php
    $host = '127.0.0.1';
    $dbname = 'repeat';
    $user = 'root'; 
    $pass = ''; 

    $conn = new mysqli($host, $user, $pass, $dbname);

    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }
    ?>
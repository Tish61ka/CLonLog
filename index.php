<?php 
    session_start();
    if($_SESSION['user']){
        header('Location: profile.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторнизация и регистрация</title>
    <link rel="stylesheet" href="/asept/css/main.css">
</head>
<body>
    <!--Форма авторизации-->
    <form action="vender/signin.php" method="POST">
        <ul>
            <li>
                <label for="">Логин </label>
                <input type="text" name="login">
            </li>
            <li>
                <label for="">Пароль</label>
                <input type="password" name="password">
            </li>
        </ul>
        
        <button>Войти</button>
        <p>У вас нет аккаунта? <a href="/reg.php">Зарегестрируйтесь</a></p>
        <?php
        echo "<p>{$_SESSION['message']}</p>";
        unset($_SESSION['message']);
        ?>
    </form>
</body>
</html>
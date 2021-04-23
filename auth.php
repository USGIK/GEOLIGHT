<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="css/navbar.css">
</head>
<body>
    <?php require_once "nav.php"; ?><br>
    <?php if (!isset($_GET['reg'])) {?>
    <form action="config/div.php" method="post">
        <input type="text" name="login" placeholder="Логин">
        <input type="text" name="password" placeholder="Пароль">
        <button type="submit">Войти</button>
    </form>
    <form action="" method="get">
        <button name="reg" type="submit">Зарегистрироваться</button>
    </form>
    <?php
    }
    if (isset($_GET['reg'])) {
        unset($_GET['reg'])
    ?>
    <form action="config/div.php" method="post">
        <input type="text" name="loginreg" placeholder="Логин">
        <input type="text" name="passwordreg" placeholder="Пароль">
        <button type="submit">Зарегистрироваться</button>
    </form>
    <form action="" method="get">
        <button name="sign" type="submit">Войти</button>
    </form>
    <?php
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/auth.css">
</head>
<body>
    <div class="wrapper">
        <?php require_once "nav.php"; ?><br>
        <section class="auth">
            <div class="auth__body">
                <div class="auth__container">
                    <h1 class="auth__title">Вход</h1>
                </div>
                <?php if (!isset($_GET['reg'])) { ?>
                <div class="auth__signin">
                    <div class="signin__body">
                        <form action="config/div.php" method="post" class="signin__form">
                            <input type="text" name="login" placeholder="Логин">
                            <input type="text" name="password" placeholder="Пароль">
                            <button type="submit">Войти</button>
                        </form>
                        <form action="" method="get" class="sign">
                            <button name="reg" type="submit">Зарегистрироваться</button>
                        </form>
                    </div>
                </div>
                <?php } ?>
                <?php
                if (isset($_GET['reg'])) {
                    unset($_GET['reg'])
                ?>
                <div class="auth__signup">
                    <div class="signup__body">
                        <form action="config/div.php" method="post" class="signup__form">
                            <input type="text" name="loginreg" placeholder="Логин">
                            <input type="text" name="passwordreg" placeholder="Пароль">
                            <button type="submit">Зарегистрироваться</button>
                        </form>
                        <form action="" method="get" class="sign">
                            <button name="sign" type="submit">Войти</button>
                        </form>
                    </div>
                </div>
                <?php } ?>
            </div>
        </section>
    </div>
</body>
</html>
<nav class="top-nav row">
    <img class="logo" src="img/logo.PNG" alt="" srcset="">
    <a class="nav-button" href="/">Дом</a>
    <?php
    if (isset($_SESSION['login'])) {
    ?>
    <a class="nav-button" href="add.php">Добавить модель</a>
    <a class="nav-button" href="models.php">Ваши Модели</a>
    <?php
    }
    if (!isset($_SESSION['login'])) {
    ?>
    <a class="nav-button" href="auth.php">Войти/Зарегистрироваться</a>
    <?php
    }
    ?>
    <a class="nav-button" href="about.php">О нас</a>
    <?php
    if (isset($_SESSION['login'])) {
    ?>
    <form action="config/div.php" method="get" class="nav-form"><button class="nav-button" name="exit" type="submit">Выйти</button></form>
    <?php
    }
    ?>
</nav>
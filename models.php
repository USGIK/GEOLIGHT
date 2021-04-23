<?php
session_start();
require_once "config/db.php";
$models = mysqli_query($connection, "SELECT * FROM `models` WHERE `user`='".$_SESSION['login']."'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/models.css">
    <title>Ваши модели</title>
</head>
<body>
    <?php require_once "nav.php"; ?><br>
    <main class="main">
        <h1>Ваши модели</h1>
        <div class="models">
            <?php
            while($model = mysqli_fetch_assoc($models)) {
            ?>
            <div class="model">
                <div class="title">
                    <h2><?php echo $model['src']; ?></h2>
                </div>
                <form action="config/div.php" method="get">
                    <input type="hidden" name="src" value="<?php echo $model['src']; ?>">
                    <button name="edit_model" type="submit">Изменить модель</button>
                </form>
            </div>
            <?php
            }
            ?>
        </div>
    </main>
</body>
</html>
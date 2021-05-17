<?php
session_start();
require_once "db.php";

if (
    isset($_POST['latlng']) and
    !empty($_FILES['model']['name']) and
    isset($_POST['height']) and
    isset($_POST['scale'])
    ) {
        if (mysqli_query($connection, "INSERT INTO `models` (`src`, `height`, `scale`, `latlng`, `user`, `pitch`, `roll`) VALUES ('".$_FILES['model']['name']."', '".$_POST['height']."', '".$_POST['scale']."', '".$_POST['latlng']."', '".$_SESSION['login']."', '".$_POST['pitch']."', '".$_POST['roll']."')")) {
            move_uploaded_file($_FILES['model']['tmp_name'], '../models/'.$_FILES['model']['name']);
            header("Location: /index.php");
            exit();
        }
    }

if (isset($_POST['loginreg']) and isset($_POST['passwordreg'])) {
    if (mysqli_query($connection, "INSERT INTO `users` (`login`, `password`) VALUES ('".$_POST['loginreg']."', '".md5($_POST['passwordreg'])."')")) {
        $_SESSION['login'] = $_POST['loginreg'];
        header("Location: /add.php");
        exit();
    }
}

if (isset($_POST['login']) and isset($_POST['password'])) {
    $query = mysqli_query($connection, "SELECT * FROM `users` WHERE `login`='".$_POST['login']."' AND `password`='".md5($_POST['password'])."'");
    if (mysqli_num_rows($query) == 1) {
        $_SESSION['login'] = $_POST['login'];
        header("Location: /add.php");
        exit();
    }
    else {
        header("Location: /auth.php");
        exit();
    }
}

if (isset($_GET['edit_model'])) {
    $_SESSION['model'] = $_GET['src'];
    header("Location: /edit.php");
    exit();
}

if (
    isset($_POST['latlngu']) or
    isset($_POST['heightu']) or
    isset($_POST['scaleu']) or
    isset($_POST['postu']) or
    isset($_POST['rollu'])
    ) {
        if (isset($_POST['latlngu'])) {
            mysqli_query($connection, "UPDATE `models` SET `latlng`='".$_POST['latlngu']."' WHERE `user`='".$_SESSION['login']."' AND `src`='".$_SESSION['model']."'");
        }
        if (isset($_POST['heightu'])) {
            mysqli_query($connection, "UPDATE `models` SET `height`='".$_POST['heightu']."' WHERE `user`='".$_SESSION['login']."' AND `src`='".$_SESSION['model']."'");
        }
        if (isset($_POST['scaleu'])) {
            mysqli_query($connection, "UPDATE `models` SET `scale`='".$_POST['scaleu']."' WHERE `user`='".$_SESSION['login']."' AND `src`='".$_SESSION['model']."'");
        }
        if (isset($_POST['pitchu'])) {
            mysqli_query($connection, "UPDATE `models` SET `pitch`='".$_POST['pitchu']."' WHERE `user`='".$_SESSION['login']."' AND `src`='".$_SESSION['model']."'");
        }
        if (isset($_POST['rollu'])) {
            mysqli_query($connection, "UPDATE `models` SET `roll`='".$_POST['rollu']."' WHERE `user`='".$_SESSION['login']."' AND `src`='".$_SESSION['model']."'");
        }
        header("Location: /index.php");
        exit();
    }

if (isset($_GET['exit'])) {
    unset($_SESSION['login']);
    header("Location: /index.php");
    exit();
}
<?php
session_start();
include "config/db.php";
$models = mysqli_query($connection, "SELECT * FROM `models`");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cesium.com/downloads/cesiumjs/releases/1.77/Build/Cesium/Cesium.js"></script>
    <link href="https://cesium.com/downloads/cesiumjs/releases/1.77/Build/Cesium/Widgets/widgets.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/navbar.css">
    <title>ГЕОЛАЙТ</title>
</head>
<body>
    <?php require_once "nav.php"; ?>
    <head>
        <div class="header">
            <h1>МАКЕТ 3D МОДЕЛЕЙ СКВЕРА</h1>
        </div>
    </head><br>
    <main class="main">
        <div class="title">
            <p>Наш продукт</p>
        </div><br>
        <div class="map"><div id="cesiumContainer"></div></div>
    </main><br><br>
    <footer class="footer">
        <div class="footer_hr"></div>
        <div class="title">
            <p>Наши партнеры</p>
        </div>
        <div class="partners">
            <a href="http://usgik.ru/"><img src="img/usgik.jpg" alt="" srcset="" width="200px"></a>
            <a href="https://kvant.dm-centre.ru/"><img src="img/kv.webp" alt="" srcset="" width="200px"></a>
            <a href="https://dm-centre.ru/"><img src="img/dm.jpg" alt="" srcset="" width="200px"></a>
        </div><br><br>
    </footer>
    <!-- <script src="js/main.js"></script> -->
    <script src="js/index.js"></script>
    <script>
    let center;
    let modelMatrix;
    let model;
    </script>
    <?php
    while ($model = mysqli_fetch_assoc($models)) {
    ?>
    <script>
        center = Cesium.Cartesian3.fromDegrees(<?php echo $model['latlng'].','.$model['height']; ?>),
            heading = Cesium.Math.toRadians(120.3),
            pitch = 0.0,
            roll = 0.0,
            hpr = new Cesium.HeadingPitchRoll(heading, pitch, roll)
        modelMatrix = Cesium.Transforms.headingPitchRollToFixedFrame(center, hpr)
        model = viewer.scene.primitives.add(
            Cesium.Model.fromGltf({
                url: '/models/<?php echo $model['src']; ?>',
                modelMatrix: modelMatrix,
                scale: <?php echo $model['scale']; ?>
            })
        )
    </script>
    <?php
    }
    ?>
</body>
</html>
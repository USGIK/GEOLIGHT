<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить модель</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="crossorigin=""></script>
    <script src="https://cesium.com/downloads/cesiumjs/releases/1.77/Build/Cesium/Cesium.js"></script>
    <link href="https://cesium.com/downloads/cesiumjs/releases/1.77/Build/Cesium/Widgets/widgets.css" rel="stylesheet">
    <link rel="stylesheet" href="css/add.css">
    <link rel="stylesheet" href="css/navbar.css">
</head>
<body>
    <?php require_once "nav.php"; ?><br>
    <main class="main">
        <div class="title">
            <p>Добавить модель</p>
        </div><br>
        <div class="map"><div id="map" style="height: 700px;width: 50%;"></div></div><br>
        <form action="config/div.php" method="post" enctype="multipart/form-data" class="uploadform">
            <div class="upload">
                <input type="hidden" name="latlng" id="latlng">
                <div class="input">
                    <label for="file">Модель:</label>
                    <input type="file" name="model" id="model">
                    <label for="number">Высота над уровнем моря:</label>
                    <input type="number" name="height" id="height" value="230">
                    <label for="text">Размер:</label>
                    <input type="text" name="scale" value="1.0">
                    <label for="text">Наклон:</label>
                    <input type="text" name="pitch" value="0.0">
                    <label for="text">Наклон2:</label>
                    <input type="text" name="roll" value="0.0">
                </div><br>
                <div class="input">
                    <button type="submit">Отправить</button>
                </div>
            </div>
        </form>
    </main><br><br> 
    <script src="js/add.js"></script>
</body>
</html>
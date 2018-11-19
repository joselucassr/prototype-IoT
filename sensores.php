<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">

    <!-- CSS bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- CSS Custom -->
    <link rel="stylesheet" href="css/style.css">
    <!-- CSS Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600,800,900" rel="stylesheet" type="text/css">

    <title>Prototype Sensores</title>
</head>
<body>

<?php include_once "includes/navbar.php"?>

<div class="container col-12">
    <h1 class="text-center titulo">Meus Sensores</h1>
    <div class="row col-12" style="padding-top: 20px;">
        <!-- Card Sensor -->
        <div class="sensores">
            <div class="nomeSensor">
                <h3 class="d-inline">Nome do Sensor</h3>
                <i class="fas fa-battery-full d-inline float-right iconBateria"></i>
            </div>
            <div class="corpo">
                <h1 class="temperatura">-3 °C</h1>
                <p class="hora">13/11/2018 14:30:15</p>
            </div>
        </div>

        <!-- Adicionar Grupo -->
        <div class="sensores">
            <div class="nomeSensor">
                <h3 class="d-inline">Nome do Sensor</h3>
                <i class="fas fa-battery-full d-inline float-right iconBateria"></i>
            </div>
            <div class="corpo">
                <div class="slider"></div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts Slider -->
<script type="text/javascript" src="https://rawgit.com/kimmobrunfeldt/progressbar.js/1.0.0/dist/progressbar.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<!-- Scripts bootstrap -->
<script src="js/bootstrap.js"></script>
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
</body>
</html>

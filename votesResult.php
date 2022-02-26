<?php
    require_once 'modules/conexion.php';
    require_once 'modules/getVotes.php';

    $getVotes = new getVotes ();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de las elecciones | Liceo Tecnico Hermanas Rosario Torres</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1 class="title-result">Resultados de las elecciones</h1>
    <div class="result">
        <div class="result__box">
            <img src="assets/images/user.png" alt="" class="result__box--image">
            <p class="result__box--number"><?php echo $getVotes->getVotesA() ?> Votos</p>
            <p class="result__box--title">PLANCA A</p>
        </div>

        <div class="result__box">
            <img src="assets/images/user.png" alt="" class="result__box--image">
            <p class="result__box--number"><?php echo $getVotes->getVotesB() ?> Votos</p>
            <p class="result__box--title">PLANCA B</p>
        </div>
    </div>

</body>
</html>
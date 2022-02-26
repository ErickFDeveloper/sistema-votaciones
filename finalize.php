<?php
    session_start();

    require_once 'modules/session_destroy.php';

    sessionDestroy ();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gracias por votar</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main class="body">
        <div class="progress-bar">
            <div class="progress-bar__circle active"></div>
            <div class="progress-bar__line">
                <div class="progress-bar__line--background progress-bar-finalize"></div>
            </div>
            <div class="progress-bar__circle active"></div>
            <div class="progress-bar__circle active"></div>
        </div>

        <div class="text-progress-bar">
            <p class="text-progress-bar__detail active">Inicio</p>
            <p class="text-progress-bar__detail active">Seleccionar</p>
            <p class="text-progress-bar__detail active">Finalizar</p>
        </div>

        <div id="tsparticles"></div>

        <div class="thank-you">
            <img src="assets/images/Check.png" alt="" class="thank-you__image">

            <p class="thank-you__title">¡GRACIAS POR PARTICIPAR!</p>
            <p class="thank-you__details">Tu voto ha sido completado con exito, por favor dale click al boton rojo que esta debajo, Gracias.</p>
            <a href="index.php"><button class="thank-you__button">Votar con otra matricula</button></a>
            <div class="thank-you__socials-networks">
                <img src="assets/images/facebook.png" alt="" class="thank-you__socials-networks--icons">
                <img src="assets/images/Instagram.png" alt="" class="thank-you__socials-networks--icons">
            </div>
        </div>

       
    </main>
</body>
</html>
<?php
    session_start();

    if ($_SESSION['usuario']) {
        
    } else {
        header('Location: index.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecciona la plancha para continuar</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main class="body">
        <div class="progress-bar">
            <div class="progress-bar__circle active"></div>
            <div class="progress-bar__line">
                <div class="progress-bar__line--background"></div>
            </div>
            <div class="progress-bar__circle active"></div>
            <div class="progress-bar__circle"></div>
        </div>

        <div class="text-progress-bar">
            <p class="text-progress-bar__detail active">Inicio</p>
            <p class="text-progress-bar__detail active">Seleccionar</p>
            <p class="text-progress-bar__detail">Finalizar</p>
        </div>

        <img src="assets/images/logo.png" alt="" class="logotype min-width-logotype">

        <div class="text">
            <p class="text__title">SELECCIONA LA PLANCHA POR LA QUE VAS A VOTAR:</p>
        </div>

        <div class="background"></div>
        <div class="modal modal-a">
            <img src="assets/images/Warning.png" alt="" class="modal__icon">
            <p class="modal__title">¿Seguro que quieres votar por la plancha A?</p>

            <div class="modal__buttons">
                <a href="#"><button class="modal__buttons--button button-a" data-close="A">Cancelar</button></a>
                <a href="modules/votar.php?plancha=Plancha A"><button class="modal__buttons--button background-red">Continuar</button></a>
            </div>
        </div>

        <div class="modal modal-b">
            <img src="assets/images/Warning.png" alt="" class="modal__icon">
            <p class="modal__title">¿Seguro que quieres votar por la plancha B?</p>

            <div class="modal__buttons">
                <a href="#"><button class="modal__buttons--button button-a" data-close="B">Cancelar</button></a>
                <a href="modules/votar.php?plancha=Plancha B"><button class="modal__buttons--button background-red">Continuar</button></a>
            </div>
        </div>

        <div class="container">
            <div class="container__box">
                <div class="container__box--image">
                    <img src="assets/images/plancha A.jpeg" alt="">
                </div>
                <p class="container__box--title">PLANCHA A</p>
                <button class="container__box--button" data-plancha="A">SELECCIONAR</button>
            </div>

            <div class="container__box">
                <div class="container__box--image">
                    <img src="assets/images/plancha B.jpeg" alt="">
                </div>
                <p class="container__box--title">PLANCHA B</p>
                <button class="container__box--button" data-plancha="B">SELECCIONAR</button>
            </div>
        </div>
    </main>

    <script src="assets/js/select.js"></script>
</body>
</html>
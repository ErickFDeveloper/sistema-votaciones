<?php
    session_start();

    require_once 'modules/conexion.php';
    require_once 'modules/enrrollement-log-in.php';

    if ($_POST) {
        $number = $_POST['enrrollement'];

        $errMessage = enrrollementLogIn ($number);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votaciones | Liceo Tecnico Hermanas Rosario Torres Fe y Alegria</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main class="body">
        <div class="progress-bar">
            <div class="progress-bar__circle active"></div>
            <div class="progress-bar__line"></div>
            <div class="progress-bar__circle"></div>
            <div class="progress-bar__circle"></div>
        </div>

        <div class="text-progress-bar">
            <p class="text-progress-bar__detail active">Inicio</p>
            <p class="text-progress-bar__detail">Seleccionar</p>
            <p class="text-progress-bar__detail">Finalizar</p>
        </div>

        <img src="assets/images/logo.png" alt="" class="logotype">

        <div class="text">
            <p class="text__title">POR FAVOR INGRESA TU MATRICULA PARA INICIAR...</p>
            <p class="text__details">Para continuar el proceso ingresa tu matricula, dale al boton de siguiente, selecciona tu plancha por la que vas a votar y listo.</p>
        </div>

        <form action="index.php" class="form" method="POST">
            <div class="form__group">
                <label for="" class="form__group--placeholder">Ingresa la matricula...</label>
                <img src="assets/images/padlock.png" alt="" class="form__group--icon">
                <input type="text" name="enrrollement" id="" class="form__group--input" autocomplete="off">
            </div>
            <p class="form__message">¡Error, la matricula solo puede contener 4 numeros y sin letras, EJ: "0000"!</p>

            <?php if ($_POST): ?>
                <p class="form__message-back"><?php echo $errMessage ?></p>
            <?php endif ?>
            
            <button class="form__next button-off">CONTINUAR</button>

        </form>
    </main>

    <script src="assets/js/index.js"></script>
</body>
</html>
<?php
    session_start ();
    require_once 'conexion.php';
   

    if ($_GET['plancha']) {
        if($_SESSION["usuario"]){
            $usuario = $_SESSION["usuario"];
            $partido = $_GET['plancha'];
    
            $insertar = 'INSERT INTO votes (enrollment, matchest) values (?,?)';
            $sentenciar_insertar = $mbd->prepare($insertar);
            $sentenciar_insertar->execute(array($usuario,$partido));
    
            $editar = "UPDATE enrollment SET status = '2' WHERE enrollment = ?";
            $sentenciar_editar = $mbd->prepare($editar);
            $sentenciar_editar->execute(array($usuario));
    
            header("location: ../finalize.php");
        } else{
            header("location: ../index.php");
        }
    } else {
        header('Location: ../index.php');
    }
    
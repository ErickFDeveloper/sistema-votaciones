<?php
    function enrrollementLogIn ($enrrollement) {
        global $mbd;

        if($_POST){
            $leer_matricula = 'SELECT * FROM enrollment WHERE enrollment = ?';
            $sentencia_leer_matricula = $mbd->prepare($leer_matricula);
            $sentencia_leer_matricula->execute(array($enrrollement));
            
            $resultado = $sentencia_leer_matricula->fetch();
            
            ///
            $sentencia_cuenta = 'SELECT COUNT(*) AS cuenta FROM enrollment WHERE enrollment = ?';
            $sentencia_leer_cuenta = $mbd->prepare($sentencia_cuenta);
            $sentencia_leer_cuenta->execute(array($enrrollement));
            
            $resultado_cuenta = $sentencia_leer_cuenta->fetch();
        
        
        
            if( $resultado_cuenta['cuenta'] == 0 ){
               return "Esta matricula no se encuentra registrada en nuestra bases de datos";
            } else if ( $resultado['status'] == 1 ) {
                $user = $resultado['enrollment'];
                $_SESSION["usuario"] = $user;
            
                return header("location: select.php");
            } else if ( $resultado['status'] == 2 ) {
                return "El voto con esta matricula ya fue realizado";
            }    
        }
    }

    
<?php

if(isset($_POST['submit'])){

    switch($_POST['submit']){

        case "jugar":
            numeroInicial($_POST['opcion']);            
        break;
        case "mayor":

            $numeroInferior=$_POST['numeroGenerado'];
            $numeroSuperior=$_POST['numeroSuperior'];    
            siguiente_jugada($numeroInferior,$numeroSuperior);

        break;
        case "menor":

            $numeroInferior=$_POST['numeroInferior'];
            $numeroSuperior=$_POST['numeroGenerado'];
            siguiente_jugada($numeroInferior,$numeroSuperior);

        break;
        case "acertado":

            fin_juego(true);

        break;
        default: header('Location: index.html'); exit;

    }

}else{
    header('Location: index.html'); exit;
}

function siguiente_jugada($numeroInferior,$numeroSuperior){

    $intentos=++$_POST['intentos'];
    $limite=$_POST['limite'];

    if($intentos<=$limite){

        $quedan_intentos=$limite-$intentos;
        $numeroGenerado=generaNumero($numeroInferior,$numeroSuperior);
        require_once("vista_jugar.php");

    }else{
        fin_juego(false);
    }

}

function numeroInicial($opcion){
    
    switch($opcion){
        case 1:
            $intentos=1;
            $limite=10;
            $quedan_intentos=$limite-$intentos;
            $numeroGenerado=generaNumero(0,1024);
            $numeroInferior=0;
            $numeroSuperior=1024;
            require_once("vista_jugar.php");
            break;
        case 2: 
            $intentos=1;
            $limite=16;
            $quedan_intentos=$limite-$intentos;
            $numeroGenerado=generaNumero(0,65536);       
            $numeroInferior=0;
            $numeroSuperior=65536;     
            require_once("vista_jugar.php");
            break;
        case 3: 
            $intentos=1;
            $limite=20;
            $quedan_intentos=$limite-$intentos;
            $numeroGenerado=generaNumero(0,1048576);
            $numeroInferior=0;
            $numeroSuperior=1048576;
            require_once("vista_jugar.php");
            break;       
    }

}

function generaNumero($inferior,$superior){
    return intval(($inferior+$superior)/2);    
}

function fin_juego($resultado){

    if($resultado){
        $mensaje=["¡¡He acertado el número que has pensado sin agotar los intentos!!","Siempre acierto, ¿Quiéres probar otra vez?"];
        require_once("final.php");

    }else{
        $mensaje=["Ohhhhh... No he acertado el número que has pensado","¿Seguro que has sido sincero?"];
        require_once("final.php");
    }
    

}



?>

<?php

if(isset($_POST['submit'])){
    switch($_POST['submit']){

        case "jugar":
            numeroInicial($_POST['opcion']);            
        break;
        case "mayor":
            echo $_POST['numeroGenerado']; $_POST['numeroSuperior'];
            nuevoNumero($_POST['numeroGenerado'],$_POST['numeroSuperior']);
        break;
        case "menor":
            nuevoNumero();
        break;
        case "acertado":
            fin_juego();
        break;
        default: header('Location: index.html'); 

    }
}else{
    header('Location: index.html'); 
}


function numeroInicial($opcion){
    
    switch($opcion){
        case 1:
            $numeroGenerado=generaNumero(0,1024);
            $numeroInferior=0;
            $numeroSuperior=1024;
            require_once("jugando.php");
            break;
        case 2: 
            $numeroGenerado=generaNumero(0,65536);       
            $numeroInferior=0;
            $numeroSuperior=65536;     
            require_once("jugando.php");
            break;
        case 3: 
            $numeroGenerado=generaNumero(0,1048576);
            $numeroInferior=0;
            $numeroSuperior=1048576;
            require_once("jugando.php");
            break;       
    }

}

function nuevoNumero($numeroInferior,$numeroSuperior){
    
    $numeroGenerado=generaNumero($numeroInferior,$numeroSuperior);
    echo ($numeroSuperior);
    require_once("jugando.php");

}

function generaNumero($inferior,$superior){
    return intval(($inferior+$superior)/2);
}


?>

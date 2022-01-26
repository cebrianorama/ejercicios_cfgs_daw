<?php

if(isset($_POST['submit'])){
    switch($_POST['submit']){

        case "jugar": 
            echo "Opción elegida: ".$_POST["opcion"];
        break;
        default: header('Location: index.html'); 

    }
}else{
    header('Location: index.html');  
}

require_once("jugando.php");


?>
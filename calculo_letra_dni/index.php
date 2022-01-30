<?php

$error=$letra_dni="";


if(isset($_POST['calcula'])){

    if($dni=filter_input(INPUT_POST,'dni',FILTER_VALIDATE_INT)){
        $letra_dni="La letra del DNI introducido es la <b>".calculaletra($dni)."</b>";
    }else{
        $error="Por favor, debes introducir sólo valores numéricos";
    }
    
}

function calculaletra($dni){
    
    $letras=["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E"];
    $resto=$dni%23;
    return $letras[$resto];

}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Cálculo de la letra del DNI</title>
</head>
<body>

    <main>
        <h1>CÁLCULO DE LA LETRA DEL DNI</h1>
        
        <form action="." method="post">
            <h2>Introduce las 8 cifras del DNI</h2>
            <p><input type="text" name="dni" id="dni" maxlength="8" minlength="8"></p>
            <p class="error"><?php echo $error ?></p>
            <p><button id="calcula" name="calcula">CALCULAR LETRA</button></p>
        </form>
        <p>Ningún dato introducido para calcular la letra del DNI será almacenado</p>
        <p class="resultado"><?php echo $letra_dni ?></p>
    </main>

</body>
</html>
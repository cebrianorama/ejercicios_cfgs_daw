<?php
    require_once("jugar.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="medias.css">
    <title>Adivino el número que pienses</title>
</head>
<body>
<h1>El número que has pensado es el <?php echo ("3423"); ?></h1>
    <div class="contenedor">
        <P>Este es intento <?php echo ("3") ?> de adivinar tu número.</P>
        <P>Me quedan <?php echo ("3") ?> intentos para adivinar el número que has pensado.</p>
        <div class="panel">
        <h2><b>Indica como es el número que has pensado</b></h2>
            <form action="jugando.php" method="post">
                <p><button type="submit" value="mayor">MAYOR QUE 325</button>
                <button type="submit" value="menor">MENOR QUE 325</button>
                <button type="submit" value="acertado">¡HAS ACERTADO!</button></p>
                <p><input type="hidden" name="intentos" value="0"></p>
                <p><input type="hidden" name="inferior" value="1"></p>
            </form>
        </div>
    </div>    
</body>
</html>
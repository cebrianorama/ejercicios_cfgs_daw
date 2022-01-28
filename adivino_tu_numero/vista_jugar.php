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
<h1>¿EL NÚMERO QUE HAS PENSADO ES EL <span class="texto_rosa"><?php echo ($numeroGenerado); ?></span> ?</h1>
    <div class="contenedor">
        <h3>Este es intento <?php echo $intentos ?> de adivinar tu número.</h3>
        <P>Me quedan <?php echo ($quedan_intentos) ?> intentos para adivinar el número que has pensado.</p>
        <div class="panel">
        <h2><b>Indica como es el número que has pensado</b></h2>
            <form action="jugar.php" method="post">
                <button type="submit" value="mayor" name="submit">ES MAYOR QUE <?php echo ($numeroGenerado) ?></button>
                <button type="submit" value="menor" name="submit">ES MENOR QUE <?php echo ($numeroGenerado) ?></button>
                <button type="submit" value="acertado" name="submit">¡HAS ACERTADO!</button>
                <input type="hidden" name="numeroGenerado" value='<?php echo ($numeroGenerado) ?>' >
                <input type="hidden" name="numeroInferior" value='<?php echo ($numeroInferior) ?>' >
                <input type="hidden" name="numeroSuperior" value='<?php echo ($numeroSuperior) ?>' >
                <input type="hidden" name="intentos" value='<?php echo ($intentos) ?>' >
                <input type="hidden" name="limite" value='<?php echo ($limite) ?>' >
            </form>
        </div>
    </div>    
</body>
</html>
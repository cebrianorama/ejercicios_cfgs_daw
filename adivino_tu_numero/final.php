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
<h1>FINAL DEL JUEGO</h1>
    <div class="contenedor">
        <h3><?PHP echo $mensaje[0] ?></h3>
        <P><?PHP echo $mensaje[1] ?></p>
        <div class="panel">
            <form action="." method="post">
                <button type="submit" value="reiniciar" name="submit">VOLVER A JUGAR</button>
            </form>
        </div>
    </div>    
</body>
</html>
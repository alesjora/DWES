<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
<?php
/**
 * Cabecera en función de la estación del año.
 * @author José Rafael Álvarez Espino
 * 
 */
    $mes_actual = date("m");
    $dia_actual = date("d");
    function asignar_cabezera_estacion($mes, $dia){
        if($mes >= 1 && $mes <=3 && $dia < 21)
            return "images/invierno.jpg";
        else if($mes >= 4 && $mes <= 6 && $dia < 22)
            return "images/primavera.jpg";
        else if($mes >= 7 && $mes <= 9 && $dia < 24)
            return "images/verano.jpg";
        else
            return "images/otonnio.jpg";
    }
?>
    <style>
        img {
            height: 200px;
            width: 100%;
        }
    </style>

    <body>
        <img
            src="<?php echo asignar_cabezera_estacion($mes_actual,$dia_actual)?>"
            alt="">
    </body>
</html>
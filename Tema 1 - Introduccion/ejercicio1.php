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
 * Cargar en dos números en variables y escribir el mayor de ellos.
 * @author José Rafael Álvarez Espino
 * 
 */
    $numero1 = 15;
    $numero2 = 10;
    function numero_mayor($valor1, $valor2){
        return ($valor1 > $valor2)?$valor1:$valor2;
    }
?>

    <body>
        <p>El número mayor entre 5 y 10 es:
            <?php echo numero_mayor($numero1,$numero2)?>
        </p>
    </body>
</html>
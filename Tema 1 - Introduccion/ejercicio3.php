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
 *  Cargar fecha de nacimiento en una variable y calcular la edad
 * @author José Rafael Álvarez Espino
 * 
 */
    $fecha_nacimiento = new DateTime('1999-08-06');
    $fecha_actual = new DateTime(date('d-M-y'));
    $resultado = date_diff($fecha_nacimiento,$fecha_actual)->format("%y");
?>

    <body>
        <p>Tienes
            <?php echo $resultado?>
            años</p>
    </body>
</html>
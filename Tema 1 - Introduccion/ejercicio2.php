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
 *  Cargar en variables mes y año e indicar el número de días del mes.
 * @author José Rafael Álvarez Espino
 * 
 */
    $mes = 2;
    $annio = 2018;
    $calendario = CAL_GREGORIAN
?>

    <body>
        <p>El mes número
            <?php echo $mes?>
            del año
            <?php echo $annio?>
            tiene
            <?php echo cal_days_in_month($calendario,$mes,$annio)?>
            días</p>
    </body>
</html>
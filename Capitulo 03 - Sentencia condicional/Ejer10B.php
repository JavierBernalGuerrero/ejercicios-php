<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 03 - Recogida de datos</title>
    </head>
    <body>
        <h2>Horoscopo: </h2>
        <p>
        <?php 
            $dia = $_GET['dia'];
            $mes = $_GET['mes'];

            switch ($mes) {
                case "enero":
                    if (($dia > 0) && ($dia <= 19)) {
                      System.out.print("Tu signo es Capricornio");
                    }
                    if (($dia > 19) && ($dia <= 31)) {
                      System.out.print("Tu signo es Acuario");
                    }
                    break;
                    
                case "febrero":
                    if (($dia > 0) && ($dia <= 18)) {
                      System.out.print("Tu signo es Acuario");
                    }
                    if (($dia > 18) && ($dia <= 28)) {
                      System.out.print("Tu signo es Piscis");
                    }
                    break;
                    
                case "marzo":
                    if (($dia > 0) && ($dia <= 21)) {
                      System.out.print("Tu signo es Piscis");
                    }
                    if (($dia > 21) && ($dia <= 31)) {
                      System.out.print("Tu signo es Aries");
                    }
                    break;
                    
                case "abril":
                    if (($dia > 0) && ($dia <= 20)) {
                      System.out.print("Tu signo es Aries");
                    }
                    if (($dia > 20) && ($dia <= 30)) {
                      System.out.print("Tu signo es Tauro");
                    }
                    break;
                    
                case "mayo":
                    if (($dia > 0) && ($dia <= 20)) {
                      System.out.print("Tu signo es Tauro");
                    }
                    if (($dia > 20) && ($dia <= 31)) {
                      System.out.print("Tu signo es Geminis");
                    }
                    break;
                    
                case "junio":
                    if (($dia > 0) && ($dia <= 20)) {
                      System.out.print("Tu signo es Geminis");
                    }
                    if (($dia > 20) && ($dia <= 31)) {
                      System.out.print("Tu signo es Cancer");
                    }
                    break;
                    
                case "julio":
                    if (($dia > 0) && ($dia <= 20)) {
                      System.out.print("Tu signo es Cancer");
                    }
                    if (($dia > 20) && ($dia <= 30)) {
                      System.out.print("Tu signo es Leo");
                    }
                    break;
                    
                case "agosto":
                    if (($dia > 0) && ($dia <= 21)) {
                      System.out.print("Tu signo es Leo");
                    }
                    if (($dia > 21) && ($dia <= 31)) {
                      System.out.print("Tu signo es Virgo");
                    }
                    break;
                    
                case "septiembre":
                    if (($dia > 0) && ($dia <= 22)) {
                      System.out.print("Tu signo es Virgo");
                    }
                    if (($dia > 22) && ($dia <= 30)) {
                      System.out.print("Tu signo es Libra");
                    }
                    break;
                    
                case "octubre":
                    if (($dia > 0) && ($dia <= 22)) {
                      System.out.print("Tu signo es Libra");
                    }
                    if (($dia > 22) && ($dia <= 31)) {
                      System.out.print("Tu signo es Escorpio");
                    }
                    break;
                    
                case "noviembre":
                    if (($dia > 0) && ($dia <= 22)) {
                      System.out.print("Tu signo es Escorpio");
                    }
                    if (($dia > 22) && ($dia <= 30)) {
                      System.out.print("Tu signo es Sagitario");
                    }
                    break;
                    
                case "diciembre":
                    if (($dia > 0) && ($dia <= 20)) {
                      System.out.print("Tu signo es Sagitario");
                    }
                    if (($dia > 20) && ($dia <= 31)) {
                      System.out.print("Tu signo es Capricornio");
                    }
                    break;

                default:
                  System.out.print("Se a producido un error, comprueba que los datos introducidos son correctos.");
            }
        ?>
        </p>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular la hipotenusa del triangulo rectangulo</title>
    <link rel="shortcut icon" href="img/calculator.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php
    //declarar variables
    $lado1 = 3;
    $lado2 = 4;
    $sumaLados = null;
    $hipotenusa = null;

    if(isset($_POST['btn']) && $_POST['btn'] == 'Calcular') {
        $lado1 = pow($lado1, 2);
        $lado2 = pow($lado2, 2);
        $sumaLados = $lado1 + $lado2;
        $hipotenusa = sqrt($sumaLados);

        echo '<div class="container col-8 p-5" style="background-color: #fcd5ce;">';
        echo '<h1 >Calcular la hipotenusa del triangulo rectangulo</h1><br/>';

        echo 'la hipotenusa del triangulo rectangulo es de: '.$hipotenusa, ' cm';

        echo '<div class="mt-5">';
        echo '<form method="post" action="index.php">';
        echo '<input type="submit" name="btn" value="Volver">';
        echo '</div>';
        echo '</div>';
    }
?>
</body>
</html>
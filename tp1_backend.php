<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>EJERCICIOS</h2>

    <?php
        echo '1. Hola Mundo';
        echo '<br>';    // Saltos de linea.
        
        $saludo = '2. Hola mundo, desde una variable';
        echo $saludo;
        echo '<br>';

        echo '<h4>3. Operaciones Logicas </h4>';
        echo '<br>';
        echo '<h3>Valores: 780 y 270</h3>';
        echo '<br>';

        echo '<p>Suma:</p>';
        $variable1 = 780;
        $variable2 = 270;
        // suma:
        $totalVar = $variable1 + $variable2;
        echo $totalVar;
        echo '<br>';

        echo '<p>Resta:</p>';
        $totalVar = $variable1 - $variable2;
        echo $totalVar;
        echo '<br>';

        echo '<p>Multiplicacion:</p>';
        $totalVar = $variable1 * $variable2;
        echo $totalVar;
        echo '<br>';

        echo '<p>Divición:</p>';
        $totalVar = $variable1 / $variable2;
        echo $totalVar;
        echo '<br>';

        echo '<p>Resto</p>';
        $totalVar = $variable1 % $variable2;
        echo $totalVar;
        echo '<br>';

        echo '<h4>4. Transformación de grados Celsius a Fahrenhei</h4>';
        $celcius = 20;
        // conversion a fahrenheit
        $Fahrenheit = ($celcius * 1.8) + 32 ;
        echo '20°C  a Fahrenheit son : ' .$Fahrenheit . '°F';
        echo '<br>';

        // Perimetor p = 2(a+b)
        echo '<h4>5. Calcular el perímetro y el área de un rectángulo </h4>';
        $base = 18;
        $altura = 12;

        //perimetro de rectangulo:
        $perimetro = 2 * ( $base + $altura );
        echo '<br>';
        $area = $base * $altura;

        echo 'Base del rectangulo: ' . $base .'cm<br>';
        echo 'Altura : ' .$altura . 'cm<br>';
        echo 'Perimetro : ' . $perimetro . 'cm<br>';
        echo 'Area : ' .$area . 'cm<br>';
        echo '<br>';

        echo '<h4> 5.b. Calcular el perímetro y el área de un círculo. </h4>';
        // Perimetro C = 2πr
        $radio = 30;
        // perimetro de circulo:
        $perimetro = 2 * M_PI * $radio;
        // area del circulo:
        $area = M_PI * pow($radio, 2);

        echo 'Radio del circulo: ' .$radio . 'cm<br>';
        echo 'Perimetro del circulo: ' .$perimetro . 'cm<br>';
        echo 'Area del circulo: ' .$area . ' cm²';

    ?>
    
</body>
</html>

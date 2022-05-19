<html>
<head><title>Ejercicio 2</title></head>
<body>

<?php

function potenciaCuadrada($c){
    return $c*$c;
}

function binomioCuadradoPerfecto_a($a, $b){
    $binomio = potenciaCuadrada($a)+2*$a*$b+potenciaCuadrada($b);
    echo $binomio;
}

echo "<br><br>", "Funcion Binomio Cuadrado Perfecto A:", "<br>";
echo binomioCuadradoPerfecto_a(3,4);
echo "<br>";
echo binomioCuadradoPerfecto_a(3,6);
echo "<br>";
echo binomioCuadradoPerfecto_a(8,4);
echo "<br>";

function binomioCuadradoPerfecto_b($a, $b){
    $binomio = $a*$a+2*$a*$b+$b*$b;
    echo $binomio;
}

echo "<br><br>", "Funcion Binomio Cuadrado Perfecto B:", "<br>";
echo binomioCuadradoPerfecto_b(3,4);
echo "<br>";
echo binomioCuadradoPerfecto_b(3,6);
echo "<br>";
echo binomioCuadradoPerfecto_b(8,4);
echo "<br>";

?>

</body>
</html>
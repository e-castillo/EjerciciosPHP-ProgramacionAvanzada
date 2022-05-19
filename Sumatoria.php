<html>
<head><title>Ejercicio 5</title></head>
<body>

<?php


function sumatoria_a($a){
    $suma=0;
    for ($i=0; $i<=sizeof($a); $i++){
        $suma+=$i;
    }
    return $suma;
}

function sumatoria_b($a){
    $suma=0;
    foreach ($a as $array){
        $suma+=$array;
    }
    return $suma;
}

function sumatoria_c($a){
    $i=0;
    $suma=0;
    do{
        $suma+=$a[$i];
        $i++;
    }while ($i < sizeof($a));
    return $suma;
}

$array1 = array(1, 2, 3, 4, 5);
$array2 = array(1, 2, 3, 7, 8);
$array3 = array(4, 5, 10);

echo "<br>", "Funcion Sumatoria usando For:", "<br><br>";
echo "valores 1, 2, 3, 4, 5: <br>" . sumatoria_a($array1);
echo "<br><br>";
echo "<br>", "Funcion Sumatoria usando Foreach:", "<br><br>";
echo "valores 1, 2, 3, 7, 8: <br>" . sumatoria_b($array2);
echo "<br><br>";
echo "<br>", "Funcion Sumatoria usando Do While:", "<br><br>";
echo "valores 4, 5, 10: <br>" . sumatoria_c($array3);

?>

</body>
</html>
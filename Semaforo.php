<html>
<head><title>Ejercicio 1</title></head>
<body>

<?php
echo "Hola, empecemos con la guía de ejercicios en PHP";

$color = array ('rojo', 'amarillo', 'verde');

function semaforo_a($color){
    if ($color=="rojo"){
        echo "Frene";
    } else if ($color=="amarillo"){
        echo "Precaución";
    } else if ($color=="verde"){
        echo "Avance";
    } else {
        echo "estado desconocido";
    }
}
echo "<br><br>", "Funcion Semáforo A: Utilizando If", "<br>";
echo semaforo_a($color[0]);
echo "<br>";
echo semaforo_a($color[1]);
echo "<br>";
echo semaforo_a($color[2]);
echo "<br>";
echo semaforo_a("violeta");

function semaforo_b($color){
    switch ($color) {
        case ($color == "rojo");
            echo "Frene";
            break;
        case ($color == "amarillo");
            echo "Precaución";
            break;
        case ($color == "verde");
            echo "Avance";
            break;
        default: echo "estado desconocido";
    }
}

echo "<br><br>", "Funcion Semáforo B: Utilizando Switch", "<br>";
echo semaforo_b($color[0]);
echo "<br>";
echo semaforo_b($color[1]);
echo "<br>";
echo semaforo_b($color[2]);
echo "<br>";
echo semaforo_b("violeta");
?>

</body>
</html>
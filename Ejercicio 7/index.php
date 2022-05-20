<html>
<head><title>Ejercicio 7</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>

<header class="title">Emiliano Castillo</header>

<?php
include ("Semaforo.php")

?>

<ul class="lista">
    <h1><li class="ejercicios">Ejercicio 1: Semáforo</li></h1>

    <p class="consignas"> Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”
        “amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
        “avance” o “estado desconocido” ante un caso no esperado.
        <span class="punto">a) función semaforo_a($color): Resuelva la solución utilizando if else</span>
        <span class="punto">b) función semaforo_b($color): Resuelva la solución utilizando switch</span></p>

    <p class="resolucion"> Ejecutamos el punto a) con color verde: <?php echo "semaforo_a('verde') -->"; echo semaforo_a("verde"); ?> </p>
    <p class="resolucion"> Ejecutamos el punto b) con color rojo: <?php echo "semaforo_b('rojo') -->"; echo semaforo_b("rojo"); ?> </p>
    <p class="resolucion"> Ejecutamos el punto c) con color amarillo: <?php echo "semaforo_b('amarillo') -->"; echo semaforo_b("amarillo"); ?> </p>

</ul>

</body>
</html>


<?php

include_once "saludar.php";

$persona1 = new Saludar('Emiliano', 'Castillo');

echo "Nombre ingresado: Emiliano Castillo";
echo "<br><br>";
echo "Saludo Formal: <br>";
$persona1->saludoFormal(5);
echo "<br><br>";
echo "Saludo Informal: <br>";
$persona1->saludoInformal(9);


echo "<br><br><br>";
$persona2 = new Saludar('Luciana', 'Mora');

echo "Nombre ingresado: Luciana Mora";
echo "<br><br>";
echo "Saludo Formal: <br>";
$persona2->saludoFormal(9);
echo "<br><br>";
echo "Saludo Informal: <br>";
$persona2->saludoInformal(22);

?>
<html>
<head><title>Ejercicio 4</title></head>
<body>

<?php

function incrementar(&$a){
    $a = $a+1;
}

echo "<br>", "Funcion Incrementar:", "<br><br>";
echo $a=4;
incrementar($a);
echo "<br> incrementado -->" . $a;
echo "<br>";
echo $a=8;
incrementar($a);
echo "<br> incrementado -->" . $a;
echo "<br>";
echo $a=9;
incrementar($a);
echo "<br> incrementado -->" . $a;
echo "<br>";

?>

</body>
</html>
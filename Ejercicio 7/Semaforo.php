<?php
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
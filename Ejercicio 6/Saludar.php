<?php

class Saludar{

    public $nombre;
    public $apellido;

    function __construct($nombre, $apellido){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function saludoFormal($horario){
        switch ($horario){
            case (5<=$horario && $horario<13);
                echo "Buenos días " . $this->nombre . " " . $this->apellido . ".";
                break;
            case (13<=$horario && $horario<21);
                echo "Buenas tardes " . $this->nombre . " " . $this->apellido. ".";
                break;
            case (21<=$horario);
                echo "Buenas noches " . $this->nombre . " " . $this->apellido. ".";
                break;
        }
    }

    public function saludoInformal($horario){
        switch ($horario){
            case (5<=$horario && $horario<13);
                echo "¡Hola " . $this->nombre . "! Que tengas un buen día.";
                break;
            case (13<=$horario && $horario<21);
                echo "¡Hola " . $this->nombre . "! Que tengas buenas tardes.";
                break;
            case (21<=$horario);
                echo "¡Hola " . $this->nombre . "! Que tengas buenas noches.";
                break;
        }
    }
}

?>

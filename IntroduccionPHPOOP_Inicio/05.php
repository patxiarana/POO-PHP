<?php
include 'includes/header.php';

abstract class Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad)
    {

    }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas .  " ruedas " .  " y una capacidad de " . $this->capacidad . " Persona";
    }

    public function getRuedas() : int {
        return $this->ruedas ; 
    }
}

class Bicicleta extends Transporte {

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas .  " ruedas " .  " y una capacidad de " . $this->capacidad . " Persona"
        . "Y no gasta gasolina";
    }
} ; 


class Automovil extends Transporte {

    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision)
    {

    }
    public function getTransmision() : string {
        return $this->transmision ; 
    }

}

$transporte = new Transporte(1,3); 

echo $transporte->getInfo() ; 

echo "<hr>" ; 
$bicicleta = new Bicicleta(2,1) ; 


echo $bicicleta->getInfo() ; 
echo $bicicleta->getRuedas() ; 
echo "<hr>" ; 
$auto = new Automovil(4,5, "manual") ; 

echo $auto->getInfo() ; 
echo $auto->getTransmision() ;

include 'includes/footer.php';
?>

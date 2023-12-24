<?php include 'includes/header.php';


interface TransporteInterfaz {
    public function getInfo() : string ;
    public function getRuedas() : int ; 
}

 class Transporte implements TransporteInterfaz {
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


class Automovil extends Transporte implements TransporteInterfaz{
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color)
    {

    }
    public function getInfo() : string {
        return "El transporte tiene  Auto " . $this->ruedas .  " ruedas " .  " y una capacidad de " 
        . $this->capacidad . " Persona" . " y tiene el color "  . $this->color;
    }

    public function getColor() : string {
        return "el color es  " . $this->color ; 
    }

}

echo "<pre>" ; 
$auto = new  Automovil(4, 4,'rojo') ; 
$transporte = new  Transporte(8,20) ; 
echo $transporte->getInfo() ; 
echo "</br>" ; 
echo $auto->getInfo() ; 
echo "</br>" ; 
echo $auto-> getColor() ; 
echo "</pre>" ; 



include 'includes/footer.php';
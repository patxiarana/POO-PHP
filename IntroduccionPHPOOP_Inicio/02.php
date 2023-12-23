<?php

declare(strict_types=1);
include 'includes/header.php';
//Definir una clase 



//Encapsulacion 
class Producto

//Public se puede acceder y modificar en cualquier lugar 
// Protected, se puede acceder unicamente en la clase 
// Privated solo miembros de la misma clase pueden acceder a el S
{

    public function __construct(protected string $nombre,public int $precio,public bool $disponible)
    {
       
    }
    public function mostrarProducto() : void {
     echo "El producto es: " . $this->nombre . "y su precio es de:" .  $this->precio ; 

    }

    public function getNombre () : string{
        return $this->nombre ; 
    }

    public function setNombre( string $nombre) {
        $this->nombre = $nombre ; 
    } 
};


$producto = new Producto('tablet', 200, true);
//$producto->mostrarProducto(); 
echo $producto->getNombre() ; 
$producto->setNombre('Nuevo Nombre') ; 

/*
echo "<pre>";
var_dump($producto);
echo "</pre>";*/

$producto2 = new Producto("monitor curvo", 300, true);
//$producto2->mostrarProducto();
echo $producto2->getNombre(); 

/*
echo "<pre>";
var_dump($producto2);
echo "</pre>";
*/


include 'includes/footer.php';

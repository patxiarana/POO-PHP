<?php

declare(strict_types=1);
include 'includes/header.php';
//Definir una clase 



//Metodos Estaticos
class Producto{

public $imagen ;     
public static $imagenPlaceHolder = "Imagen.jpg"; 


    public function __construct(protected string $nombre,public int $precio,public bool $disponible, string $imagen)
    {
       if($imagen) {
        self :: $imagenPlaceHolder =  $imagen ; 
       }
    }

    public static function obtenerImagenProducto(){
     return self::$imagenPlaceHolder ; 
       }
    

   public static function obtenerProducto(){
    echo "Obteniendo datos del producto" ; 
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




$producto = new Producto('tablet', 200, true, '');
//$producto->mostrarProducto(); 
echo $producto->obtenerImagenProducto() ; 

/*
echo "<pre>";
var_dump($producto);
echo "</pre>";*/

$producto2 = new Producto("monitor curvo", 300, true, 'monitorcurvo.jpg');
//$producto2->mostrarProducto();
//echo $producto2->getNombre(); 
echo "<pre>";
echo $producto2->obtenerImagenProducto() ; 
echo "</pre>";
/*
echo "<pre>";
var_dump($producto2);
echo "</pre>";
*/  


include 'includes/footer.php';
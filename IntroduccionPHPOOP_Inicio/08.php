<?php include 'includes/header.php';

/*require "clases/Clientes.php";

require "clases/Detalle.php";*/





use App\Clientes ;
use App\Detalles ; 



//incluir las otras clases
function mi_autoload($clase)  {
 $partes = explode('\\', $clase ) ;
    require __DIR__ . "/clases/" . $partes[1] . ".php"  ; 
}

spl_autoload_register('mi_autoload') ; 

require 'clases/Clientes.php' ;
require 'clases/Detalles.php' ;


$detalles = new Detalles() ; 
$clientes = new Clientes() ; 
include 'includes/footer.php';
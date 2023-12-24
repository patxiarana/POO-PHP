<?php include 'includes/header.php';

//Conectar a la base datos con mysqli 

require('./vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable('./');
$dotenv->load();
$password = $_ENV['PASSWORD'];
$db = new mysqli('localhost', 'root', $password, 'bienesraices_crud'); 

//Creamos el query
$query = "SELECT titulo, imagen  FROM propiedades" ;

//Lo preparamos 
$stmt = $db->prepare($query) ; 
//lo ejecutamos
$stmt->execute(); 

//Creamos la Variable
$stmt->bind_result($titutlo, $imagen) ; 

//asignamos el resultado 
//$stmt->fetch() ; 

//Imprimimos el resultado 
/*var_dump($titutlo); 
var_dump($imagen); */

//Imprimimos todos los resultaados 
while($stmt->fetch()) : 
var_dump($titutlo) ; 

endwhile ; 





//var_dump($resultado->fetch_assoc()) ; 

include 'includes/footer.php';
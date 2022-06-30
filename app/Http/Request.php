<?php
namespace App\Http;
class Request
{
private $controller;
private $id;
// VA SABER A QUE CONTROLADOR PERTENECE 
private $method;
// geter y seter PARA LOS 3 ATRIBUTOS
public function getController()
{
    return $this ->controller;

}
public function setController($controller)
{
    //se analiza la url completa y se ve si no esta vacia
    if (empty($controller)) {
         //direccion por defecto y si viene vacio que se vaya al controlador Home Contrroles
         $this->controller="\App\Http\Controlles\HomeController";
    
    }else {
      // Transforma todo a minuscula strlower
      $controller=strtolower($controller);
      // transforma la primera a mayuscula
      $controller=ucfirst($controller);
     // y por ultimo se llama a la variale this de asignacion y se le asigna
     $this->controller="\App\Http\Controlles\\" .$controller . "Controller";
    }
    

} 
public function getMethod()
{
    return $this ->method;

}
public function setMethod($method)
{
    $this ->method=$method;

} 

public function getId()
{
    return $this ->id;

}
public function setId($id)
{
    if (empty($id)) {
        $this ->id=0;
    }else {
        $this->id=$id;
    }
   

} 
//contructor 

public function __construct()
{
    $uri = ($_SERVER['REQUEST_URI']);
   $segment=explode("/", $uri);
  
  //Se llama al set controller para enviarle la variable
   $controller=$segment[1];
   //se llama a la variable this y set controller para pasarle la variable controller
   $this->setController($controller);

   // LLamar set metodo  Todo:Call setMethod()
   $id=$segment[2];
  // luego llamar al metodo setid y mandar el id
  $this->setId($id); 
  // se pregunta tambien si esta vacio en el set id ya que ahi se le envia el id obtenido

}
public function send()
{
   // en el send es para probar si esta bien echo el codigo y devuelve el valor
    echo "<p>Controlador :</p>";
    var_dump($this->getController());
    echo "<p>Identificador :</p>";
    var_dump($this->getId());
}


}
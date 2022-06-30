<?php
// el requiere solo se lo usa una ves solo  cargael sistema de auto carga de  composer 
require __DIR__ . "./../vendor/autoload.php";
// se instancia un objeto de la clase request
$request=new \App\Http\Request();
$request->send();


//echo "<h1>Hola Mundo Nuevo!</h1>";  "https://universidad-9.herokuapp.com/"
// de este lado como estamos llamando o instanciando a esas clases
use App\Comida;
// se instancia un objeto de la clase comida
$objetoUno=new Comida();
$objetoUno ->precio=5;
$objetoUno ->setNombre("sopa");
// se concatena con los puntos y se imprime un parrafo con los datos de la variable , sale error pero hay que usar la funcion obtener nombre
 // echo "<p>" . $objetoUno ->getNombre() . "</p>";
// var dum usado para desarroladores muestra el valor 
// var_dump($objetoUno);
// el composer dump me genera la carpeta vendor (Visible)
$objetoDos=new Comida();
$objetoDos ->precio=20;
$objetoDos ->setNombre("Chicharon");

// api para obtener todos los platos de comida
//dominio/controller/{id}
//get: dominio/comida/{5}

//api para guardar nueva comida
//post: dominio/comida

//api para editar una comida
//put: dominio/comida

// api para eliminar una comida
//delete: dominio/comida/{5}
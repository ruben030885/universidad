<?php
// ubicacion de la carpeta raiz carpetas igual a namespace
namespace App;
class Comida
{
//atributos 
private $nombre;
public $precio; 

//propiedades , geter seter

// funciones para acceder a atributos privados
// devuelve lo que tenga la variable nombre 
public function getNombre()
{
    return $this ->nombre;
}
// recibe el nuevo valor para  nombre , edita y mpdifica el nuevo valor
public function setNombre($nombre)
{
    // mi propiedad nombre 0 a mi argumento nombre lo que recibe
    $this->nombre=$nombre;
}
//constructor para mis atributos nombre y precios estableceres valores inicales
public function __construct()
{
$this->nombre="s/n";
$this->precio =0;
} 


}
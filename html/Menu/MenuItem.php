<?php
/*
Clase para representar un item del menu 
consta de un nombre: Como se llamara el menu
y un path: a donde o como se llama el archivo php
*/
class MenuItem { 
    public $name;
    public $path;

    function __construct(string $name, string $path){
        $this -> name = $name;
        $this -> path = $path;
    }
}

?>
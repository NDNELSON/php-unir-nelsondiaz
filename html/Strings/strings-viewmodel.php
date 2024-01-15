<?php
/*
Para la pagina en general se usa la aquitectura VMMV (Modelo, Vista, VistaModelo)
Modelo - Se encarga de manejar los datos y su persistencia que en este caso esta representado por
arreglos estaticos, pero podria ser la base de datos
Vista es el codigo php que solo se encarga de pintal la vista que ve el usuario
VistaModelo que es esta clase se encarga de la lógica de negocio, aqui se hacen calculos para mantener un orden
*/
class StringViewModel { 
    public $namesString = "Terri Russo,Randi Menard,Nathalia Tolliver,Beyonce Nickel,Domonique Stone,Esperanza Lima,Michael Hershberger,Karson Doyle,Annabel Ocampo,Carrington Keel,Katherine Lopez,Corrine Shockley,Donavon Ferreira,Britton Valle,Kain Spears,Citlalli Collins,Derick Clouse,Dionte Wilburn,Nelson Anguiano,Brad Fields";
    public function splitString() {
        return explode(",",$this -> namesString);
    }

    // Se ordenan los valores alfabeticamente mediante la funcion sort y se devuelve en un arreglo
    public function orderNames(array $names) {
        $sortedNames = [];
        $i = 0;
        sort($names);
        while ($i < count($names)) { 
            $i++;
            $sortedNames[] = $names[$i - 1];
        }
        return $sortedNames;
    }

    // Se convierte el string de cada elemento de arreglo a mayusculas y se devuelve en un arreglo
    public function uppercaseNames(array $names) {
        $uppercaseNames = [];
        $i = 0;
        while ($i < count($names)) { 
            $i++;
            $uppercaseNames[] = strtoupper($names[$i - 1]);
        }
        return $uppercaseNames;
    }

    // Verifica cuantos elementos en el arreglo contienen una letra o palabra como parametro de entrada
    // Devuelve un contador de cuantas veces se repite dicha letra o palabra en el arreglo
    // str_contains verifica si se contiene o no un string en otro elemento string
    public function containsWord(array $names, string $word) {
        $counter = 0;
        $i = 0;
        while ($i < count($names)) { 
            $i++;
            if (str_contains($names[$i - 1], $word)) { 
                $counter++;
            }
        }
        return $counter;
    }

    ///Verifica cuando elementos en el arreglo comienzan con una palabra o letra
    //str_starts_with verifica si un string comienza con otro
    public function startWith(array $names, string $character) {
        $counter = 0;
        $i = 0;
        while ($i < count($names)) { 
            $i++;
            if (str_starts_with($names[$i - 1], $character)) { 
                $counter++;
            }
        }
        return $counter;
    }

    //Obtiene la posicion de un nombre en el arreglo
    //array_search busca un string en todo el arreglo y devuelve el index del primer elemento que se encuentre
    public function getPositionOf(array $names, string $name) {
        $position = array_search($name, $names);
        return $position;
    }
}

?>
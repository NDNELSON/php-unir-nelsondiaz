<?php
/*
Para la pagina en general se usa la aquitectura VMMV (Modelo, Vista, VistaModelo)
Modelo - Se encarga de manejar los datos y su persistencia que en este caso esta representado por
arreglos estaticos, pero podria ser la base de datos
Vista es el codigo php que solo se encarga de pintal la vista que ve el usuario
VistaModelo que es esta clase se encarga de la lógica de negocio, aqui se hacen calculos para mantener un orden
*/
class WhileViewModel { 
    public $namesString = "Terri Russo,Randi Menard,Nathalia Tolliver,Beyonce Nickel,Domonique Stone,Esperanza Lima,Michael Hershberger,Karson Doyle,Annabel Ocampo,Carrington Keel,Katherine Lopez,Corrine Shockley,Donavon Ferreira,Britton Valle,Kain Spears,Citlalli Collins,Derick Clouse,Dionte Wilburn,Nelson Anguiano,Brad Fields";
    
    /*esta funcion se encarga de separar el sr¡trig en un array, cada item se genera cuando 
    se encuentra una coma, la funcion explode es la que se encarga de dicha funcion, es una funcion para los strings
    */
    public function splitString() {
        return explode(",",$this -> namesString);
    }

    // Se ordenan los valores alfabeticamente mediante la funcion sort y se devuelve en un arreglo
    public function orderNames(array $names) {
        $sortedNames = [];
        sort($names);
        $i = 0;
        while ($i < count($names)) { 
            $i++;
            $sortedNames[] = $names[$i - 1];
        }
        return $sortedNames;
    }
}

?>
<?php
/*
Para la pagina en general se usa la aquitectura VMMV (Modelo, Vista, VistaModelo)
Modelo - Se encarga de manejar los datos y su persistencia que en este caso esta representado por
arreglos estaticos, pero podria ser la base de datos
Vista es el codigo php que solo se encarga de pintal la vista que ve el usuario
VistaModelo que es esta clase se encarga de la lógica de negocio, aqui se hacen calculos para mantener un orden
*/
include_once("./Utils/sort.php");
class DoWhileViewModel { 
    public $agesArray = [];
    
    function __construct() {
        $this -> agesArray = $this -> getData();
    }

    //Genera un arreglo con valores de las edades aleatorias con un do - while
    private function getData() {
        $data = [];
        $i = 0;
        $numberOfAges = rand(2,50);
        do {
            $i++;
            $data[] = rand(1,100);
          } while ($i <= $numberOfAges);
        return $data;
    }

    //Ordenas las edades
    public function sort(array $ages) {
        //Se ordenan los valores mediante la clase sort.php
        $sortHelper = new Sort();
        return $sortHelper -> orderMaxToMin($ages);
    }

    /*Se clasifican las edades de acuerdo a sus valores en 4 categorias
    Mediante un switch y sus respectivos cases
    */
    public function classifyAges(array $ages) {
        $i = 0;
        $ageClassificaton = new AgeClasification();
        do {
            $i++;
            $age = $ages[$i - 1];
            switch ($age) {
                case ($age> 0 && $age<=10):
                    $ageClassificaton -> incrementNinos();
                    break;
                case ($age> 10 && $age<=18):
                    $ageClassificaton -> incrementAdolecentes();
                    break;
                case ($age> 18 && $age<=60):
                    $ageClassificaton -> incrementAdultos();
                    break;
                case ($age> 60 && $age<=100):
                    $ageClassificaton -> incrementAdultoMayores();
                    break;
            }
          } while ($i < count($ages));
        return $ageClassificaton;
    }

}

// Clase para guardar la clasificacion de las edades de acuerdo a su rango
/* esta clase se desarrollo de esta manera para implementar una buena practica de tener las
 propiedades deuna clase como privada y solo acceder, o modificarlas a ellas mediante metodos 
 */
class AgeClasification {
    private $numberOfNinos;
    private $numberOfAdolecentes;
    private $numberOfAdultos;
    private $numberOfAdultoMayores;

    function __construct() {
        $this -> numberOfNinos = 0;
        $this -> numberOfAdolecentes = 0;
        $this -> numberOfAdultos = 0;
        $this -> numberOfAdultoMayores = 0;
    }

    public function incrementNinos(){
      $this->numberOfNinos++;
    }

    public function incrementAdolecentes(){
        $this->numberOfAdolecentes++;
    }

    public function incrementAdultos(){
        $this->numberOfNinos++;
    }

    public function incrementAdultoMayores(){
        $this->numberOfAdultoMayores++;
    }

    public function getNinos(){
        return $this->numberOfNinos;
    }
  
    public function getAdolecentes(){
        return $this->numberOfAdolecentes;
    }
  
    public function getAdultos(){
        return $this->numberOfNinos;
     }
  
    public function getAdultosMayores(){
        return $this->numberOfAdultoMayores;
    }
}

?>
<?php
/*
Para la pagina en general se usa la aquitectura VMMV (Modelo, Vista, VistaModelo)
Modelo - Se encarga de manejar los datos y su persistencia que en este caso esta representado por
arreglos estaticos, pero podria ser la base de datos
Vista es el codigo php que solo se encarga de pintal la vista que ve el usuario
VistaModelo que es esta clase se encarga de la lógica de negocio, aqui se hacen calculos para mantener un orden
*/
class IfElseViewModel { 
    public $tempsArray = [];
    
    function __construct() {
        $this -> tempsArray = $this -> getData();
    }

    //Se genera un arreglo con valores de temperaturas aleatorio mediante un For
    //Sera un arreglo con cantidad de elementos aleatorio cada que se recargue la pagina entre 0 y 20
    //Los valores de las temperaturas se generan entre valores de 0 y 45
    //La funcion rand es la que se encarga de generar dichos valores
    private function getData() {
        $data = [];
        $numberOfTemperatures = rand(2,20);
        for ($i = 1; $i <= $numberOfTemperatures; $i++) {
            $data[] = rand(0,45);
        }
        return $data;
    }

    public function classifyTemperatures(array $data) {
        $frio = 0;
        $templado = 0;
        $caliente = 0;
        foreach($data as $item) {
            if ($item> 0 && $item<=15) {
                $frio++;
            }
            else if ($item> 15 && $item<=28) {
                $templado++;
            }
            else if ($item> 28 && $item<=45) {
                $caliente++;
            }
        }
        return array(
            "frio" => $frio,
            "templado" => $templado,
            "caliente" => $caliente
        );
    }

}

?>
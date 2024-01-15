<?php
/*
Para la pagina en general se usa la aquitectura VMMV (Modelo, Vista, VistaModelo)
Modelo - Se encarga de manejar los datos y su persistencia que en este caso esta representado por
arreglos estaticos, pero podria ser la base de datos
Vista es el codigo php que solo se encarga de pintal la vista que ve el usuario
VistaModelo que es esta clase se encarga de la lógica de negocio, aqui se hacen calculos para mantener un orden
*/
class SwitchViewModel { 
    public $ticketsArray = [];
    
    function __construct() {
        $this -> ticketsArray = $this -> getData();
    }

    //Se genera un arreglo que representa los bolestos vendidos  aleatorio mediante un For
    //Sera un arreglo con cantidad de elementos aleatorio cada que se recargue la pagina entre 0 y 30
    //Los valores del precio se generan entre valores de 0 y 700 pesos
    //La funcion rand es la que se encarga de generar dichos valores
    private function getData() {
        $data = [];
        $numberOfTickets = rand(2,30);
        for ($i = 1; $i <= $numberOfTickets; $i++) {
            $data[] = rand(100,700);
        }
        return $data;
    }

    /* 
    Esta funcion clasifica elnnivel del ticket o boleto comprado de acuerdo a su precio
    la clasificacion se reliza mediante un if else
    se tienen 4 contadores , uno para cada categoria
    La funcion devuelve un arreglo con 4 items key -> value
    Cada item representa una categoria y su respectivo contador
    */
    public function classifyTickets(array $data) {
        $basico = 0;
        $general = 0;
        $vip = 0;
        $premium = 0;
        foreach($data as $item) {
            switch ($item) {
                case ($item> 0 && $item<=200):
                    $basico++;
                    break;
                case ($item> 200 && $item<=300):
                    $general++;
                    break;
                case ($item> 300 && $item<=500):
                    $vip++;
                    break;
                case ($item> 500 && $item<=700):
                    $premium++;
                    break;
                    
            }
        }
        return array(
            "basico" => $basico,
            "general" => $general,
            "vip" => $vip,
            "premium" => $premium
        );
    }

}

?>
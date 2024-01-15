<?php
/*
Esta clase es un helper que solo se encarga de ordenar valores numericos de mayor a menor y menor a mayor
basandose en el algoritmo buble sort
*/
class Sort {
    /*Se usa un array for para hacer un ordenamiento de numeros de mayor a menor en un arreglo con el algoritmo buble sort
      [5,6,3,1]
      1era iteracion 
        i = 4 - 1 = 3
        j = 0
        array[j] = 6
        array[j + 1] = 5
        5 < 6 ? 
        Si es menor se hace un swap de valores
        [6,5,3,1]
        Si no es menor el bucle sigue
      2da iteracion 
        i = 3 - 1 = 2
        j = 1
        array[j] = 5
        array[j + 1] = 5
        6 < 5 ? 
        Si es menor se hace un swap de valores
        Si no es menor el bucle sigue  
      Para un arreglo de 4 elementos serian un total de 16 iteraciones  4 iteraciones dentro de 4 iteraciones  
    */
    function orderMaxToMin(array $array)
    {
      for ($i = count($array) - 1; $i > 0; $i--) {
        for ($j = 0; $j < $i; $j++) {
          if ($array[$j] < $array[$j + 1]) { 
            $tempValue = $array[$j];
            $array[$j] = $array[$j+1];
            $array[$j+1] = $tempValue;
          }
        }
      }
      return $array;
    }

      /*Se usa un array for para hacer un ordenamiento de numeros de menor a mayor en un arreglo con el algoritmo buble sort
      [6,5,3,1]
      1era iteracion 
        i = 4 - 1 = 3
        j = 0
        array[j] = 6
        array[j + 1] = 5
        5 > 6 ? 
        Si es mayor se hace un swap de valores
        [5,6,3,1]
        Si no es mayor el bucle sigue
      2da iteracion 
        i = 3 - 1 = 2
        j = 1
        array[j] = 5
        array[j + 1] = 5
        6 > 5 ? 
        Si es mayor se hace un swap de valores
        Si no es mayor el bucle sigue  
        Para un arreglo de 4 elementos serian un total de 16 iteraciones  4 iteraciones dentro de 4 iteraciones  
    */
    function orderMinToMax(array $array)
    {
      for ($i = count($array) - 1; $i > 0; $i--) {
        for ($j = 0; $j < $i; $j++) {
          if ($array[$j] > $array[$j + 1]) { 
            $tempValue = $array[$j];
            $array[$j] = $array[$j+1];
            $array[$j+1] = $tempValue;
          }
        }
      }
      return $array;
    }
}
?>
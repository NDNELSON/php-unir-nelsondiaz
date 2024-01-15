<?php
/* 
Se utiliza este archivo para graficar linealmente la variacion de la temperatura en el tiempo
echo json_encode se usa para convertir el arreglo enphp a javascript
*/
// Se crea un arreglo que tendra los segundos en que varia la temperatura, es proporcional al numero de temperaturas existentes
  $xValues = [];
  for($i = 0; $i < count($items); ++$i) { 
    $xValues[] = $i + 1;
  }
?>
<script>
const xValues = <?php echo json_encode($xValues);?>;
const yValues = <?php echo json_encode($items);?>;

new Chart("TempsChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      pointRadius: 1,
      borderColor: "rgba(255,0,0,0.5)",
      data: yValues
    }]
  },    
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Temperatura - Tiempo",
      fontSize: 16
    }
  }
});
</script>
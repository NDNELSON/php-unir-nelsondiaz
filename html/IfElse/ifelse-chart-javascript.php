<?php
/* 
Se utiliza este archivo para graficar la distribucion de las temperaturas de acuerdo a su rango
echo json_encode se usa para convertir el arreglo enphp a javascript
*/
?>
<script>
var xValues = ["Frio", "Templado", "Caliente"];
var yValues = <?php echo json_encode($classificationArray);?>;
var barColors = [
  "#07C7E0",
  "#E09E07",
  "#E00707"
];

new Chart("TempsChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Distribución de edades respecto al elementos en el arreglo"
    }
  }
});
</script>
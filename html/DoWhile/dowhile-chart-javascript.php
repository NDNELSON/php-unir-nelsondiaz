<?php
/* 
Se utiliza este archivo para graficar la distribucion de las edades de acuerdo a su rango
echo json_encode se usa para convertir el arreglo enphp a javascript
*/
?>
<script>
var xValues = ["Niños", "Adolecentes", "Adultos", "Adultos Mayores"];
var yValues = <?php echo json_encode($classificationArray);?>;;
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9"
];

new Chart("AgesChart", {
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
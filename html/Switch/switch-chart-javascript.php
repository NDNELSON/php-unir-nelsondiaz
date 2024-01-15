<?php
/* 
Se utiliza este archivo para graficar la distribucion de los boletos de acuerdo a su precio
echo json_encode se usa para convertir el arreglo enphp a javascript
*/
?>
<script>
var xValues = ["Básico", "General", "VIP", "Premium"];
var yValues = <?php echo json_encode($classificationArray); ?>;
var barColors = ["red", "green","blue","orange"];

new Chart("TicketsChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Clasificacion de tickets de acuerdo a su precio"
    }
  }
});
</script>
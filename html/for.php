<?php
include_once("./For/for-viewmodel.php");
$title = "Arrays en php";
$subtitle = 'Se plantea un ejercio para explicar los ' . strtolower($title);
$viewModel = new ForViewModel();
echo '
<html>
    <head>
        <title>' . $title .'</title>';
        require_once("./Header/scriptsHeader.php");
 ?>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                <?php 
                require_once("./Header/header.php");
                echo '<div class="page-header">
                          <h2>' . "$subtitle" . '</h2>
                      </div>';
                ?>
                <p class="fw-normal">Para fines practicos en este ejercicio, suponemos que recibimos la información de un sensor de temperatura. Dicha información la emularemos con un arreglo de valores enteros.</p>
                <p class="fw-normal">Nos interesa ordenar de mayor a menor los valores de temperatura, asi como obtener el promedio del valor de todas las temperaturas.</p>
                <p class="fw-normal">Graficaremos los valores de las temperaturas suponiendo que cada valor del arreglo se obtuvo cada segundo.</p>
                <div class="alert alert-primary" role="alert">
                        La lista de temperaturas generadas aleatoriamente entre un valor de 0°C a 50°C es la siguiente: 
                    </div>
                    <table class="table table-dark ">
                        <thead>
                            <tr>
                                <th scope="col">Temperaturas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //Se obtienen los datos del viewModel, para recorer el arreglo que pintara la tabla de las temperaturas
                            //Generadas aleatoriamente
                            $items = $viewModel -> tempsArray;
                            $i = 0;
                            //Se utiliza un for para dibujar la tabla
                            for($i = 0; $i < count($items); ++$i) { 
                                echo '
                                    <tr>
                                        <td>' . $items[$i] . '°C</td>
                                    </tr>
                                ' ;
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="alert alert-primary" role="alert">
                        La lista de temperaturas ordenada de mayor a menor es la siguiente: 
                    </div>  
                    <table class="table table-info ">
                        <thead>
                            <tr>
                                <th scope="col">Temperatura Por Orden</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Se obtiene las temperaturas ordenadas mediante el viewModel
                            $sortArray = $viewModel -> orderTemperatures($items);
                            $i = 0;
                            //Se utiliza un for para dibujar la tabla
                            for($i = 0; $i < count($sortArray); ++$i) { 
                                echo '
                                    <tr>
                                        <td>' . $sortArray[$i] . ' °C</td>
                                    </tr>
                                ' ;
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="alert alert-primary" role="alert">
                        La gráfica de recopilación de información con respecto a cada segundo es la siguiente:
                            <br>
                        Nota: Se usan los datos del arreglo real sin ordenar para graficar datos vs tiempo 
                    </div>  
                    <div>
                        <canvas id="TempsChart" style="width:100%;max-width:600px"></canvas>
                    </div>
                    <?php
                        require_once("./For/for-chart-javascript.php");
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>
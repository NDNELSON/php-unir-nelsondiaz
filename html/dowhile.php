<?php
include_once("./DoWhile/dowhile-viewmodel.php");
$title = "Do while en php";
$subtitle = 'Se plantea un ejercio para explicar los ciclos ' . strtolower($title);
$viewModel = new DoWhileViewModel();
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
                    <p class="fw-normal">Para fines practicos en este ejercicio, suponemos que recibimos la información de las edades de los pacientes de un consultorio médico. Dicha información la emularemos con un arreglo de valores enteros. Suponiendo que cada valor del array equivale a la edad de una persona que puede estar entre los 0 y los 100 años</p>
                    <p class="fw-normal">Nos interesa ordenar de menor a mayor las edades de las personas, asi como saber promedio de edades.</p>
                    <p class="fw-normal">Clasificaremos en 3 grupos de personas.</p>
                    <p class="fw-normal">Si esta entre 0 y 10 años sera un niño.</p>
                    <p class="fw-normal">Si esta entre 11 y 18 años sera un adolecente.</p>
                    <p class="fw-normal">Si esta entre 18 y 60 años sera un adulto.</p>
                    <p class="fw-normal">Si esta ente 61 y 100 años sera un adulto mayor.</p>
                    <div class="alert alert-primary" role="alert">
                        La lista de edades generada aleatoriamente es la siguiente: 
                    </div>
                    <table class="table table-dark ">
                        <thead>
                            <tr>
                                <th scope="col">Edad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //Se obtienen los datos del viewModel, para recorer el arreglo que pintara la tabla de las edades
                            //Generadas aleatoriamente
                            $items = $viewModel -> agesArray;
                            $i = 0;
                            //Se utiliza un do while para dibujar la tabla
                            do {
                                $i++;
                                echo '
                                    <tr>
                                        <td>' . $items[$i - 1] . ' años</td>
                                    </tr>
                                ' ;
                              } while ($i < count($items));
                            ?>
                        </tbody>
                    </table>
                    <div class="alert alert-primary" role="alert">
                        La lista de edades ordenada de mayor a menor es la siguiente: 
                    </div>  
                    <table class="table table-info ">
                        <thead>
                            <tr>
                                <th scope="col">Edad Por Orden</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Se obtiene las edades ordenadas mediante el viewModel
                            $sortArray = $viewModel -> sort($items);
                            $i = 0;
                            //Se utiliza un do while para dibujar la tabla
                            do {
                                $i++;
                                echo '
                                    <tr>
                                        <td>' . $sortArray[$i - 1] . ' años</td>
                                    </tr>
                                ' ;
                              } while ($i < count($sortArray));
                            ?>
                        </tbody>
                    </table>
                    <div>
                        <canvas id="AgesChart" style="width:100%;max-width:600px"></canvas>
                    </div>
                    <?php
                    // Se obtiene la clasificacion de a que categoria pertenece cada edad
                    $ageClasification = $viewModel -> classifyAges($items);
                    // Se crea un arreglo para pasarlo al codigo javascript de la grafica de pastel
                    $classificationArray = [$ageClasification -> getNinos(),
                                            $ageClasification -> getAdolecentes(),
                                            $ageClasification -> getAdultos(),
                                            $ageClasification -> getAdultosMayores()];
                    // Se llama al archivo donde esta el script de la grafica de pastel
                    // Se pasa el arreglo $classificationArray
                    require_once("./DoWhile/dowhile-chart-javascript.php");
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>
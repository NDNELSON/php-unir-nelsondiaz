<?php
include_once("./IfElse/ifelse-viewmodel.php");
$title = "If Else";
$subtitle = 'Se plantea un ejercio para explicar las condiciones ' . strtolower($title);
$viewModel = new IfElseViewModel();
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
                    <p class="fw-normal">Dado un arreglo que simularia la lista de temperaturas obtenidas de un sensor, clasificaremos si la temperatura es fria, templada o caliente. </p>
                    <p class="fw-normal">Si la temperatura es de 0°C a 15°C es fria.</p>
                    <p class="fw-normal">Si la temperatura es de 15°C a 28°C es templada</p>
                    <p class="fw-normal">Si la temperatura es de 28°C a 45°C es caliente</p>
                    <div class="alert alert-primary" role="alert">
                        La lista de temperaturas es la siguiente: 
                    </div>  
                    <table class="table table-info ">
                        <thead>
                            <tr>
                                <th scope="col">Temperatura</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
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
                            La grafica de clasificacion de temperaturas es la siguiente: 
                        </div>  
                        <canvas id="TempsChart" style="width:100%;max-width:600px"></canvas>
                        <?php
                            // Se obtiene la clasificacion de a que categoria pertenece cada temperatura
                            $tempClasification = $viewModel -> classifyTemperatures($items);
                            // Se crea un arreglo para pasarlo al codigo javascript de la grafica de pastel
                            $classificationArray = [$tempClasification["frio"],
                                                    $tempClasification["templado"],
                                                    $tempClasification["caliente"]];
                            // Se llama al archivo donde esta el script de la grafica de pastel
                            // Se pasa el arreglo $classificationArray
                            require_once("./IfElse/ifelse-chart-javascript.php");
                        ?>
                </div>
            </div>
        </div>
    </body>
</html>
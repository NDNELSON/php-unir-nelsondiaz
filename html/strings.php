<?php
include_once("./Strings/strings-viewmodel.php");
$title = "Strings en php";
$subtitle = 'Se plantea un ejercio para explicar las funciones en los ' . strtolower($title);
$viewModel = new StringViewModel();
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
                <p class="fw-normal">Dada una tabla de alumnos con sus nombres ya apellidos , usaremos funciones para strings como cambiar a mayusculas, verificar cuantos nombres incluyen la letra a, y obtendremos el lugar en que se encuentra DIONTE WILBURN en la lista.</p>
                </div>
                <div class="alert alert-primary" role="alert">
                        Los nombres ordenados alfabeticamente son los siguientes: 
                    </div>  
                    <table class="table table-info ">
                        <thead>
                            <tr>
                                <th scope="col">Nombres ordenados alfabeticamente</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Se obtiene los nombres del string separado por comas
                            $names = (array)$viewModel -> splitString();
                            $i = 0;
                            //Se utiliza un while para dibujar la tabla
                            $orderNames = $viewModel -> orderNames($names);
                            while ($i < count($orderNames)) {
                                $i++;
                                echo '
                                    <tr>
                                        <td>' . $orderNames[$i - 1] . '</td>
                                    </tr>
                                ' ;
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="alert alert-primary" role="alert">
                        Los nombres ordenados alfabeticamente pero en mayusculas los siguientes: 
                    </div>  
                    <table class="table table-info ">
                        <thead>
                            <tr>
                                <th scope="col">Nombres ordenados alfabeticamente</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Se obtiene los nombres del string separado por comas
                            $names = (array)$viewModel -> splitString();
                            $i = 0;
                            //Se utiliza un while para dibujar la tabla
                            $upperCaseNames = $viewModel -> uppercaseNames($orderNames);
                            while ($i < count($upperCaseNames)) {
                                $i++;
                                echo '
                                    <tr>
                                        <td>' . $upperCaseNames[$i - 1] . '</td>
                                    </tr>
                                ' ;
                            }
                            $namesWithA = $viewModel -> containsWord($upperCaseNames,"A");
                            $startWithD = $viewModel -> startWith($upperCaseNames,"D");
                            $startWithA = $viewModel -> startWith($upperCaseNames,"A");
                            $positionDionte = $viewModel -> getPositionOf($upperCaseNames, "DIONTE WILBURN");
                            ?>   
                        </tbody>
                    </table>
                    <div class="alert alert-primary" role="alert">
                      Los nombres que contienen la letra a son: <?php echo $namesWithA; ?>
                    </div> 
                    <div class="alert alert-primary" role="alert">
                      Los nombres que comienzan con la letra D son: <?php echo $startWithD; ?>
                    </div> 
                    <div class="alert alert-primary" role="alert">
                      Los nombres que comienzan con la letra A son: <?php echo $startWithA; ?>
                    </div> 
                    <div class="alert alert-primary" role="alert">
                      La posición en la lista de DIONTE WILBURN es: <?php echo $positionDionte; ?>
                    </div> 
            </div>
        </div>
    </body>
</html>
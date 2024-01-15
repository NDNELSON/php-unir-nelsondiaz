<?php
include_once("./While/while-viewmodel.php");
$title = "While en php";
$subtitle = 'Se plantea un ejercio para explicar el ciclo ' . strtolower($title);
$viewModel = new WhileViewModel();
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
                    <p class="fw-normal">Dada una cadena de strings que tiene nombres separada por , :</p>
                    <div class="alert alert-primary" role="alert">
                        "Terri Russo,Randi Menard,Nathalia Tolliver,Beyonce Nickel,Domonique Stone,Esperanza Lima,Michael Hershberger,Karson Doyle,Annabel Ocampo,Carrington Keel,Katherine Lopez,Corrine Shockley,Donavon Ferreira,Britton Valle,Kain Spears,Citlalli Collins,Derick Clouse,Dionte Wilburn,Nelson Anguiano,Brad Fields"
                    </div> 
                    <p class="fw-normal">Obtendremos una tabla de nombres ordenados en orden alfábetico mediante el uso de while.</p>
                    </table>
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
                </div>
            </div>
        </div>
    </body>
</html>
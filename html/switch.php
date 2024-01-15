<?php
include_once("./Switch/switch-viewmodel.php");
$title = "Switch en php";
$subtitle = 'Se plantea un ejercio para explicar las condiciones con ' . strtolower($title);
$viewModel = new SwitchViewModel();
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
                    <p class="fw-normal">Dado un arreglo que simularia el precio de los boletos para un concierto, clasificaremos si el lugar comprado es básico, general, vip o premium. </p>
                    <p class="fw-normal">Si el boleto costo  menos de $200 es básico</p>
                    <p class="fw-normal">Si el boleto costo  entre $201 y $300 es general</p>
                    <p class="fw-normal">Si el boleto costco entre $301 y $500 es vip</p>
                    <p class="fw-normal">Si el boleto costo entre $501 y $700 es premium</p>
                    <div class="alert alert-primary" role="alert">
                        La lista de los boletos es la siguiente: 
                    </div>  
                    <table class="table table-info ">
                        <thead>
                            <tr>
                                <th scope="col">Precio del Boleto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $items = $viewModel -> ticketsArray;
                                $i = 0;
                                //Se utiliza un for para dibujar la tabla
                                for($i = 0; $i < count($items); ++$i) { 
                                    echo '
                                        <tr>
                                            <td>$' . $items[$i] . ' MXN</td>
                                        </tr>
                                    ' ;
                                }
                            ?>
                        </tbody>
                    </table>
                        <div class="alert alert-primary" role="alert">
                            La grafica de clasificacion de tickets es la siguiente: 
                        </div>  
                        <canvas id="TicketsChart" style="width:100%;max-width:600px"></canvas>
                        <?php
                            // Se obtiene la clasificacion de a que categoria pertenece cada ticket
                            $ticketClasification = $viewModel -> classifyTickets($items);
                            // Se crea un arreglo para pasarlo al codigo javascript de la grafica de pastel
                            $classificationArray = [$ticketClasification["basico"],
                                                    $ticketClasification["general"],
                                                    $ticketClasification["vip"],
                                                    $ticketClasification["premium"]];
                            // Se llama al archivo donde esta el script de la grafica de pastel
                            // Se pasa el arreglo $classificationArray
                            require_once("./Switch/switch-chart-javascript.php");
                        ?>
                </div>
            </div>
        </div>
    </body>
</html>
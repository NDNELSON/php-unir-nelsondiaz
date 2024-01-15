<?php
/*
Punto inicial de la aplicacion
*/
include_once("./Menu/MenuItem.php");
include_once("./Menu/DataMenu.php");
$data = new DataMenu();
?>
<html>
    <head>
        <title>Ejercicios con php</title>
    <?php require_once("./Header/scriptsHeader.php"); ?>
    </head>
    <body>
        <div class="container h-100 bg-dark">
            <div class="row h-100" >
                <div class="col-sm h-100">
                    <div class="card shadow ">
                            <div class="card-body w-100">
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="avatar avatar-xl rounded-circle">
                                        <img src="./Resources/img/profile.jpg" class="rounded-circle" style="width: 150px;"  alt="Avatar" />
                                    </a>
                                </div>
                                <div class="text-center my-6 w-100">
                                    <a href="#" class="d-block h5 mb-0 w-100">Alumno: Nelson Díaz Nuñez</a>
                                    <span class="d-block text-sm text-muted w-100">UNIR: Maestria en Desarrollo De Software</span>
                                    <span class="d-block text-sm text-muted w-100">Materia: Computación en el servidor Web</span>
                                    <span class="d-block text-sm text-muted w-100">Profesor: LUIS GUADALUPE MACIAS TREJO</span>
                                </div>
                            </div> 
                    </div>  
                    <br> 
                    <div class="alert alert-info " role="alert">
                        Elije una opción del menu
                    </div>
                    <ul class="nav nav-pills flex-column w-100 my-10" id="menu">
                                <?php
                                // Se utiliza un for each para recorrer un arreglo de objetos con sus propiedades
                                $items = $data->getMenuData();
                                foreach ($items as $item) {
                                    echo '<li class="nav-item w-100">
                                        <a href="/'. "$item->path" . '" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none w-100">
                                            <button type="button" class="btn btn-secondary w-100">' . "$item->name" . '</button>';
                                    echo '  </a>   
                                        </li>';
                                }   
                                ?>
                    </ul> 
                </div>
            </div>
        </div>                                                             
    </body>
</html>

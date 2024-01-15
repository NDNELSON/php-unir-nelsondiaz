<?php
/*
Este codigo php se usa para pintar el navbar de todas las paginas y se reutiliza
En la variable $title se guarda el nombre de la pagina
*/
 echo '
    <nav class="navbar navbar-light" style="background-color: #D2E1E3;height:60px">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php">
                        <button type="button" class="btn btn-dark">Ir al menu principal</button>
                    </a>
                </li>
                <li class="breadcrumb-item active fs-3" aria-current="page">' . "$title" . '</li>
            </ol>
        </div>
    </nav>';
?>
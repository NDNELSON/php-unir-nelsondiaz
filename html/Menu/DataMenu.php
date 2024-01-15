<?php
/*
Representa los datos para rellenar el menu que se muestra en el index.php
Esto hace que el menu sea dinamico, y podria usarse una base de datos
Consta de untitulo y la ruta donde esta apuntando dicho php
*/
class DataMenu {
    public function getMenuData() {
        $menuData = []; 
        $menu1 = new MenuItem("Do While","dowhile.php");
        $menuData[] = $menu1;
        $menu2 = new MenuItem("While","while.php");
        $menuData[] = $menu2;
        $menu3 = new MenuItem("For","for.php");
        $menuData[] = $menu3;
        $menu4 = new MenuItem("If Else","ifelse.php");
        $menuData[] = $menu4;
        $menu5 = new MenuItem("Switch","switch.php");
        $menuData[] = $menu5;
        $menu6 = new MenuItem("Strings","strings.php");
        $menuData[] = $menu6;
        return $menuData;
    }
}
?>
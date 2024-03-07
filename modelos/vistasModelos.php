<?php
class vistasModelo{

    protected static function obtener_vistas_modelos($vistas){
        
        $listaBlanca=["das","tabla","formulario"];
        if (in_array($vistas,$listaBlanca)) {
            if (is_file("./vistas/contenidos/".$vistas."-vistas.php")) {

                $contenido="./vistas/contenido/".$vistas."-vistas.php";
            }else {

                $contenido="404";}

        }elseif ($vistas=="login"|| $vistas=="index")
        {
            $contenido="login";
        }else {
            $contenido="404";
        }
        return $contenido;
    }

  
}

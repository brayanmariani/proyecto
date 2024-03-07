<?php
require_once "conexionModelo.php";

class loginModelo extends conexionModelo{
/*----------modelo para inicia sesion---------*/
/* el selec no lo ejecuta pero cuando cambio para insertar se ejecuta solo necesito validar el correo y contraseña para ver el codigo 
ve a loginControlador y a login que esta en la carpeta vistas/contenido */
protected static function iniciar_sesion_modelo($correo,$clave){
    $sql=conexionModelo::conectar()->prepare("SELECT * FROM medico WHERE correo_m='$correo' AND clave_m='$clave'");
    $sql->execute();
    return $sql;
}






}
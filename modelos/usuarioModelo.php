<?php
require_once "conexionModelo.php";

class usuarioModelo extends conexionModelo{
    protected static function agregar_medico_modelo($correo, $clave, $nombre,$apellido,$cedula,$telefono,$edad,$especialidad){
        $sql=conexionModelo::conectar()->prepare("INSERT INTO medico(nombre_m,apellido_m,cedula_m,telefono_m,edad_m,correo_m,clave_m,especialidad_m)
         VALUES ('$nombre','$apellido','$cedula','$telefono','$edad','$correo',' $clave','$especialidad')");
         $sql->execute();
         return $sql;



    }
}
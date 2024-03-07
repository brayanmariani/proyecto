<?php
require_once "conexionModelo.php";

class pacienteModelo extends conexionModelo{
    protected static function agregar_paciente_modelo($correo, $clave, $nombre,$apellido,$cedula,$telefono,$edad,$motivo){
        $sql=conexionModelo::conectar()->prepare("INSERT INTO paciente(nombre_p,apellido_p,cedula_p,telefono_p,edad_p,correo_p,motivo)
         VALUES ('$nombre','$apellido','$cedula','$telefono','$edad','$correo','$motivo')");
         $sql->execute();
         return $sql;



    }
}
<?php
if ($peticionesAjax) {
    require_once "../modelos/usuarioModelo.php";
}else {
    require_once "./modelos/usuarioModelo.php";
}
class usuarioControlador extends usuarioModelo{
   public function agregar_medico_controlador(){
    $correo=conexionModelo::limpiar_texto($_POST['correo_reg']);
    $clave=conexionModelo::limpiar_texto($_POST['clave_reg']);
    $nombre=conexionModelo::limpiar_texto($_POST['nombre_reg']);
    $apellido=conexionModelo::limpiar_texto($_POST['apellido_reg']);
    $cedula=conexionModelo::limpiar_texto($_POST['cedula_reg']);
    $telefono=conexionModelo::limpiar_texto($_POST['telefono_reg']);
    $edad=conexionModelo::limpiar_texto($_POST['edad_reg']);
    $especialidad=conexionModelo::limpiar_texto($_POST['especialidad_reg']);

    /*--comprobar si existe medico---*/
    $chec_correo=conexionModelo::ejecutar_consulta_simple("SELECT correo_m FROM medico WHERE correo_m='$correo'");
    if ($chec_correo->rowCount()>0) {
       echo "el correo ya existe";
    }
    $chec_cedula=conexionModelo::ejecutar_consulta_simple("SELECT cedula_m FROM medico WHERE cedula_m='$cedula'");
    if ($chec_cedula->rowCount()>0) {
       echo "esta cedula ya existe";
    }




 $agregar_medico=usuarioModelo::agregar_medico_modelo($correo, $clave, $nombre,$apellido,$cedula,$telefono,$edad,$especialidad);

 if ($agregar_medico->rowCount()==1) {
    echo "se ha registrado el medico correctamente";
 }else {
    echo "no se a registrado el medico";
 }
  

   }
    
}

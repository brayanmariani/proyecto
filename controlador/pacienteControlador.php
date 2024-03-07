<?php
if ($peticionesAjax) {
    require_once "../modelos/pacienteModelo.php";
}else {
    require_once "./modelos/pacienteModelo.php";
}
class pacienteControlador extends pacienteModelo{
   public function agregar_paciente_controlador(){
    $correo=conexionModelo::limpiar_texto($_POST['correo_reg']);
    $clave=conexionModelo::limpiar_texto($_POST['clave_reg']);
    $nombre=conexionModelo::limpiar_texto($_POST['nombre_reg']);
    $apellido=conexionModelo::limpiar_texto($_POST['apellido_reg']);
    $cedula=conexionModelo::limpiar_texto($_POST['cedula_reg']);
    $telefono=conexionModelo::limpiar_texto($_POST['telefono_reg']);
    $edad=conexionModelo::limpiar_texto($_POST['edad_reg']);
    $especialidad=conexionModelo::limpiar_texto($_POST['especialidad_reg']);


 $agregar_paciente=usuarioModelo::agregar_paciente_modelo($correo, $clave, $nombre,$apellido,$cedula,$telefono,$edad,$motivo);

 if ($agregar_paciente->rowCount()==1) {
    echo "se ha agendado la cita correctamente";
 }else {
    echo "no se pudo agendar la cita";
 }
  

   }

}
<?php
$peticionesAjax=true;
require_once "../config/App.php";
if (isset($_POST['nombre_pac'])) {
    # code...
    require_once "../controlador/pacienteControlador.php";
    $in_paciente=new pacienteControlador();
    if (isset($_POST['correo_pac']) && isset($_POST['clave_pac'])) {
        echo $in_paciente->agregar_paciente_controlador();  
           
    }
}else {
    session_start(['name'=>'Inmufa']);
    session_unset();
    session_destroy();
    header("location: ".SERVERURL."login/");
    exit();
}
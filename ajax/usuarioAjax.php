<?php
$peticionesAjax=true;
require_once "../config/App.php";
if (isset($_POST['nombre_reg'])) {
    # code...
    require_once "../controlador/usuarioControlador.php";
    $in_usuario=new usuarioControlador();
    if (isset($_POST['correo_reg']) && isset($_POST['clave_reg'])) {
        echo $in_usuario->agregar_medico_controlador();  
           
    }
}else {
    session_start(['name'=>'Inmufa']);
    session_unset();
    session_destroy();
    header("location: ".SERVERURL."login/");
    exit();
}
<?php
if ($peticionesAjax) {
    require_once "../modelos/loginModelo.php";
}else {
    require_once "./modelos/loginModelo.php";
}

class loginControlador extends loginModelo{
    /*---------controlador de inicio de sesion---------*/ 
    public function iniciar_sesion_controlador(){
        $correo=$_POST['correo'];
        $clave=$_POST['clave'];

        if($clave=="" && $correo==""){
            echo 'error en iniciar sesion clave incorrecta o usuario incorrecto';
        }
        /*------validacion del usuario-------*/
        $datos_login=loginModelo::iniciar_sesion_modelo($correo,$clave);
        if($datos_login->rowCount()>0){
            echo 'hola mundo'; 
        $row=$datos_login->fetch();
        /*---asociancion de las variables con los atributos de la base de dados -----*/
        session_start(['name'=>'Inmufa']);
        $_SESSION['id_medico']=$row['cedula_m'];
        $_SESSION['nombre_medico']=$row['nombre_m'];
        $_SESSION['apellido_medico']=$row['apellido_m'];
        $_SESSION['citas_medico']=$row['citas_m'];
        return header("location: ".SERVERURL."vistas/contenido/das-vistas.php");
    } else { echo 'ha ocurriodo un error';}
    }

}
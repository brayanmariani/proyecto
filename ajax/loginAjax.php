<?php
$peticionesAjax=true;
require_once "../config/App.php";
if () {
    
}else {
    session_start(['name'=>'Inmufa']);
    session_unset();
    session_destroy();
    header("location: ".SERVERURL."login/");
    exit();
}

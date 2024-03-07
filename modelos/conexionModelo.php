<?php
if ($peticionesAjax) {
    require_once "../config/config.php";
}else {
    require_once "./config/config.php";
}
class conexionModelo{
  /*----establecer conexion a la base de datos ---*/
  protected static function conectar(){
    $idb= new PDO(DBINMUFA,USU,CLAVE);
    $idb->exec("SET CHARACTER SET utf8");
    return $idb;
  }
  /*----ejecutar consultas simples---*/
  protected static function ejecutar_consulta_simple($consulta){
    $sql=self::conectar()->prepare($consulta);
    $sql->execute();
    return $sql;


  }
  protected static function limpiar_texto($texto){
    $texto=trim($texto);
    $texto=stripcslashes($texto);
    $texto=str_ireplace("<script>" , "" , $texto);
    $texto=str_ireplace("</script>" , "" , $texto);
    $texto=str_ireplace("<script src>" , "" , $texto);
    $texto=str_ireplace("<script type=>" , "" , $texto);
    $texto=str_ireplace("SELECT * FROM" , "" , $texto);
    $texto=str_ireplace("INSERT INTO" , "" , $texto);
    $texto=str_ireplace("DELETE FROM" , "" , $texto);
    $texto=str_ireplace("DROP TABLE" , "" , $texto);
    $texto=str_ireplace("DROP DATABASE" , "" , $texto);
    $texto=str_ireplace("TRUNCATE TABLE" , "" , $texto);
    $texto=str_ireplace("SHOW TABLES" , "" , $texto);
    $texto=str_ireplace("SHOW DATABASES" , "" , $texto);
    $texto=str_ireplace("<?php" , "" , $texto);
    $texto=str_ireplace("<?" , "" , $texto);
    $texto=str_ireplace("--" , "" , $texto);
    $texto=str_ireplace(">" , "" , $texto);
    $texto=str_ireplace("<" , "" , $texto);
    $texto=str_ireplace("[" , "" , $texto);
    $texto=str_ireplace("]" , "" , $texto);
    $texto=str_ireplace("^" , "" , $texto);
    $texto=str_ireplace("==" , "" , $texto);
    $texto=str_ireplace(";" , "" , $texto);
    $texto=str_ireplace("::" , "" , $texto);
    $texto=stripcslashes($texto);
    $texto=trim($texto);
    return $texto;

      
     



  }
}
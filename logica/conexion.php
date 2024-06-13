<?php

  $host_db = "localhost:3306";
  $user_db = "root";
  $pass_db = "123456";
  $db_name = "horarios_profesores";


//  $host_db = "localhost";
//  $user_db = "u676715632_aragon";
//  $pass_db = "icoAragonUnam22";
//  $db_name = "u676715632_ingenieria";


$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($conexion->connect_error){
    echo"<h1>MySQL no le  esta dando permisos para ejecutar consultas verificar error</h1>";
}

?>
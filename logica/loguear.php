<?php
session_start();
include ('conexion.php');

$rfc = $_POST['rfc'];

//La función COUNT devuelve el número de filas de la consulta, es decir, el número de registros que cumplen una determinada condición.

//Los valores nulos no serán contabilizados
$q = "SELECT COUNT(*) AS contar FROM horarios WHERE rfc= '$rfc'";

$consulta = mysqli_query($conexion, $q);

$array = mysqli_fetch_array($consulta);

if ($array['contar'] > 0) {

   // en la variable session se guarda el numero de cuenta esto para poder acarrearla
    $_SESSION['usermane'] = $rfc;
    
    

    header("location: ../dashboard.php");
    

} else {

    header("location: ../index.php");
}
?>
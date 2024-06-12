<?php
session_start();
include 'logica/conexion.php';
$usuario = $_SESSION['usermane'];


if (!isset($usuario)){

    header("location: index.php");
    }else {

    mysqli_set_charset($conexion,'utf8');
    $q=" SELECT * FROM deportivashfc WHERE no_cuenta ='$usuario' ";
    
    $consulta= $conexion->query($q);

    ?> 

   <!DOCTYPE html>
    <html>
        <style>

.botones {
    display: flex;
  justify-content: center;
}
        </style>
        <head>
            <meta charset="UTF-8">
            <!--Materialize files-->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="assets/css/materialize.css">
            <link rel="stylesheet" type="text/css" href="assets/css/estilos.css">
            <link rel="shortcut icon" href="assets/img/favicon.jpg"/>
            <title>ACTIVIDADES DEPORTIVAS Y CULTURALES</title>
        </head>
          
  <body>

    <?php include ('./header.php')?>
  <div class="row" style="margin-top:20px">
  <div class="col s12"> 
     <h3 style="text-align:center" >HORAS DE FORMACIÓN COMPLEMENTARIA ING. COMPUTACIÓN</h3>
     <h4 style="text-align:center" >ACTIVIDADES DEPORTIVAS Y CULTURALES</h4>
      <table style="width:100%; border:2px">
        <thead>
            <tr>
                <!--seccion A-->

                <th>Numero</th>
                <th>Nombre</th>
                <th>Numero de Cuenta</th>
                <th>Carrera</th>
                <th>Horas Totales</th>
                <th>Semestre</th>
                              
            </tr>
        </thead>


    <?php
    if(mysqli_num_rows($consulta)>0){
        while ($row = mysqli_fetch_assoc($consulta) ) { ?>
            <tr>
                <td> <?php echo $row ['numero'];   ?></td>
                <td> <?php echo $row ['Nombre']; ?></td>
                <td> <?php echo $row ['no_cuenta']; ?></td>
                <td> <?php echo $row ['carrera'];     ?></td>
                <td> <?php echo $row ['total_horas'];  ?></td>
                <td> <?php echo $row ['semestre'];        ?></td>
                
            </tr>

<!--PDF Inicio-->
           
<!--PDF FIN-->


    <?php }        
        } else {
        echo ' 
            <header>
                <h2 style="text-align:center">Error de Generacion en la constancia </h2>
            </header>';
    }

    ?>

    </table>
    <br>
        <div class="botones">
           <a style="right:inherit"  class="waves-effect waves-light btn" href="logica/session_destroy.php">Salir</a>
        </div>
    </div>
</div>

<?php

include ('./footer.php');

}
 

?>
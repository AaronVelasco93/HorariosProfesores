<?php
    session_start();
    include 'logica/conexion.php';
    $usuario = $_SESSION['usermane'];


    if (!isset($usuario)){

        header("location: index.php");
        }else {

        mysqli_set_charset($conexion,'utf8');
        $q=" SELECT * FROM horarios WHERE rfc ='$usuario' ";
        
        $consulta= $conexion->query($q);

    ?> 
  
  <?php include ('./head.php')?>    
  <body>

    <?php include ('./header.php')?>
  <div class="row" style="margin-top:20px; margin-left:40px;">
  <div class="col s12"> 
     <h3 style="text-align:center" >CONSULTA DE HORARIOS DE INGENIERÍA EN COMPUTACIÓN</h3>
     <h4 style="text-align:center" >Semestre 2025-I</h4>
    
      <table style="width:100%; border:2px">
        <thead>
            <tr>
                <!--seccion A-->

                <th>CLV MAT</th>
                <th>Materia</th>
                <th>Profesor</th>
                <th>Grupo</th>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miercoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
                <th>Sabado</th>
                <th>Salon</th>

                              
            </tr>
        </thead>


    <?php
    if(mysqli_num_rows($consulta)>0){
        while ($row = mysqli_fetch_assoc($consulta) ) { ?>
            <tr>
                <td> <?php echo $row ['clv_mat'];?></td>
                <td> <?php echo $row ['materia'];?></td>
                <td> <?php echo $row ['profesor'];?></td>
                <td> <?php echo $row ['grupo'];?></td>
                <td> <?php echo $row ['lu1'];?> - <?php echo $row ['lu2'];?></td>
                <td> <?php echo $row ['mar1'];?> - <?php echo $row ['mar2'];?></td>
                <td> <?php echo $row ['mie1'];?> - <?php echo $row ['mie2'];?></td>
                <td> <?php echo $row ['jue1'];?> - <?php echo $row ['jue2'];?></td>
                <td> <?php echo $row ['vie1'];?> - <?php echo $row ['vie2'];?></td>
                <td> <?php echo $row ['sab1'];?> - <?php echo $row ['sab2'];?></td>
                <td> <?php echo $row ['salon'];?></td>

            </tr>


    <?php }        
        } else {
        echo ' 
            <header>
                <h2 style="text-align:center">Error de Conexion </h2>
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
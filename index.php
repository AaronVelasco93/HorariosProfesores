<!DOCTYPE html>
<html lang="en">

<style>

.nav
{
   position: fixed;
   top: 0px;
}
  </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Materialize files-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/estilos.css">
    <link rel="stylesheet" href="assets/css/stilos_ICO.css">
    <link rel="shortcut icon" href="assets/img/favicon.jpg"/>
    <title>ACTIVIDADES DEPORTIVAS Y CULTURALES</title>
</head>
<script>
    function valida(e){
        tecla = (document.all) ? e.keyCode : e.which;
        //Tecla de retroceso para borrar, siempre la permite
        if (tecla==8){
            return true;
        }

        //patron de entrada, en este caso solo acepta numero
        patron =/[0-9]/;
        tecla_final = String.fromCharCode(tecla);
        return patron.test(tecla_final);
    }
</script>
<body >
    <?php include ('./header.php')?>
    <!--Inicio de header-->
  <div class="section no-pad-bot" id="index-banner">
    <div class="container" >
      <h2 class="header center orange-text">HORAS DE FORMACIÓN COMPLEMENTARIA ING. COMPUTACIÓN</h2>
      <div class="row center">
    </div>
    </div>
  </div>

    <!--Fin de header-->
        <h3 style="text-align:center">Consulta de Actividades Deportivas y Culturales</h3>
    <div class="row" style="margin-top:10px">
        <div class="col s6 offset-s3">


            <form action="logica/loguear.php" method="POST">
                <div class="form-group">
                    <label>Numero de cuenta</label>
                    <input type="text" onkeypress="return valida(event)" maxlength="9" placeholder="Ingresa tu numero de cuenta sin guiones" name="no_cuenta"
                        requiredclass="form-control" id="exampleInputEmail1">
                </div>
                <div align="center">
                <button type="submit"  class="btn btn-primary"  style="background-color:black;color:white">Generar
                    Consulta</button></div>
            </form>

        </div>
    </div>
    <br><br><br><br><br><br>

   
    
    <!--Inicio de footer-->


</body>
<footer>
<?php include ('./footer.php')?>
</footer>
    <!--Script de nav pasarlo a un php-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="assets/js/materialize.js"></script>
    <script type="text/javascript">$(".brand-logo").sideNav();</script>   
</html>
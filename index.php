<?php include ('./head.php')?>
<body >
    <?php include ('./header.php')?>
    <!--Inicio de header-->
  <div class="section no-pad-bot" id="index-banner">
    <div class="container" >
      <h2 class="header center orange-text">CONSULTA DE HORARIOS DE INGENIERÍA EN COMPUTACIÓN</h2>
    <div class="row center">
    </div>
    </div>
  </div>

    <!--Fin de header-->
        <h3 style="text-align:center">Semestre 2025-I</h3>
    <div class="row" style="margin-top:10px">
        <div class="col s2 offset-s5">


            <form action="logica/loguear.php" method="POST">
                <div class="form-group" style="text-aling:center">
                    <label>RFC</label>
                    <input type="text"  maxlength="13" placeholder="Ingresa tu RFC" name="rfc"
                        requiredclass="form-control" id="rfc">
                </div>
                <div align="center">
                <button type="submit"  class="btn btn-primary"  style="background-color:black;color:white;  text-transform: uppercase;">Generar
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
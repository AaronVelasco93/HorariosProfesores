<style>
html {
    min-height: 100%;
    position: relative;
  }
  body {
    margin: 0;
    margin-bottom: 120px;
  }

footer
{
    background-color:red;    
    position: absolute;
    bottom: 0;
    width:100%;
    height: 120px;
    
    height:105px;
}


</style>

       <footer class="page-footer orange" style="background-color:#E8762A;padding-top: 10px;">
       <div class="container black-text">

           <div class="row">
               <blockquote class=" left centrado_footer">
                   <p class="p_footer_l" align="right">Ing. Jorge Arturo López Hernández </p>
                   <p class="p_footer_l" align="right">Jefe de carrera</p>

               </blockquote>
               <blockquote class=" right centrado_footer">
                   <p class="p_footer_r">Ing. Ana Claudia Reyes Cruz</p>
                   <p class="p_footer_r">Secretaria Técnica</p>
               </blockquote>
           </div>

       </div>
   </footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script>
$(".carousel.carousel-slider").carousel({
   fullWidth: true,
   padding: 200
 }, setTimeout(autoplay, 4500));

 function autoplay() {
   $(".carousel").carousel("next");
   setTimeout(autoplay, 5000);
 }
</script>




<script>
   document.addEventListener("DOMContentLoaded", function () {
       var elems = document.querySelectorAll(".sidenav");
       var instances = M.Sidenav.init(elems);
   });

   $(".dropdown-trigger").dropdown();


   $(document).ready(function () {
       $(".sidenav").sidenav();
   });

   $(document).ready(function(){
    $(".collapsible").collapsible();
  });

</script>
<!--carrucel fin-->



</body>

</html>

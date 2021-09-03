<div id='cssmenu'><!--inicio del menu-->
<ul>

<!--///////////////SESION 1///////////// --->
  <?php
  if($_SESSION['rol'] == 1){ ?>
  <li class='last'><a href='../salir.php' class="cerrar_azul"><span class="icon-logout" > cerrar sesión</span></a></li>
  <style>
  .cerrar_azul{
  left:  1179px; }
  </style>
  <?php } ?>

<!--//TERMINA >>>>> ////////////SESION 1///////////// --->


<!--//////////////////////////////SESION 2 - 3 - 4/////////////////////////////////////////////--->
     <?php if($_SESSION['rol'] == 2 || $_SESSION['rol'] == 3 || $_SESSION['rol'] == 4) {?>
        <li><a href='home.php'><span class="fi fi-home"></span></a></li>
        <li><a href='personal.php'><span class=" fi fi-torsos-all"> Personal </span></a></li>
            <!---TELARES--->
        <li class='active has-sub'><a href='#'><span class="fi fi-clipboard-notes"> Telares</span></a>
          <ul>
             <li class='has-sub'><a href='telar_planos.php'><span>Telares Planos</span></a>
              </li>
              <li class='has-sub'><a href='telar_proceso.php'><span>Telares en proceso</span></a>
              </li>
              <li class='has-sub'><a href='telar_circular.php'><span>Telares Circulares</span></a>
             </li>
           </ul>
        </li>
            <!---TELARES--->
        <li><a href='calentadores.php'><span class="fi fi-clipboard-notes"> Calentadores </span></a></li>
        <li><a href='urdidor.php'><span class="fi fi-clipboard-notes"> Urdidor </span></a></li>
        <li><a href='plegadores.php'><span class="fi fi-clipboard-notes"> Transporte de Plegadores </span></a></li>
        <li><a href='vaporizador.php'><span class="fi fi-clipboard-notes"></span> Vaporizador</a></li>
        <li><a href='analisis.php'><span class="fi fi-page-multiple"></span> ANÀLISIS</a></li>
        <li class='last'><a href='2.php'><span class="icon-file-pdf"> REPORTE</span></a></li>
        <li class='last'><a href='../salir.php' class="cerrar_azul"><span class="icon-logout" > cerrar sesión</span></a></li>
      <?php } ?>
<!--//TERMINA >>>>>> ///////////////////////////SESION 2 - 3 - 4/////////////////////////////////////////////--->


<!--//COMIENZA >>>>>> ///////////////////////////SESION  5/////////////////////////////////////////////--->
     <?php  if($_SESSION['rol'] == 5) {?>
     <li><a href='home.php'><span class="fi fi-home"></span></a></li>
     <li><a href='personal.php'><span class=" fi fi-torsos-all"> Personal </span></a></li>
     <!--TELARES-->
     <li class='active has-sub'><a href='#'><span class="fi fi-clipboard-notes"> Telares</span></a>
       <ul>
          <li class='has-sub'><a href='telar_planos.php'><span>Telares Planos</span></a>
           </li>
           <li class='has-sub'><a href='telar_proceso.php'><span>Telares en proceso</span></a>
           </li>
           <li class='has-sub'><a href='telar_circular.php'><span>Telares Circulares</span></a>
          </li>
        </ul>
     </li>
     <!---TELARES--->
     <li><a href='calentadores.php'><span class="fi fi-clipboard-notes"> Calentadores </span></a></li>
     <li><a href='urdidor.php'><span class="fi fi-clipboard-notes"> Urdidor </span></a></li>
     <li><a href='plegadores.php'><span class="fi fi-clipboard-notes"> Transporte de Plegadores </span></a></li>
     <li><a href='vaporizador.php'><span class="fi fi-clipboard-notes"></span> Vaporizador</a></li>
     <li><a href='analisis.php'><span class="fi fi-page-multiple"></span> ANÀLISIS</a></li>
     <li class='last'><a href='../salir.php' class="cerrar_azul"><span class="icon-logout" > cerrar sesión</span></a></li>
     <?php } ?>
<!--//TERMINA >>>>>> ///////////////////////////SESION  5/////////////////////////////////////////////--->


<!--/////////////////////////////SESION 6 Y 7/////////////////////////////////////////////////-->
   <?php
  if($_SESSION['rol'] == 6 || $_SESSION['rol'] == 7){
  ?>
<li><a href='home.php'><span class="fi fi-home"></span></a></li>
<li><a href='analisis.php'><span class="fi fi-page-multiple"></span> ANÀLISIS</a></li>
<li class='last'><a href='../salir.php' class="cerrar_azul"><span class="icon-logout" > cerrar sesión</span></a></li>
   <?php } ?>
<!--////TERMINA >>>>> /////////////////////////SESION 6 Y 7/////////////////////////////////////////////////-->
</ul>

     <!-- <ul>
         <li class='has-sub'><a href='pdf.php'><span class="icon-file-pdf">Pdf</span></a>
          <ul>
               <li class='has-sub'><a href='graficas.php'><span class="fi fi-graph-trend"> Gráfica</span></a></li>
            </ul>
		 </li>
      </ul>
   </li>-->
<!------------------------------------------------------------------------>
</div> <!--termina el menu-->
</body>

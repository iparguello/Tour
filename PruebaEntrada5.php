 <?php
$nombre_carpeta="src/Juris-Filosofia";
$cantidad=714;
$imagen=373;
 ?>            

<html>
<script language="javascript" type="text/javascript">

    function loadTour4(a){
      switch (a){
      case 'CULTURA-FISICA': $("#contenido").load("Fisica.php");
      break;
      case 'QUIMICA': $("#contenido").load("Quimica.php");
      break;
	  default: break;
      }
      
      $("#contenido").show();
  }
  
  var imagen = "<?php echo $imagen;?>";
  var cantidad = "<?php echo $cantidad;?>";
  var nombre_carpeta= "<?php echo $nombre_carpeta;?>";
  var seguro = 0;
    
        {imagenes = new CreaArray(cantidad);
        for (var a=373;a<=cantidad;a++) 
          {
            imagenes[a].src = nombre_carpeta+"/escene"+a+".jpg"; 
          }
        }
         		 
        function CreaArray(n) {
            this.length = n;
            for (var i = 373; i<=n; i++) {
                this[i] = new Image();
            }
            return this;
        }


         
        function MostrarSecuenciaUP(){
                document.images["secuencia"].src = imagenes[imagen].src;
                imagen++;
        
        if ( imagen == cantidad )
        {
          $(document).ready(function()
                  {
                    $("#mostrarmodal").modal("show");

                  });
          
          imagen=cantidad-1;
        }
        if ( imagen == 376 )
        {
          $(document).ready(function()
                  {
                    $("#mostrarmodalinicio").modal("hide");

                  });
        }
            }

    
    function MostrarSecuenciaDOWN() {
                document.images["secuencia"].src = imagenes[imagen].src;
                imagen--;
        if ( imagen == 374)
        MostrarSecuenciaUP();
        if ( imagen == 375)
        {
          $(document).ready(function()
                  {
                    $("#mostrarmodalinicio").modal("show");

                  });
          
        }
        if ( imagen == cantidad-3 )
        {
          $(document).ready(function()
                  {
                    $("#mostrarmodal").modal("hide");

                  });
        }

          }
         
        function IniciarSecuencia() {
            imagen = 373;
        }
    
    document.onkeydown = function(e) {
      switch (e.keyCode) {
        case 38: seguro = 1;
          MostrarSecuenciaUP();
          break;
        case 40: if (seguro == 1)
          MostrarSecuenciaDOWN();
          break;
        default: break;
      }
    };
         
    </script>
    
<head>
  
  <?php include("header.php"); ?>
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>

 

</head>
     
   <body oncontextmenu="return false" onkeydown="return false" >
       <center>
			<img class="img-thumbnail" src=<?php echo $nombre_carpeta.'/escene373.jpg'?> alt="Secuencia" name="secuencia"></center>

<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
            
              <center><h4>A donde desea ir?</h4></center>
           </div>
           <div class="modal-body">
	       <center>
	             <button type="button" onclick="loadTour4('FISICA')"  class="btn btn-info btn-sm">FACULTAD DE FISICA</button>
				 <button type="button" onclick="loadTour4('QUIMICA')" class="btn btn-warning btn-sm">FACULTAD DE QUIMICA</button>
				 
	             
	       </center>
           </div>
      </div>
   </div>
</div>
		
    </body>

</html>

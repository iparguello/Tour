<?php
$nombre_carpeta="src/IngresoAdministracion";
$cantidad=746;
$imagen=1;
 ?>            
        
<!DOCTYPE html>
<html>	
<script language="javascript" type="text/javascript">

function loadTour1IADM(a){
            switch (a){
      case 'SALIR': $("#contenido").load("PruebaEntrada1.php");
      break;
     
      default: break;
      }
      
      $("#contenido").show();
  }
    
    var imagen = "<?php echo $imagen;?>";
    var cantidad = "<?php echo $cantidad;?>";
    var nombre_carpeta= "<?php echo $nombre_carpeta;?>";
    var seguro = 0;
//CARGA ARREGLO     
        {imagenes = new CreaArray(cantidad);
        for (var a=1;a<=cantidad;a++) 
            {
                imagenes[a].src = nombre_carpeta+"/escene"+a+".jpg";
            }
        }
//END CARGA ARREGLO

//CREAR ARREGLO         
        function CreaArray(n) {
            this.length = n;
            for (var i = 1; i<=n; i++) {
                this[i] = new Image();
            }
            return this;
        }

//Secuencia hacia ADELANTE
        function MostrarSecuenciaUP(){
        document.images["secuencia"].src = imagenes[imagen].src;
        imagen++;
            if ( imagen == cantidad ){
                $(document).ready(function(){
                    $("#mostrarmodal").modal("show");
                });
            imagen=cantidad-1;
            }
    }

//Secuencia hacia ATRAS
    function MostrarSecuenciaDOWN() {
        document.images["secuencia"].src = imagenes[imagen].src;
                imagen--;
            if ( imagen == 2){
                MostrarSecuenciaUP();
            }
            if( imagen == cantidad-2 ){
                $(document).ready(function(){
                    $("#mostrarmodal").modal("hide");
                });             
            }
    }

//Reconocer presion TECLA-UP        
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
<!------- Carga ---------->
	<center>
		<img class="img-thumbnail" src=<?php echo $nombre_carpeta.'/escene1.jpg'?> alt="Secuencia" name="secuencia">
	</center>
<!------- END Carga ---------->

<!------- Modal del Final ----------> 
	<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					
					<center><h4>A donde desea ir?</h4></center>
				</div>
				<div class="modal-body">
					<center>
						<button type="button"  onclick="loadTour1IADM('SALIR')" class="btn btn-info btn-sm">REGRESAR AL PUNTO DE INICIO</button>
              			
	      				
					</center>
           			</div>
      			</div>
   		</div>
	</div>
<!------- END Modal del Final ---------->    

    </body>

</html>

<?php
$nombre_carpeta="src/IngresoCentro";
$cantidad=642;
$imagen=1;
 ?>  
<html>	
<script language="javascript" type="text/javascript">

function loadTour1CC(a){
      switch (a){
      case 'SALIR': $("#contenido").load("PruebaEntrada3.php");
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
			if ( imagen == 4 )
        {
          $(document).ready(function()
                  {
                    $("#mostrarmodalinicio").modal("hide");

                  });
        }
        
    }

//Secuencia hacia ATRAS
    function MostrarSecuenciaDOWN() {
        document.images["secuencia"].src = imagenes[imagen].src;
                imagen--;
        if ( imagen == 2)
        MostrarSecuenciaUP();
        if ( imagen == 3)
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
            imagen = 1;
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
		<img class="img-thumbnail" src=<?php echo $nombre_carpeta.'/escene1.jpg'?> alt="Secuencia" name="secuencia" >
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
						<button type="button"  onclick="loadTour1CC('SALIR')" class="btn btn-warning btn-sm">SALIR</button>
						
					</center>
           			</div>
      			</div>
   		</div>
	</div>

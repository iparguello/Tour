<?php
$nombre_carpeta="src/Psicologia";
$cantidad=4700;
$imagen=4698;
 ?>  
<html>	
<script language="javascript" type="text/javascript">

function loadTour1TFE(a){
      switch (a){
      case 'CC': $("#contenido").load("CentroComputo.php");
      break;
	  case 'INGRESAR': $("#contenido").load("InteriorFisica.php");
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
			for (var a=4698;a<=cantidad;a++) 
				{
					imagenes[a].src = nombre_carpeta+"/escene"+a+".jpg";
				}
			}
	//END CARGA ARREGLO

	//CREAR ARREGLO         
			function CreaArray(n) {
				this.length = n;
				for (var i = 4698; i<=n; i++) {
					this[i] = new Image();
				}
				return this;
			}
		//Secuencia Mostrar Arriba
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
			
			
	//Secuencia Adelante AUTOMATICA
			function MostrarSecuencia(){
					
		if ( SecuenciaEjecutandose == true ) {
                      
        //A TODAS LAS IMÁGENES DE <body> CUYO NOMBRE SEA "Secuencia"
        //LE ASIGNAMOS LAS DEL ARRAY
        document.images["secuencia"].src = imagenes[imagen].src;
        imagen ++;
        if ( imagen == cantidad ){
            	$(document).ready(function(){
						$("#mostrarmodal").modal("show");
					});
				imagen=cantidad-1;
				}
                 //setTimeout PERMITE EJECUTAR UNA FUNCIÓN PASADO CIERTO TIEMPO.
				 SecuenciaID = setTimeout("MostrarSecuencia()", 50)     
					
   
	}    

}
function MostrarSecuenciaAtras(){
					
		if ( SecuenciaEjecutandose == true ) {
          document.images["secuencia"].src = imagenes[imagen].src;
					imagen--;
				if ( imagen == 4699){
					MostrarSecuenciaUP();
				}
				if( imagen == cantidad-2 ){
					$(document).ready(function(){
						$("#mostrarmodal").modal("hide");
					});             
				}
				SecuenciaID = setTimeout("MostrarSecuenciaAtras()", 50) 
		}
		   
        }
		
function Iniciar () {
    SecuenciaEjecutandose = true
    MostrarSecuencia();
	
}
function Atras () {
    SecuenciaEjecutandose = true
    MostrarSecuenciaAtras();
	
}
     
function Parar () {
    SecuenciaEjecutandose = false
    MostrarSecuencia();
}

	//Secuencia hacia ATRAS
		function MostrarSecuenciaDOWN() {
			document.images["secuencia"].src = imagenes[imagen].src;
					imagen--;
				if ( imagen == 4698){
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
		<img class="img-thumbnail" src=<?php echo $nombre_carpeta.'/escene4698.jpg'?> alt="Secuencia" name="secuencia">
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
						<button type="button"  onclick="loadTour1TFE('CC')" class="btn btn-warning btn-sm">REGRESAR AL EDIFICIO CENTRAL</button>
						<button type="button"  onclick="loadTour1TFE('INGRESAR')" class="btn btn-warning btn-sm">INGRESAR A LA  FACULTAD</button>	      				
					</center>
           			</div>
      			</div>
   		</div>
	</div>
<!------- END Modal del Final ---------->    

    </body>

</html>


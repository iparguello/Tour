 <?php
$nombre_carpeta="src/entradaP";
$cantidad=1295;
$imagen=1092;
 ?>            

<html>	

<script language="javascript" type="text/javascript">

    function loadTour3(a){
      switch (a){
      case 'JURISPRUDENCIA': $("#contenido").load("Jurisprudencia.php");
      break;
      case 'PSICOLOGIA': $("#contenido").load("Psicologia.php");
      break;
	  case 'C.AGRARIA': $("#contenido").load("Agraria.php");
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
			for (var a=1092;a<=cantidad;a++) 
				{
					imagenes[a].src = nombre_carpeta+"/escene"+a+".jpg";
				}
			}
	//END CARGA ARREGLO

	//CREAR ARREGLO         
			function CreaArray(n) {
				this.length = n;
				for (var i = 1092; i<=n; i++) {
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
                      
        document.images["secuencia"].src = imagenes[imagen].src;
        imagen ++;
        if ( imagen == cantidad ){
            	$(document).ready(function(){
						$("#mostrarmodal").modal("show");
					});
				imagen=cantidad-1;
				
				}
                SecuenciaID = setTimeout("MostrarSecuencia()", 50) 
				     
					
   
	}    

}
function MostrarSecuenciaAtras(){
					
		if ( SecuenciaEjecutandose == true ) {
          document.images["secuencia"].src = imagenes[imagen].src;
					imagen--;
				if ( imagen == 1092){
					MostrarSecuencia();
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
				if ( imagen == 1){
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
       <center>
			<img class="img-thumbnail" src=<?php echo $nombre_carpeta.'/escene1092.jpg'?> alt="Secuencia" name="secuencia"></center>

<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
            
              <center><h4>A donde desea ir?</h4></center>
           </div>
           <div class="modal-body">
	       <center>
	             <button type="button" onclick="loadTour3('JURISPRUDENCIA')"  class="btn btn-info btn-sm">FACULTAD DE JURISPRUDENCIA</button>
				 <button type="button" onclick="loadTour3('PSICOLOGIA')" class="btn btn-warning btn-sm">FACULTAD DE PSICOLOGÍA</button>
				 <button type="button" onclick="loadTour3('C.AGRARIA')" class="btn btn-primary btn-sm">FACULTAD DE CIENCIAS AGRARIAS</button>
	             
	       </center>
           </div>
      </div>
   </div>
</div>
		
    </body>

</html>

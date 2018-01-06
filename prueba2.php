<?php
$nombre_carpeta="src/entradaP";
$cantidad=346;
$imagen=1;
 ?>  
 
<html>
<head>
<script type="text/javascript">

	function loadTour1(a){
		  switch (a){
		  case 'ADMINISTRATIVAS': $("#contenido").load("InteriorAdministrativa.php");
		  break;
		  case 'CONTINUAR': $("#contenido").load("PruebaEntrada1.php");
		  break;		 
		  default: break;
			}
				$("#contenido").show();
			}
var imagen = "<?php echo $imagen;?>";
var cantidad = "<?php echo $cantidad;?>";
var nombre_carpeta= "<?php echo $nombre_carpeta;?>";
var SecuenciaID = null;
var duracion = 0;
     
{imagenes = new CreaArray(cantidad);
			for (var a=1;a<=cantidad;a++) 
				{
					imagenes[a].src = nombre_carpeta+"/escene"+a+".jpg";
				}
}
         
function CreaArray(n) {
    this.length = n
    for (var i = 1; i<=n; i++) {
        this[i] = new Image()
    }
    return this
}
         
function MostrarSecuencia () {
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
         
function Iniciar () {
    SecuenciaEjecutandose = true
    MostrarSecuencia();
}
     
function Parar () {
    SecuenciaEjecutandose = false
    MostrarSecuencia();
}
</script>
     
    <body>
        <p><img class="img-thumbnail" src=<?php echo $nombre_carpeta.'/escene1.jpg'?> alt="Secuencia" name="secuencia"></p>
        <input type="button" value="Iniciar secuencia" onClick="Iniciar()">
		<input type="button" value="Parar secuencia" onClick="Parar()">
		
		<!------- Modal del Final ----------> 
	<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<center><h4>A donde desea ir?</h4></center>
				</div>
				<div class="modal-body">
					<center>
						<button type="button"  onclick="loadTour1('ADMINISTRATIVAS')" class="btn btn-info btn-sm">INGRESO A CIENCIAS ADMINISTRATIVAS</button>
              			<button type="button" onclick="loadTour1('CONTINUAR')" class="btn btn-warning btn-sm">CONTINUAR CON EL RECORRIDO</button>
					</center>
				   </div>

				   

			  
		   </div>

		   
	</div>
<!------- END Modal del Final ---------->  
</html>

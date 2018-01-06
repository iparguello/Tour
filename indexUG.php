
<!DOCTYPE html>
<html lang="en">
			<head>
			
				<?php include("header.php"); ?>
		

			</head>
	<body oncontextmenu="alert('No se puede copiar : Material Protegido');return true" onkeydown="return true" onload="myFunction()">
		<span id="loader">
				<div id="myDiv" class="animate-bottom"></div>
					</span>
			<!-- Navigation -->
			
				<a id="menu-toggle" href="#" class="btn btn-success btn-lg toggle"><i class="fa fa-bars"></i></a>
					<nav id="sidebar-wrapper">
						<ul class="sidebar-nav">
							<a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
								<li class="sidebar-brand">
									<a href="#top" onclick=$("#menu-close").click();>Iniciar desde:</a>
								</li>
								<li>
									<a href="#" onclick="loadTour(1)">CIENCIAS ADMINISTRATIVAS</a>
								</li>
								<li>
									<a href="#" onclick="loadTour(2)">EDIFICIO CENTRAL</a>
								</li>
								<li>
									<a href="#" onclick="loadTour(3)">JURISPRUDENCIA</a>
								</li>
								<li>
									<a href="#" onclick="loadTour(4)">FILOSOFÍA Y LETRAS</a>
								</li>
								<li>
									<a href="#" onclick="loadTour(5)" >CIENCIAS ECONÓMICAS</a>
								</li>
								<li>
									<a href="#" onclick="loadTour(6)" >PSICOLOGÍA</a>
								</li>
								<li>
									<a href="#" onclick="loadTour(7)" >CIENCIAS QUÍMICAS</a>
								</li>
								<li>
									<a href="#" onclick="loadTour(8)" >CIENCIAS MEDICAS</a>
								</li>
								<li>
									<a href="#" onclick="loadTour(9)" >ODONTOLOGIA</a>
								</li>
								<li>
									<a href="#" onclick="loadTour(10)" >AGRARIA</a>
								</li>
								<li>
									<a href="#" onclick="loadTour(11)" >FEDER</a>
								</li>
								<li>
									<a href="#" onclick="loadTour(12)" >ARQUITECTURA</a>
								</li>
								<li>
									<a href="#" onclick="loadTour(13)" >MATEMATICA</a>
								</li>
											
						</ul>
					</nav>
    <!-- Header -->
    <header id="top" class="header">
	
				<div id="welcome" class="text-vertical-center" style="color:#111111";>
					<div>
						<h1 class="animated bounceIn" style="text-align: center;
									color: #ffffff;
									font-family: cursive;
									font-size: px;
									text-shadow: -1px -1px 1px #000, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #000;
									-webkit-text-fill-color: #045FB4;
									-webkit-text-stroke: 2px white;
                                    font-family: 'Baloo Thambi', cursive;
                                     ">
                                    
									Bienvenido al Tour Virtual
						</h1>
					</div>
						<h2>
							<img class="animated infinite pulse" src="img/LogoUG-01.png" width="25%" height="20%">
						</h2>
					<br>
						<button type="button"  onclick="loadTour(0)" class="btn btn-danger btn-lg">Iniciar</button>
				</div>
				
						<div class="modal fade" id="principal" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" >
							
					<div class="modal-dialog modal-lg" >
						<div class="modal-content" onmousewheel="MostrarSecuenciaUP()">
							<div class="modal-header bg-primary" style="padding: 1px;" >
                                <div align="right">
                                     <button type="button" class="closeAll" class="btn btn-warning btn-sm" data-dismiss="modal"><font color="blue">X</font></button>
                                </div>
                                            <center><h3>Tour Virtual UG</h3></center>
							</div>
				
								<div class="modal-body" id="contenido" >
								
                                
                        </div>
                               </div> 
                   

			                    <div class="modal-footer">
                                    <center>
									<a href="#" id="atras" class="btn btn-success" onclick="Atras()"><span class="	glyphicon glyphicon-step-backward"></span></a>
									<a href="#" class="btn btn-success" onclick="MostrarSecuenciaUP()"><span class="glyphicon glyphicon-chevron-up"></span></a>
            			            <a href="#" class="btn btn-success" onclick="MostrarSecuenciaDOWN()"><span class="glyphicon glyphicon-chevron-down"></span></a>
                                    <a href="#" id="but"  class="btn btn-success"><span class="glyphicon glyphicon-play"></span></a>
									<a href="#" id="par" class="btn btn-success" onclick="Parar()"><span class="glyphicon glyphicon-pause"></span></a>
									</center>
									
                                </div>
                    
					
					 
								</div>

				</div>
				
				
			
	
    </header>


   

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
  
    });




// ---------Funcion para cerrar modal y cargar pagina Padre
    $('.closeAll').click(function() {
  window.location.reload(true);
  history.go(0);
});

window.onload = function() {
  $('.radio').text($.now());
};
// -------------Fin de la funcion. llamar con la clase

  var botonDisabled=false;
 
        $(document).ready(function(){
 
            $("#but").click(function(){
                if(botonDisabled==false)
                {   
					$("#but").addClass("disabled");
					$("#atras").addClass("disabled");
					Iniciar();
                }
            });
        });
 
<!-------------------------------------->
var parDisabled=false;
 
        $(document).ready(function(){
 
            $("#par").click(function(){
                if(parDisabled==false)
                {   
					$("#but").removeClass("disabled");	
					$("#atras").removeClass("disabled");	
                }
            });
        });
		<!-------------------------------------->
var atrasDisabled=false;
 
        $(document).ready(function(){
 
            $("#atras").click(function(){
                if(atrasDisabled==false)
                {   
					$("#but").addClass("disabled");
                }
            });
        });
		
	<!-------------------------------------->	
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    
    
    });
	
	
 function loadTour(x){
if(x==1)
{
    $("#contenido").load("Entrada_Prin.php");
    $("#principal").modal("show");
    $("#contenido").show();
}
if(x==2)
{
    $("#contenido").load("PruebaEntrada3.php");
    $("#principal").modal("show");
    $("#contenido").show();
}
if(x==3)
{
    $("#contenido").load("FilosofiaLetras.php");
    $("#principal").modal("show");
    $("#contenido").show();
}
if(x==4)
{
    $("#contenido").load("PruebaEntrada4.php");
    $("#principal").modal("show");
    $("#contenido").show();

}
if(x==5)
{
    $("#contenido").load("Matematica.php");
    $("#principal").modal("show");
    $("#contenido").show();
}
if(x==6)
{
    $("#contenido").load("Quimica.php");
    $("#principal").modal("show");
    $("#contenido").show();
}
if(x==7)
{
    $("#contenido").load("Fisica.php");
    $("#principal").modal("show");
    $("#contenido").show();
}
if(x==8)
{
    $("#contenido").load("TerminacionMedicas.php");
    $("#principal").modal("show");
    $("#contenido").show();
}
if(x==9)
{
    $("#contenido").load("TerminacionOdontologia.php");
    $("#principal").modal("show");
    $("#contenido").show();
}
if(x==10)
{
    $("#contenido").load("TerminacionAgraria.php");
    $("#principal").modal("show");
    $("#contenido").show();
}
if(x==11)
{
    $("#contenido").load("TerminacionFeder.php");
    $("#principal").modal("show");
    $("#contenido").show();
}
if(x==12)
{
    $("#contenido").load("TerminacionArquitectura.php");
    $("#principal").modal("show");
    $("#contenido").show();
}
if(x==13)
{
    $("#contenido").load("TerminacionMatematica.php");
    $("#principal").modal("show");
    $("#contenido").show();
}
if(x==0) 
{
    $("#contenido").load("Entrada_Prin.php");
    $("#principal").modal("show");
    $("#contenido").show();

}

 }

    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    
    var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }
    var onMapClickHandler = function(event) {
            var that = $(this);
            // Disable the click handler until the user leaves the map area
            that.off('click', onMapClickHandler);
            // Enable scrolling zoom
            that.find('iframe').css("pointer-events", "auto");
            // Handle the mouse leave event
            that.on('mouseleave', onMapMouseleaveHandler);
        }
        // Enable map zooming with mouse scroll when the user clicks the map
    $('.map').on('click', onMapClickHandler);
    </script>

	</body>

</html>

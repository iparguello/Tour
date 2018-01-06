<?php
$nombre_carpeta="src/entradaP";
$cantidad=346;
$imagen=1;
 ?>  
 
<html>
<head>
<script type="text/javascript">
function rotarImagenes(idDestino, imagenInicial){
    // Contiene el identificador del Timeout()
    this.SecuenciaID=null;
    // Determina la imagen inicial. La primera imagen es la 0
    this.imagen=imagenInicial;
    // Determina el tiempo en milisegundos del refresco
    this.duracion=3000;
    // Array que contiene los objetos Image() con todas las imagenes
    this.imagenes="";
    // Contendra el listado de imagenes a mostrar
    this.listadoImagenes="";
    // Contiene el id del img donde mostrar las imagenes
    this.showId=idDestino;
 
    // Funcion que genera tantas imagenes como se desee.
    // Estas imagenes, seran las que se utilizaran para mostrar en la web
    this.CreaArray=function(n) {
        this.length = n
        for (var i = 0; i<n; i++) {
            this[i] = new Image()
        }
        return this
    };
 
    // Funcion para detener la secuencia
    // En este ejemplo, se puede iniciar o parar la secuancia poniendo el raton
    // encima de la imagen.
    this.Secuencia=function(type) {
        if(type=="stop")
        {
            clearTimeout(this.SecuenciaID);
        }else if(type=="start"){
            this.MostrarSecuencia();
        }
    };
 
    // Funcion que va mostrando la secuencia de imagenes
    this.MostrarSecuencia=function() {
        document.getElementById(this.showId).src = this.imagenes[this.imagen].src;
        this.imagen++;
        if(this.imagen>=this.listadoImagenes.length)
            this.imagen=0
 
        var instant = this;
        this.SecuenciaID=setTimeout(function() { instant.MostrarSecuencia();}, this.duracion);
    };
 
    // Funcion inicial donde se inicializan las imagenes
    this.IniciarSecuencia=function(listadoImagenes) {
        this.listadoImagenes=listadoImagenes;
 
        this.imagenes=new this.CreaArray(listadoImagenes.length);
        for (var i = 0; i<listadoImagenes.length; i++) {
           // this.imagenes[i].src = listadoImagenes[i];
		  imagenes[i].src = nombre_carpeta+"/escene"+i+".jpg";
        }
        this.MostrarSecuencia();
    };
};
 
var img1=new rotarImagenes("secuencia1",0);
var img2=new rotarImagenes("secuencia2",0);
var img3=new rotarImagenes("secuencia3",0);
var listadoImagenes1=[
    "img1.jpg",
    "img2.jpg",
    "img3.jpg",
    "img4.jpg",
    "img5.jpg",
    "img6.jpg"
];
var listadoImagenes2=[
    "img10.jpg",
    "img11.jpg",
    "img12.jpg",
    "img13.jpg",
    "img14.jpg"
];
var listadoImagenes3=[
    "img10.jpg",
    "img11.jpg"
];
 
function start_rotarImagenes()
{
    img1.IniciarSecuencia(listadoImagenes1);
    img2.IniciarSecuencia(listadoImagenes2);
    img3.IniciarSecuencia(listadoImagenes3);
}
</script>
</head>
 
<body onload="start_rotarImagenes()">
 
<img src="" alt="Secuencia" id="secuencia1" onmouseover="img1.Secuencia('stop')" onmouseout="img1.Secuencia('start')">
<img src="" alt="Secuencia" id="secuencia2" onmouseover="img2.Secuencia('stop')" onmouseout="img2.Secuencia('start')">
<img src="" alt="Secuencia" id="secuencia3" onmouseover="img3.Secuencia('stop')" onmouseout="img3.Secuencia('start')">
 
<div id="info"></div>
</body>
</html>
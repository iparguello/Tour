<!DOCTYPE html>
<html>
  <head>
<script type="text/javascript">
$(document).ready(function() {    
    $('.button').click(function(){

        //Añadimos la imagen de carga en el contenedor
        $('#content').html('<div><img src="img/carga.gif"/></div>');

        var page = $(this).attr('data');        
        var dataString = 'page='+page;
        ...

        $.ajax({
            type: "GET",
            url: "indexUG.php",
            data: dataString,
            success: function(data) {
                //Cargamos finalmente el contenido deseado
                $('#content').fadeIn(1000).html(data);
            }
        });
    });              
});    
</script>
</body>
</html>
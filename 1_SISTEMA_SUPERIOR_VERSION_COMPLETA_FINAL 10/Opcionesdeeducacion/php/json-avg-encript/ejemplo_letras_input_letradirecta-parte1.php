<html>
 
<head>
 
<title>Ejemplo de abraham</title>
 
<script src="../../js/jquery.js"></script> 
<script>
$(document).ready(function(){
$('#busqda-speed').keyup(function(data){
//                var rexcaracter = new RegExp($(this).val());
                var rexcaracter =$(this).val();
                //alert(rexcaracter);
                
    //var aa="hola_mundo";        
$.ajax({
    
    url:'ejemplo_letras_input_letradirecta-parte2.php',
    data:{rexcaracter:rexcaracter},
    type:'POST',
    beforeSend: function(data){

    }
        
}).done(function(data){
    $("#buscar").html(data);
    return false;
});            
            
 return false;
});

return false;
});

</script>
 
</head>
 
<body>
    <input type="text" id="busqda-speed" name="busqda-speed" autocomplete="off">
                    <div id="buscar" >
   TEXTO A DIBUJAR
 </div>
</body>
 
</html>

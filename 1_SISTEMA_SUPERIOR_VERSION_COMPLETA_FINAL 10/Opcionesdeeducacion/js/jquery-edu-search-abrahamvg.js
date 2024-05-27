$(document).ready(function(){         
    
            $('#busqda-speed').keyup(function(data){
//                var rexcaracter = new RegExp($(this).val());
                var rexcaracter =$(this).val();
                //alert(rexcaracter);
                
    //var aa="hola_mundo";        
$.ajax({
    
    url:'php/busquedarapida/modulo88.php',
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





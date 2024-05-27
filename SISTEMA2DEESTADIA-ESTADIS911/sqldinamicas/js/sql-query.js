$(document).ready(function(){
    
    var rexcaracter='15';
//    $.post('php/modulocheckbox.php',{rexcaracter:rexcaracter},function(s){
//        $("#tablasselec").append("<select id='selectables' name='selectables'>"+s+"</select>")
//    })
    //$("#kk").load("php/modulocheckbox.php?rexcaracter=15");
    //alert("hhh");
//    var rexcaracter="15";
    $.ajax({
    //async: false, 
    url:'php/modulocheckbox.php',
    data:{rexcaracter:rexcaracter},
    type:'POST',
    dataType:"TEXT",
    beforeSend: function(data){

    }
        
}).done(function(data){
$("#tablasselec").html(data);
return false;
});

 //$("#avgmodulo1").jPaginate();                       
//return false;
});        
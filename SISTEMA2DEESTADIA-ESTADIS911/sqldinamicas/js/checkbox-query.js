function contar(){
//alert("funcion de conteo");
//var mc2 = form1.checkbox;
//document.getElementById('checkboxselecto').style.display='block';
//alert("esadas");
//$("plexcelgen").html("<input type='hidden' value='keyexcelavg' id='excelbadavg' name='excelbadavg'/>");
var mc2=$("#form1").serialize();
var y="24";
var ddyk="90";
var abraham = {mc2:mc2};

$.post('php/ejecutador-table.php.php',{mc2:mc2,y:y,ddyk:ddyk},function(dono){
 $("#kk").html(dono)
 })

//    $.ajax({
//        url: "php/ejecutador-table.php.php",
//        data:abraham,
//         type:"POST",
//         dataType:"TEXT",
//            beforeSend: function(data){
//                //alert("proceseando...");
//            }
//            
//    }).done(function(data){
//        
//        alert("datos enviados con exito");
//        $("#kk").html(data);
//    }).fail(function (data){
//        alert("error");
//        $("#kk").html(data);
//    })
// 
return false;
}    



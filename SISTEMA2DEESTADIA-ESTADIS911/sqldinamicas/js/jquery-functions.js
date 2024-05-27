function contar(){
$("#resultado2").html('');
$("#resultado").html('');
document.getElementById('divbtns').style.display = 'none';
document.getElementById('operadorl').value='';
document.getElementById('btnwhereorg').style.display = 'none';
var mc2=$("#form1").serialize();
var y="24";
var ddyk="90";
var abraham = {mc2:mc2};
$.post('php/ejecutador-table.php.php',{mc2:mc2,y:y,ddyk:ddyk},function(dono){
 $("#kk").html(dono)
 }); 
return false;
}    


function  valor(a){
$("#resultado").html('');
document.getElementById('divbtns').style.display = 'none';
document.getElementById('operadorl').value='';
document.getElementById('btnwhereorg').style.display = 'none';
document.getElementById('siri').value='';
$("#resultado2").html('');
var rexcaracter= a;
document.getElementById('avgmodulo1').style.display = 'block';
if(rexcaracter=="10"){
//alert("es un 1000");
$("#kk").html('');
$("#avgmodulo1").html('SELECCIONA UNA TABLA');
}else{
var frrk='55';
$("#kk").html('');
//alert(rexcaracter);
$.post('php/modulocheckbox.php',{frrk:frrk,rexcaracter:rexcaracter},function(s){
//$("#avgmodulo1").append(s)  ESTA OPCION ES PARA  USO DE JSON SI LOS VALOREES REGRESAN EN JSON SI NO SOLO CARGA VALORES Y NO LIMPIA EL CAMPO
$("#avgmodulo1").html(s); // SI EN CAMBIO EL .html() devuelve valores y si limpia el campo de los detalle que pueda a ver....
});
}
return false;
}


function selec(avg){
$("#jqles").html('');
document.getElementById('varselec').style.display = 'none';
document.getElementById('divbtns').style.display = 'block';
var mm=avg;var w="12";var y="34";
var badbunny=document.getElementById('gabraham').value;
var conj=badbunny;//
$.post('php/where.php',{mm:mm,w:w},function(abraham){
//$("#avgmodulo1").append(s)  ESTA OPCION ES PARA  USO DE JSON SI LOS VALOREES REGRESAN EN JSON SI NO SOLO CARGA VALORES Y NO LIMPIA EL CAMPO
$("#resultado").html('');
$("#plexcelgen").html('');
$("#resultado").html("<input type='text' id='wheree' name='wheree' placeholder='aaaaa' value="+abraham+" disabled>");
//$("plexcelgen").html("<input type='hidden' value='keyexcelavg' id='excelbadavg' name='excelbadavg'/>");
$.post('php/ejecutador-table.php.php',{abraham:abraham,conj:conj,y:y},function(abraham1){
$("#resultado3").html(abraham1);
});
});
return false;
}



function excelxavg(){
//var billboard= $("#form1").serialize();
//var ex_valor=document.getElementById("gabraham").value;
//alert(ex_valor);alert(billboard);
//var bunny=document.getElementById('excelbadavg').value;
//var bunny2=document.getElementById('excelbadavg2').value;
//var bacuc="20";
//alert(bunny);alert(bunny2);
//alert($("#jqles").html());
//alert($("#jqles2").html());
//URL PARA ENVIAR DATOS C METODO POST A UN PHP
window.open('data:application/vnd.ms-excel,' + encodeURIComponent($('#jqles').html()));
return false;
}


function excelxavg2(){
//alert($("#jqles2").html());
//URL PARA ENVIAR DATOS C METODO POST A UN PHP
window.open('data:application/vnd.ms-excel,' + encodeURIComponent($('#jqles2').html()));
return false;
}


function opselec(vale){
document.getElementById('btnwhereorg').style.display = 'block';
document.getElementById('siri').value='';
var bmyers=vale;
var w="20";
var y="34";
var nikmij="";
var nikmij= document.getElementById('whereavg').value;
//alert(bmyers);
$("#resultado3").html("Query incompleto...");   
// alert(bmyers);
$.post('php/where.php',{bmyers:bmyers,w:w,nikmij:nikmij},function(s){
//$("#resultado2").html(s)
$("#resultado3").html(s);
});
}
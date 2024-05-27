$(document).ready(function(){ 


$("#evaluar").click(function(){
//alert("HOLA PDF");
//javascript:window.open('php/modulo1.php');
var r=document.getElementById('password2').value;
//$('#modulos1').load();    
javascript:window.open('php/tec.superior/pdf-tec.php?b='+r);return false;
})

$("#evaluar2").click(function (){
   // alert("eror");
var r=document.getElementById('password1').value;
//alert(b);alert(r);
    javascript:window.open('php/instituciones/pdf-ins.php?b='+r);return false;
})

$("#evaluar3").click(function (){
    

var r=document.getElementById('password3').value;
//alert(b);alert(r);
    javascript:window.open('php/licenciatura/pdf-lic.php?b='+r);return false;
})

$("#evaluar4").click(function (){
    

var r=document.getElementById('password4').value;
//alert(b);alert(r);
    javascript:window.open('php/especialidades/pdf-espcldds.php?b='+r);return false;
})
$("#evaluar5").click(function (){
    

var r=document.getElementById('password5').value;
//alert(b);alert(r);
    javascript:window.open('php/maestrias/pdf-mastas.php?b='+r);return false;
})

$("#evaluar6").click(function (){
    

var r=document.getElementById('password6').value;
//alert(b);alert(r);
    javascript:window.open('php/doctorados/pdf-doctaa.php?b='+r);return false;
})


$("#evaluar7").click(function (){
    

var r=document.getElementById('password7').value;
//alert(b);alert(r);
 javascript:window.open('php/municipio/pdf-municip.php?b='+r);return false;
})
});





$(document).ready(function(){ 


$("#evaluar").click(function(){
//alert("HOLA PDF");
//javascript:window.open('php/modulo1.php');
var r=document.getElementById('password').value;
//$('#modulos1').load();    
javascript:window.open('php/tec.superior/pdf-tec.php?b='+r);
})

$("#evaluar2").click(function (){
   // alert("eror");
var r=document.getElementById('password').value;
//alert(b);alert(r);
    javascript:window.open('php/instituciones/pdf-ins.php?b='+r);
})

$("#evaluar3").click(function (){
    

var r=document.getElementById('password').value;
//alert(b);alert(r);
    javascript:window.open('php/licenciatura/pdf-lic.php?b='+r);
})

$("#evaluar4").click(function (){
    

var r=document.getElementById('password').value;
//alert(b);alert(r);
    javascript:window.open('php/especialidades/pdf-espcldds.php?b='+r);
})
$("#evaluar5").click(function (){
    

var r=document.getElementById('password').value;
//alert(b);alert(r);
    javascript:window.open('php/maestrias/pdf-mastas.php?b='+r);
})

$("#evaluar6").click(function (){
    

var r=document.getElementById('password').value;
//alert(b);alert(r);
    javascript:window.open('php/doctorados/pdf-doctaa.php?b='+r);
})


$("#evaluar7").click(function (){
    

var r=document.getElementById('password').value;
//alert(b);alert(r);
 javascript:window.open('php/municipio/pdf-municip.php?b='+r);
})
});





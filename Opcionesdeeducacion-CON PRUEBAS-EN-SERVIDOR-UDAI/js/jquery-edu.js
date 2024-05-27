$(document).ready(function(){ 

$('#imga').load('carusel.html');


$('#modulos1').load('php/modulo1.php');
    
$('#modulos2').load('php/modulo2.php'); 

$('#modulos3').load('php/modulo3.php');  

$('#modulos4').load('php/modulo4.php');

$('#modulos5').load('php/modulo5.php'); 

$('#modulos6').load('php/modulo6.php');

$('#modulos7').load('php/modulo7.php');    

$('#modulos8').load('php/modulo8.php');    

$("#upppvt").click(function(){
javascript:window.open("http://upvt.edomex.gob.mx/");
})
$("#faceb").click(function(){
javascript:window.open("https://www.facebook.com/Estadistica911");
})
$("#uaaa").click(function(){
javascript:window.open("http://www.uaemex.mx/");
})
$("#facetuiterpajarito").click(function(){
javascript:window.open("https://www.facebook.com/Estadistica911");
})
$("#faceblibro").click(function(){
javascript:window.open("http://www.snie.sep.gob.mx/estadisticas_educativas.html");
})
$("#rvvo").click(function(){
javascript:window.open("http://www.rvoe.sems.gob.mx");
})
$("#plannn").click(function(){
javascript:window.open("http://planeacion.sep.gob.mx/");
})


$("#es1").on("click",function(aa){
         var doc= document.getElementById('estadistica1').style.display;
         // alert(doc);
          if(doc=="block"){
         var doc= document.getElementById('estadistica1').style.display = 'none';
         //document.getElementById('sliderestadistica911').style.display = 'block';
         $('#imga').load('carusel.html');
          }else{
         var doc= document.getElementById('estadistica1').style.display = 'block';
         //document.getElementById('sliderestadistica911').style.display = 'none';
         $('#imga').html('');
         document.getElementById('estadistica2').style.display = 'none';
         document.getElementById('estadistica3').style.display = 'none';
         document.getElementById('estadistica4').style.display = 'none';
         document.getElementById('estadistica5').style.display = 'none';
         document.getElementById('estadistica6').style.display = 'none';
         document.getElementById('estadistica7').style.display = 'none';
         document.getElementById('estadistica8').style.display = 'none';

          }
      return false;})

$("#es2").on("click",function(aa){
         var doc= document.getElementById('estadistica2').style.display;
         // alert(doc);
          if(doc=="block"){
         var doc= document.getElementById('estadistica2').style.display = 'none';
         //document.getElementById('sliderestadistica911').style.display = 'block';
         $('#imga').load('carusel.html');
         
          }else{
         var doc= document.getElementById('estadistica2').style.display = 'block';
         //document.getElementById('sliderestadistica911').style.display = 'none';
         $('#imga').html('');
         document.getElementById('estadistica1').style.display = 'none';
         document.getElementById('estadistica3').style.display = 'none';
         document.getElementById('estadistica4').style.display = 'none';
         document.getElementById('estadistica5').style.display = 'none';
         document.getElementById('estadistica6').style.display = 'none';
         document.getElementById('estadistica7').style.display = 'none';
         document.getElementById('estadistica8').style.display = 'none';
         
          }
      return false;})
      $("#es3").on("click",function(aa){
         var doc= document.getElementById('estadistica3').style.display;
         // alert(doc);
          if(doc=="block"){
         var doc= document.getElementById('estadistica3').style.display = 'none';    
         //document.getElementById('sliderestadistica911').style.display = 'block';
         $('#imga').load('carusel.html');
          }else{
         var doc= document.getElementById('estadistica3').style.display = 'block';  
         //document.getElementById('sliderestadistica911').style.display = 'none';
         $('#imga').html('');
         document.getElementById('estadistica1').style.display = 'none';
         document.getElementById('estadistica2').style.display = 'none';
         document.getElementById('estadistica4').style.display = 'none';
         document.getElementById('estadistica5').style.display = 'none';
         document.getElementById('estadistica6').style.display = 'none';
         document.getElementById('estadistica7').style.display = 'none';
         document.getElementById('estadistica8').style.display = 'none';
          }
      })
      $("#es4").on("click",function(aa){
         var doc= document.getElementById('estadistica4').style.display;
         // alert(doc);
          if(doc=="block"){
         var doc= document.getElementById('estadistica4').style.display = 'none';
         //document.getElementById('sliderestadistica911').style.display = 'block';
         $('#imga').load('carusel.html');
          }else{
         var doc= document.getElementById('estadistica4').style.display = 'block'; 
         //document.getElementById('sliderestadistica911').style.display = 'none';
         $('#imga').html('');
         document.getElementById('estadistica1').style.display = 'none';
         document.getElementById('estadistica2').style.display = 'none';
         document.getElementById('estadistica3').style.display = 'none';
         document.getElementById('estadistica5').style.display = 'none';
         document.getElementById('estadistica6').style.display = 'none';
         document.getElementById('estadistica7').style.display = 'none';
         document.getElementById('estadistica8').style.display = 'none';
          }
      })
      $("#es5").on("click",function(aa){
         var doc= document.getElementById('estadistica5').style.display;
         // alert(doc);
          if(doc=="block"){
         var doc= document.getElementById('estadistica5').style.display = 'none'; 
         //document.getElementById('sliderestadistica911').style.display = 'block';
         $('#imga').load('carusel.html');
          }else{
         var doc= document.getElementById('estadistica5').style.display = 'block'; 
         //document.getElementById('sliderestadistica911').style.display = 'none';
         $('#imga').html('');
         document.getElementById('estadistica1').style.display = 'none';
         document.getElementById('estadistica2').style.display = 'none';
         document.getElementById('estadistica3').style.display = 'none';
         document.getElementById('estadistica4').style.display = 'none';
         document.getElementById('estadistica6').style.display = 'none';
         document.getElementById('estadistica7').style.display = 'none';
         document.getElementById('estadistica8').style.display = 'none';
          }
      })
      $("#es6").on("click",function(aa){
         var doc= document.getElementById('estadistica6').style.display;
         // alert(doc);
          if(doc=="block"){
         var doc= document.getElementById('estadistica6').style.display = 'none'; 
         //document.getElementById('sliderestadistica911').style.display = 'block';
         $('#imga').load('carusel.html');
          }else{
         var doc= document.getElementById('estadistica6').style.display = 'block';  
         //document.getElementById('sliderestadistica911').style.display = 'none';
         $('#imga').html('');
         document.getElementById('estadistica1').style.display = 'none';
         document.getElementById('estadistica2').style.display = 'none';
         document.getElementById('estadistica3').style.display = 'none';
         document.getElementById('estadistica4').style.display = 'none';
         document.getElementById('estadistica5').style.display = 'none';
         document.getElementById('estadistica7').style.display = 'none';
         document.getElementById('estadistica8').style.display = 'none';
          }
      })
      $("#es7").on("click",function(aa){
         var doc= document.getElementById('estadistica7').style.display;
         // alert(doc);
          if(doc=="block"){
         var doc= document.getElementById('estadistica7').style.display = 'none';   
         //document.getElementById('sliderestadistica911').style.display = 'block';
         $('#imga').load('carusel.html');
          }else{
         var doc= document.getElementById('estadistica7').style.display = 'block'; 
         //document.getElementById('sliderestadistica911').style.display = 'none';
         $('#imga').html('');
         document.getElementById('estadistica1').style.display = 'none';
         document.getElementById('estadistica2').style.display = 'none';
         document.getElementById('estadistica3').style.display = 'none';
         document.getElementById('estadistica4').style.display = 'none';
         document.getElementById('estadistica5').style.display = 'none';
         document.getElementById('estadistica6').style.display = 'none';
         document.getElementById('estadistica8').style.display = 'none';
          }
      })


//#98b826;
$("#mensaje-alerta-importa-estadistica911").html('<center><span class="icon fa-edit" style="font-size:18px; color:#ffffff; font-family:sans-serif;">NOTA:IMPORTANTE</span></center>'+
        '<center><span class="icon fa-edit"  style="font-size:18px; color:#ffffff; font-family: sans-serif;" > La información presentada es resultado de la captura de las instituciones educativas.</span></center>').show().fadeOut(60000);


$("#busqueda-estadistica911").on("click",function(aa){
         var doc= document.getElementById('estadistica8').style.display;
         // alert(doc);
          if(doc=="block"){
         var doc= document.getElementById('estadistica8').style.display = 'none';   
         //document.getElementById('sliderestadistica911').style.display = 'block';
         $('#imga').load('carusel.html');
          }else{
         var doc= document.getElementById('estadistica8').style.display = 'block'; 
         //document.getElementById('sliderestadistica911').style.display = 'none';
         $('#imga').html('');
         document.getElementById('estadistica1').style.display = 'none';
         document.getElementById('estadistica2').style.display = 'none';
         document.getElementById('estadistica3').style.display = 'none';
         document.getElementById('estadistica4').style.display = 'none';
         document.getElementById('estadistica5').style.display = 'none';
         document.getElementById('estadistica6').style.display = 'none';
         document.getElementById('estadistica7').style.display = 'none';
          }
      })


});

function valorador(){
var a='A'; //alert(a);
}





$(document).ready(function(){ 

$('#modulos1').load('php/modulo1.php');
    
$('#modulos2').load('php/modulo2.php'); 

$('#modulos3').load('php/modulo3.php');  

$('#modulos4').load('php/modulo4.php');

$('#modulos5').load('php/modulo5.php'); 

$('#modulos6').load('php/modulo6.php');

$('#modulos7').load('php/modulo7.php');    


$("#tuiter").click(function(){
javascript:window.open("https://twitter.com/edomex");
})
$("#faceb").click(function(){
javascript:window.open("https://www.facebook.com/Estadistica911");
})
$("#youtb").click(function(){
javascript:window.open("https://www.youtube.com/user/GobEdoMex");
})
$("#facetuiterpajarito").click(function(){
javascript:window.open("https://www.facebook.com/Estadistica911");
})
$("#faceblibro").click(function(){
javascript:window.open("http://www.snie.sep.gob.mx/estadisticas_educativas.html");
})
$("#youtbrvvo").click(function(){
javascript:window.open("http://www.rvoe.sems.gob.mx");
})
$("#plannn").click(function(){
javascript:window.open("http://planeacion.sep.gob.mx/");
})


//$("#updatemusicavg").on("click",function (abraham){
//    var bad= document.getElementById('sliderestadistica911').style.display;
//    alert(bad);
//     if(bad=="none"){
//         document.getElementById('estadistica1').style.display = 'block';
//          }else{
//         document.getElementById('sliderestadistica911').style.display = 'block';
//          }
//      return false;
//})

$("#es1").on("click",function(aa){
         var doc= document.getElementById('estadistica1').style.display;
         // alert(doc);
          if(doc=="block"){
         var doc= document.getElementById('estadistica1').style.display = 'none';
         document.getElementById('sliderestadistica911').style.display = 'block';
          }else{
         var doc= document.getElementById('estadistica1').style.display = 'block';
         document.getElementById('sliderestadistica911').style.display = 'none';
         document.getElementById('estadistica2').style.display = 'none';
         document.getElementById('estadistica3').style.display = 'none';
         document.getElementById('estadistica4').style.display = 'none';
         document.getElementById('estadistica5').style.display = 'none';
         document.getElementById('estadistica6').style.display = 'none';
         document.getElementById('estadistica7').style.display = 'none';

          }
      return false;})

$("#es2").on("click",function(aa){
         var doc= document.getElementById('estadistica2').style.display;
         // alert(doc);
          if(doc=="block"){
         var doc= document.getElementById('estadistica2').style.display = 'none';
         document.getElementById('sliderestadistica911').style.display = 'block';
         
          }else{
         var doc= document.getElementById('estadistica2').style.display = 'block';
         document.getElementById('sliderestadistica911').style.display = 'none';
         document.getElementById('estadistica1').style.display = 'none';
         document.getElementById('estadistica3').style.display = 'none';
         document.getElementById('estadistica4').style.display = 'none';
         document.getElementById('estadistica5').style.display = 'none';
         document.getElementById('estadistica6').style.display = 'none';
         document.getElementById('estadistica7').style.display = 'none';
         
          }
      return false;})
      $("#es3").on("click",function(aa){
         var doc= document.getElementById('estadistica3').style.display;
         // alert(doc);
          if(doc=="block"){
         var doc= document.getElementById('estadistica3').style.display = 'none';    
         document.getElementById('sliderestadistica911').style.display = 'block';
          }else{
         var doc= document.getElementById('estadistica3').style.display = 'block';  
         document.getElementById('sliderestadistica911').style.display = 'none';
         document.getElementById('estadistica1').style.display = 'none';
         document.getElementById('estadistica2').style.display = 'none';
         document.getElementById('estadistica4').style.display = 'none';
         document.getElementById('estadistica5').style.display = 'none';
         document.getElementById('estadistica6').style.display = 'none';
         document.getElementById('estadistica7').style.display = 'none';
          }
      })
      $("#es4").on("click",function(aa){
         var doc= document.getElementById('estadistica4').style.display;
         // alert(doc);
          if(doc=="block"){
         var doc= document.getElementById('estadistica4').style.display = 'none';
         document.getElementById('sliderestadistica911').style.display = 'block';
          }else{
         var doc= document.getElementById('estadistica4').style.display = 'block'; 
         document.getElementById('sliderestadistica911').style.display = 'none';
         document.getElementById('estadistica1').style.display = 'none';
         document.getElementById('estadistica2').style.display = 'none';
         document.getElementById('estadistica3').style.display = 'none';
         document.getElementById('estadistica5').style.display = 'none';
         document.getElementById('estadistica6').style.display = 'none';
         document.getElementById('estadistica7').style.display = 'none';
          }
      })
      $("#es5").on("click",function(aa){
         var doc= document.getElementById('estadistica5').style.display;
         // alert(doc);
          if(doc=="block"){
         var doc= document.getElementById('estadistica5').style.display = 'none'; 
         document.getElementById('sliderestadistica911').style.display = 'block';
          }else{
         var doc= document.getElementById('estadistica5').style.display = 'block'; 
         document.getElementById('sliderestadistica911').style.display = 'none';
         document.getElementById('estadistica1').style.display = 'none';
         document.getElementById('estadistica2').style.display = 'none';
         document.getElementById('estadistica3').style.display = 'none';
         document.getElementById('estadistica4').style.display = 'none';
         document.getElementById('estadistica6').style.display = 'none';
         document.getElementById('estadistica7').style.display = 'none';
          }
      })
      $("#es6").on("click",function(aa){
         var doc= document.getElementById('estadistica6').style.display;
         // alert(doc);
          if(doc=="block"){
         var doc= document.getElementById('estadistica6').style.display = 'none'; 
         document.getElementById('sliderestadistica911').style.display = 'block';
          }else{
         var doc= document.getElementById('estadistica6').style.display = 'block';  
         document.getElementById('sliderestadistica911').style.display = 'none';
         document.getElementById('estadistica1').style.display = 'none';
         document.getElementById('estadistica2').style.display = 'none';
         document.getElementById('estadistica3').style.display = 'none';
         document.getElementById('estadistica4').style.display = 'none';
         document.getElementById('estadistica5').style.display = 'none';
         document.getElementById('estadistica7').style.display = 'none';
          }
      })
      $("#es7").on("click",function(aa){
         var doc= document.getElementById('estadistica7').style.display;
         // alert(doc);
          if(doc=="block"){
         var doc= document.getElementById('estadistica7').style.display = 'none';   
         document.getElementById('sliderestadistica911').style.display = 'block';
          }else{
         var doc= document.getElementById('estadistica7').style.display = 'block'; 
         document.getElementById('sliderestadistica911').style.display = 'none';
         document.getElementById('estadistica1').style.display = 'none';
         document.getElementById('estadistica2').style.display = 'none';
         document.getElementById('estadistica3').style.display = 'none';
         document.getElementById('estadistica4').style.display = 'none';
         document.getElementById('estadistica5').style.display = 'none';
         document.getElementById('estadistica6').style.display = 'none';
          }
      })

});

function valorador(){
var a='A'; //alert(a);
}





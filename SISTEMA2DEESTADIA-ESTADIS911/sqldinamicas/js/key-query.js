$(document).ready(function(){

 
$("#siri").keyup(function(data){
  //  alert("aaa");
var w="23"; var y="34";
var Nrl =$(this).val();
var f=$("#form1").serialize();
//alert(f);
var arc= document.getElementById('whereavg2').value;
//alert(Nrl+arc);
$.post('php/where.php',{Nrl:Nrl,w:w,f:f,arc:arc},function(rbk){
$("#resultado2").html(rbk)
})
    
 });
 
 
 
 $("#operadorl").on('change', function (e) {
 //document.getElementById('btnwhereorg').style.display = 'block';
 var bmyers= this.value;
 var w="20";
 var y="34";
 var nikmij="";
 //var nikmij=document.getElementById('whereavg').value();
var nikmij= document.getElementById('whereavg').value;
alert(bmyers);

 $("#resultado3").html("Query incompleto...");   

// alert(bmyers);
 $.post('php/where.php',{bmyers:bmyers,w:w,nikmij:nikmij},function(s){
 //$("#resultado2").html(s)
 $("#resultado3").html(s);
// $.post('php/ejecutador-table.php.php',{s:s,y:y},function(don){
// $("#resultado3").html(don)
// })
 })

 return false;
 });
 
 
//$('#selectables').on('change', function (e) {
//    //var optionSelected = $("option:selected", this);
//    var valueSelected = this.value;
//    alert(valueSelected);
//    
//    var rexcaracter= valueSelected;
////    
////    $.post('php/modulocheckbox.php',rexcaracter,function(s){
////        $("#avgmodulo1").append(s)
////    })
////    
//    $.ajax({
//       
//    url:'php/modulocheckbox.php',
//    data:{rexcaracter:rexcaracter},
//    type:'POST',
//    dataType:"TEXT",
//    beforeSend: function(data){
//
//    }
////        
//}).done(function(data){
//    $("#avgmodulo1").html(data);
//    //return false;
//});
//    
//   //return false;
//});





return false;
    

});    


function  valor(a){

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
})
}
}


function selec(avg){
//alert("checkboxvalidate"+avg+badbunny);
$("#jqles").html('');
document.getElementById('checkboxselecto').style.display = 'none';
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
})
})

}



function excelxavg(){

//var table = alert($("#jqles2").html());
var billboard= $("#form1").serialize();
var ex_valor=document.getElementById("gabraham").value;
alert(ex_valor);alert(billboard);
var bunny=document.getElementById('excelbadavg').value;
var bunny2=document.getElementById('excelbadavg2').value;

var bacuc="20";
alert(bunny);alert(bunny2);
alert($("#jqles").html());
//URL PARA ENVIAR DATOS C METODO POST A UN PHP
window.open('data:application/vnd.ms-excel,' + encodeURIComponent($('#jqles').html()));


    
//$.post('php/pdfsql.php',{billboard:billboard,ex_valor:ex_valor,bunny:bunny,bunny2:bunny2},function(pdfloading){
//$("#pdfavg").html(pdfloading);    
//})  


//javascript:window.open('php/pdfsql.php',{billboard:billboard,ex_valor:ex_valor,bunny:bunny,bunny2:bunny2});
//javascript:window.open('php/pdfsql.php?billboard='+billboard+'&ex_valor='+ex_valor+'&bunny='+bunny+'&bunny2='+bunny2);



//
//$.post('php/pdfsql.php',{billboard:billboard,ex_valor:ex_valor,bunny:bunny,bunny2:bunny2},function(pdfloading){
//javascript:window.open('php/pdfsql2f.php?nn='+pdfloading);
//})  
//
//var k={billboard:billboard,ex_valor:ex_valor,bunny:bunny,bunny2:bunny2};
//
//
//$.ajax({
//                url:   'php/pdfsql.php',
//                data:  k,
//                type:  'POST',
//                dataType:'TEXT',
//                beforeSend: function () {
//                        //$("#gatt").html("Procesando, espere por favor...").fadeOut(5000);
//                },
//                success:  function (pdfloading) {
//            alert("aaaaaaaaaaa");
//                        javascript:window.open("php/pdfsql2f.php?nn="+pdfloading);
//                        
//                }
//                
//   })
//





return false;
}


function resetwheretable(){
    
}
    
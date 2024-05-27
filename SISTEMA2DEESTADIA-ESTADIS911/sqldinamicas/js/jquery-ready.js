$(document).ready(function(e){
/////////////////////////////////////IMG////////////////////////////////////////7777
$.backstretch("http://www.bestfon.info/images/joomgallery/originals/tecnologa_15/tecnologia_87_20120720_1464330923.jpg");
/*http://www.bestfon.info/images/joomgallery/originals/tecnologa_15/tecnologia_87_20120720_1464330923.jpg
 * http://www.bestfon.info/images/joomgallery/originals/tecnologa_15/tecnologia_87_20120720_1464330923.jpg
 * http://k39.kn3.net/taringa/1/6/8/3/9/8/60/share_gamer/D14.jpg?7565
 * */
/////////////////////////////////////IMG////////////////////////////////////////

    
////////////////////////////////////////////////SELECT-TABLAS-MYSQL//////////////////////////////////////////////////    
var rexcaracter='15';
$.ajax({
url:'php/modulocheckbox.php',
data:{rexcaracter:rexcaracter},
type:'POST',
dataType:"TEXT",
beforeSend: function(data){
}
}).done(function(data){
$("#tablasselec").html(data);

});
////////////////////////////////////////////////SELECT-TABLAS-MYSQL//////////////////////////////////////////////////                
            
             
 /////////////////////////////////////////////////////////SELECTED-OPERADORES-LOGICOS//////////////////////////////////////////////////////////
//$("#operadorl").on('change', function (a) {
//var bmyers= this.value;
//var w="20";
//var y="34";
//var nikmij="";
//var nikmij= document.getElementById('whereavg').value;
//alert(bmyers);
//$("#resultado3").html("Query incompleto...");   
//// alert(bmyers);
//$.post('php/where.php',{bmyers:bmyers,w:w,nikmij:nikmij},function(s){
////$("#resultado2").html(s)
//$("#resultado3").html(s);
//});
//
//});
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////            
            
///////////////////////////////////////////////////////////TEXTO-VALIABLE-A-BUSCAR-WHERE////////////////////////////////////////////////////////          
$("#siri").keyup(function(dataa){
var w="23"; var y="34";
var Nrl =$(this).val();
var f=$("#form1").serialize();
var arc= document.getElementById('whereavg2').value;
$.post('php/where.php',{Nrl:Nrl,w:w,f:f,arc:arc},function(rbk){
$("#resultado2").html(rbk);
});
return false;    
});
 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////            
            
            
            
            
});        
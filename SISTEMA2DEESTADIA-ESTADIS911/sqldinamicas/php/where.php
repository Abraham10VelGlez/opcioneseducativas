<?php

if(($_POST['w']-10)==10){
$smy=$_POST['bmyers'];
if($smy==1){
 $oplogico="="; 
               
}  elseif ($smy==2) {
   $oplogico="<";
           
}  elseif ($smy==3) {
$oplogico=  ">";
           
}  elseif ($smy==4) {
$oplogico=" <> ";
           
}  elseif ($smy==5) {
$oplogico= "<=";
           
} elseif ($smy==6) {
$oplogico= ">="; 
} elseif ($smy==7) {
$oplogico= "like";
}elseif($smy == "#"){
$oplogico= "";    
}
$comple_log=$_POST['nikmij'];
 $abraaaaham="$comple_log"." ".$oplogico." "."";
echo "<input type='hidden' value='$comple_log' id='whereavg' name='whereavg'/>"."<br>";
echo "<input type='hidden' value='$abraaaaham' id='whereavg2' name='whereavg2'/>"."<br>";

die();
}  elseif(($_POST['w']-2)==10) {
//echo "<input type='text' id='wheree' name='wheree' placeholder='aaaaa' value=".$_POST['mm']." disabled> ";
echo$_POST['mm'];
die();
}elseif(($_POST['w']-13)==10){
//AQUI LLEGA VALOR INGRESADO X EL USUARIO AL MOMENTO DE HACER UN WHERE
    $jquavgozu=$_POST['Nrl'];
    $badnailes=$_POST['arc'];
    $complemento=$_POST['f'];
    
    
$bodytag1 = str_replace("checkbox%5B%5D=" ,"", $complemento);
$arrayzz = explode("&", $bodytag1);
unset($arrayzz[0]);
//print_r($arrayzz);    

    
             "".$badnailes;
           "".$jquavgozu;
    $superqueryterminadoconfiltro= $badnailes." '".$jquavgozu."'";
   // DIE();
   // echo
    $abraham = "select creador_datos.*  from ($superqueryterminadoconfiltro) as creador_datos";
    echo "<center>";
    ECHO "<h4>Query en ejecucion:</h4><br><textarea style='margin-left: 0px; margin-right: 0px; width: 778px;'>".$superqueryterminadoconfiltro;
    echo "</textarea>";
    echo "</center>";
    echo "<input type='hidden' id='excelbadavg' value='$badnailes'>";
    echo "<input type='hidden' id='excelbadavg2' value='$jquavgozu'>";
    
    
include 'include/conexion.php';
$superquery = $conector->query($abraham);
$val=0;
echo"<BR><BR><BR>";        
$row_cnt = mysqli_num_rows($superquery);
//printf("El resultado tiene %d filas.\n", $row_cnt);

if(empty($superquery)){
    echo "Query incompleto, en espera...";
    DIE();
}
if($row_cnt==0){
    echo "Query incompleto, en espera...";
    DIE();
}else{
echo "<div class='col-xs-12'><center>";
echo "<a onclick='excelxavg2()'><img src='http://rebrats.saude.gov.br/images/phocadownload/Instrumentos_complementares/excel.png' style='width: 5em;'><h1></h1></a>";
echo "</center></div>";
  
echo"<div id='jqles2' class='col-xs-12' style='overflow: scroll;'>
    <table id='jqle' border='3'>";
echo"<tr >"; 
foreach ($arrayzz as &$nombre_columnas){
    echo"<td>".$nombre_columnas."</td>";
}
echo"</tr>";
while ($vector = $superquery->fetch_assoc()) {
echo"<tr>"; 
foreach ($arrayzz as &$valor) {
    //1saas3saas</td></tr>
    echo "<td>".$vector[$valor]."</td>";
   
}
}
echo"</tr></table>";
}
DIE();
DIE();
}

?>
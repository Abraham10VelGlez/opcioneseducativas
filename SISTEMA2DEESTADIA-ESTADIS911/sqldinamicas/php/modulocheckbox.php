<?php        
//numero de tablas... selecccione la tabla
if(($_POST['rexcaracter']-5)==10){
include 'include/conexion.php';
//QUERY FUNCIONAL:: SELECT TABLE_NAME FROM `COLUMNS` WHERE TABLE_NAME LIKE '%ki9%' or  TABLE_NAME LIKE '%agenda_hector%'  GROUP BY TABLE_NAME
$sqltablas = $conector->query(" show tables");

//echo"XXXXXXX:".$pagina=$sqltablas->num_rows;
$num=1;
//echo'<script  src="js/key-query.js"></script> ';
ECHO "<CENTER>";
echo "<select id='selectables' name='selectables' onchange='valor(this.value)'><option value='10'>Selecciona tabla</option>";
while ($var = $sqltablas->fetch_assoc()) {
    //////////////////////PARTE A CAMBIAR EN CASO DE MODIFICACIONES DE BASE DE DATOS//////////////////////////////////
//echo "<option value=".$var['Tables_in_asistema2'].">".$var['Tables_in_asistema2']."</option>";//////////////////////PARTE A CAMBIAR EN CASO DE MODIFICACIONES DE BASE DE DATOS//////////////////////////////////
echo "<option value=".$var['Tables_in_base_datos_superior'].">".$var['Tables_in_base_datos_superior']."</option>";//////////////////////PARTE A CAMBIAR EN CASO DE MODIFICACIONES DE BASE DE DATOS//////////////////////////////////
//////////////////////PARTE A CAMBIAR EN CASO DE MODIFICACIONES DE BASE DE DATOS//////////////////////////////////
$num++;
}
echo '</select>';
ECHO "</CENTER>";
DIE();
}elseif (($_POST['frrk']-45)==10) {
    //echo "respuesta1";
    include 'include/conexion.php';
    $tabla=$_POST['rexcaracter'];    
//    
//}elseif (($_POST['rexcaracter']+8)==10) {
//    //echo "respuesta2";
//    include 'include/conexion.php';
//    $tabla = "ki9119";
//    
//    
//}elseif (($_POST['rexcaracter']+7)==10) {
//    //echo "respuesta3";
//    include 'include/conexion.php';
//    $tabla = "ki9119a";
//    
//}elseif (($_POST['rexcaracter']+6)==10) {
//    //echo "respuesta4";
//    include 'include/conexion.php';
//    $tabla = "ki9119b";
//    
//}elseif (($_POST['rexcaracter']+5)==10) {
//    echo "respuesta5---Agenda estadistica";
//}elseif (($_POST['rexcaracter']+5)!=1) {
//    echo "SELECCIONA UNA TABLA";DIE();
}elseif (($_POST['rexcaracter']+5)!=1) {
echo "SELECCIONA UNA TABLA";DIE();
}

$conector2 = new mysqli("localhost", "root", "", "information_schema");
$conector2->query("SET NAMES 'utf8'");
//$sqltablasvv = $conector2->query("SELECT SUBSTRING(COLUMN_NAME,1,10) as variab, COLUMN_NAME as abrahamvg FROM `COLUMNS` WHERE TABLE_SCHEMA ='asistema2' and TABLE_NAME ='$tabla'");    
$sqltablasvv = $conector2->query("SELECT SUBSTRING(COLUMN_NAME,1,10) as variab, COLUMN_NAME as abrahamvg FROM `COLUMNS` WHERE TABLE_SCHEMA ='base_datos_superior' and TABLE_NAME ='$tabla'");    
//while ($varr = $sqltablasvv->fetch_assoc()) {
//
//echo $varr['variab'];
//}


//$sqltotal = $conector->query(" describe $tabla;");
//echo"numero total de filas o campos:".$pagina=$sqltotal->num_rows;
echo "<form id='form1' method='post'>";
echo "<input  type='hidden' id='checkbox' name='checkbox[]' value='$tabla'/>";
//echo "<table border='3' align='center' id='tblDatos' style='font-size:12px;'>
/////echo "<table border='3'  style='font-size:12px;'>
//////      <tr>";
//GASTO_COLEGIATURA_LIC NI_ANTERIOR_POS
///SUBSTRING(trim(ki9119.NOMBREESC),1,30)
//<UL>
echo" 
<ol style='width: 100em;'>    
"; 
//////////////////////////////////////////ESTE CODIGO FUNCIONA SOLO ESTA SIENDO MODIFICADO/////////////////////////////////////////////////////////////////////////////////////
$conta=1;
//while ($var = $sqltotal->fetch_assoc()) {     
while ($var = $sqltablasvv->fetch_assoc()) {
    
//printf("El resultado tiene %d filas.\n", $var,"11111111");
echo"<li style='float: left;width: 10em;'>";
//float: left;width: 45%;

//echo " "."<input type='checkbox' value='".$var['Field']."' id='checkbox' name='checkbox[]' onClick='contar();'  />
//      ".$var['Field']." "."
//    ";
echo " "."<input type='checkbox' value='".$var['abrahamvg']."' id='checkbox' name='checkbox[]' onClick='contar();'  />
      ".$var['variab']." "."";
  }
echo "</ol>";
//</UL>
  //echo "</tr>";
//echo "</table>";
//echo "<input type='hidden' value=''/>";
echo "</form>";
DIE();

?>




<!--


echo "<form id='form1' method='post'>";
echo "<input  type='hidden' id='checkbox' name='checkbox[]' value='$tabla'/>";
//echo "<table border='1' align='center' id='tblDatos'>";
echo" <UL >"; $conta=1;
while ($var = $sqltotal->fetch_assoc()) {

echo"<li type='1'>";
//echo$jowel = "<input type='checkbox' value='".$var['Field']."' id='".$var['Field']."' name='".$var['Field']."' onClick='contar();' />".$var['Field'];
echo "<input type='checkbox' value='".$var['Field']."' id='checkbox' name='checkbox[]' onClick='contar();'  />".$var['Field']."";

//if($conta==9  && $conta++){
//  echo"<tr></tr>";  
//            
//            }
//            $conta++;
  }
echo "</UL>";
//echo "</table>";
//echo "<input type='hidden' value=''/>";
echo "</form>";-->
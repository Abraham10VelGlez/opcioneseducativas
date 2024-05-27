<?php
//
//if(($_POST['ddyk']-80)==10){
//}
if(($_POST['y']-24)==10){

    $concatenador=$_POST['abraham'];
    $campos_abuscar2=$_POST['conj'];
    $abraham = "select creador_datos.*  from (select ".$campos_abuscar2." where $concatenador ) as creador_datos";
    $kid="select ".$campos_abuscar2." where $concatenador";
    echo "<input type='hidden' value='$kid' id='whereavg' name='whereavg'/>"."<br>";
    "Query incompleto, en espera...";
    die();
}
$cx2=$_POST['mc2'];
//$m_m=$_POST['textavg'];
$bodytag1 = str_replace("checkbox%5B%5D=" ,"", $cx2);
$array = explode("&", $bodytag1);
//print_r($array);
function impar($varr)
{
// Retorna siempre que el valor del arreglo
include 'include/conexion.php';
$sqltablas = $conector->query(" show tables");
while ($var = $sqltablas->fetch_assoc()) {
//////////////////////PARTE A CAMBIAR EN CASO DE MODIFICACIONES DE BASE DE DATOS//////////////////////////////////
//$validad=$var['Tables_in_asistema2'];//////////////////////PARTE A CAMBIAR EN CASO DE MODIFICACIONES DE BASE DE DATOS//////////////////////////////////
$validad=$var['Tables_in_base_datos_superior'];//////////////////////PARTE A CAMBIAR EN CASO DE MODIFICACIONES DE BASE DE DATOS//////////////////////////////////
//////////////////////PARTE A CAMBIAR EN CASO DE MODIFICACIONES DE BASE DE DATOS//////////////////////////////////
if($varr==$validad){
return($validad);        
}
}   
}
//echo "Arrg :\n";
//print_r($wsn=array_filter($array, "impar"));
$wsn=array_filter($array, "impar");
foreach ($wsn as $ozuna){
$ozuna;
}
echo "<div id='varselec'>";
echo "<div class='col-xs-12'><center><h4>Variables Seleccionadas</h4></center></div>";
echo "<div id='checkboxselecto' class='col-xs-12' style=' overflow: scroll;'>";
echo "<form method='POST' id='checkkka' name='checkkka' >";
//echo"<h3>VARIABLES SELECCIONADAS</h3>";

foreach ($array as $haba){
    if($haba!=$ozuna){
        echo "<input  type='checkbox' value='".$haba."' id='checkboxvalidate' name='checkboxvalidate[]' onClick='selec(this.value)'/>".$haba."<br>";    
    }

}

echo "</form>";
echo "</div>"; 


//echo "<br><br>El número de elementos en el array es: " . $numarray = count($array);
//var_dump($array);
//print_r($array);

//print_r($array[0]);
//elimino el primer elemento del array y muestro el array
unset($array[0]);

$campos_abuscar=implode( ",", $array);
//print_r($arr2=$array);
$arr2=$array;
//echo
$abraham = "select creador_datos.*  from (select ".$campos_abuscar." from ".$ozuna." ) as creador_datos";
//echo "select ".$campos_abuscar." from ".$ozuna."";
echo "<input type='hidden' value='".$campos_abuscar." from ".$ozuna."' id='gabraham' name='gabraham'/>"."";
//echo "<input type='hidden' value='keyexcelavg' id='excelbadavg' name='excelbadavg'/>".
ECHO "<br>";
//echo "<BR><BR><BR><BR>"; 
include 'include/conexion.php';
$superquery = $conector->query($abraham);
$val=0;
if(empty($superquery)){
    echo "Query incompleto, en espera...";
    DIE();
}  else {
echo "<div class='col-xs-12'><center>";
//ECHO "<div class='col-xs-6'>";
echo "<a onclick='excelxavg()'><img src='http://rebrats.saude.gov.br/images/phocadownload/Instrumentos_complementares/excel.png' style='width: 5em;'><h1></h1></a>";
//echo "</div>";
//ECHO "<div class='col-xs-6'>";
//echo "<a onclick='resetwheretable()'><img src='http://rebrats.saude.gov.br/images/phocadownload/Instrumentos_complementares/excel.png' style='width: 5em;'><h1></h1></a>";
//echo "</div>";
//http://rebrats.saude.gov.br/images/phocadownload/Instrumentos_complementares/excel.png
//https://www.myresellerhome.com/images/RESETButton2.png
echo "</center></div>";
    
}
echo"<div id='jqles' class='col-xs-12' style='overflow: scroll;'>
    <table id='jqles2' border='3'>";

echo"<tr>"; 
foreach ($arr2 as &$nombre_columnas){
    echo"<td>".$nombre_columnas."</td>";
}
echo"</tr>"; 
while ($vector = $superquery->fetch_assoc()) {
echo"<tr>";        
foreach ($array as &$valor) {
    //1saas3saas</td></tr>
    echo "<td>".$vector[$valor]."</td>";
    
}
}
echo"</tr>
    </table>
    </div>
    </div>";

DIE();
?>

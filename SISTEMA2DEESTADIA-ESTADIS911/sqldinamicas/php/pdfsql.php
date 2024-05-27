<?php
$excelfileavg=$_POST['ex_valor'];

$checkexcel=$_POST['billboard'];
//
if($_POST['bunny']=='keyexcelavg'){
//codigo para solo una tabla de un query en general
    $fileenproceso="select ".$excelfileavg;
}  else {
    //codigo para solo una tabla de un query en con un where....
    $exxxcel=$_POST['bunny'];
    $exxxcel2=$_POST['bunny2'];
    //echo"------------------------------->".$exxxcel." '".$exxxcel2."' ";
    $fileenproceso=$exxxcel." '".$exxxcel2."' ";
    //$fileenproceso=$exxxcel.$exxxcel2;
}



//ECHO $excelfileavg=$_GET['ex_valor'];
//
//ECHO $checkexcel=$_GET['billboard'];
//
//if($_GET['bunny']=='keyexcelavg'){
////ECHO "codigo para solo una tabla de un query en general";
//    
// ECHO"AAA".
//         $fileenproceso="select ".$excelfileavg;
//    
//}  else {
//    //ECHO "codigo para solo una tabla de un query en con un where....";
//    $exxxcel=$_GET['bunny'];
//    $exxxcel2=$_GET['bunny2'];
//    //echo"------------------------------->".$exxxcel." '".$exxxcel2."' ";
//    //$fileenproceso=$exxxcel.$exxxcel2;
//   ECHO $fileenproceso=$exxxcel." '".$exxxcel2."' ";
//}



include 'include/conexion.php';
 $checkexcel;


$bodytag1 = str_replace("checkbox%5B%5D=" ,"", $checkexcel);
$array = explode("&", $bodytag1);
unset($array[0]);

//print_r($array);

//echo
$campos_abuscar=implode( ",", $array);


$excavg=$conector->query($fileenproceso);
//print_r($excavg);
$val=0;
echo"
<table border='3'>";

foreach ($array as &$nombre_columnas){
    echo"<td>".$nombre_columnas."</td>";
}
while ($vector=$excavg->fetch_assoc()) {
echo"<tr>";        
foreach ($array as &$valor) {
    echo "<td>".$vector[$valor];echo"</td>";
    
}
}
echo"</tr>";
echo"</table>";
?>
<?php
die();
?>

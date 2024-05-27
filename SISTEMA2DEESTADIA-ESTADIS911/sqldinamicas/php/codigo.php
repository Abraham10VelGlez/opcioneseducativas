<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        /////////////////////////////////////////////////////////////////////////////////////////
        //OPERADORES LOGICOS PAREA DETERMINAR LOS CASOS DE WHERE/////////////////////////////////
        /////////////////////////////////////////////////////////////////////////////////////////
//        if($oplogk=="="){
//            
//        }elseif ($oplogk=="<") {
//            
//        }elseif ($oplogk==">") {
//            
//        }elseif ($oplogk==">=") {
//            
//        }elseif ($oplogk=="<=") {
//            
//        }elseif ($oplogk=="like") {
//            
//        }
//        
        
        
        
        /////////////////////////////////////////////////////////////////////////////////////////
        
        
        
        echo"<input type='text' id='capturador' name='capturador'  />";
        
        
        
//numero de tablas... selecccione la tabla                     
        $tabla1 = "ki9119";
        $tabla2 = "ki9119a";
        $tabla3 = "ki9119b";
        $tabla4 = "ki91110";

        //seleccione el numeor de variables que ahy en la tabla...
        $conector = new mysqli("localhost", "root", "", "base_datos_superior");
        $conector->query("SET NAMES 'utf8'");

        $sqltotal = $conector->query(" describe ki9119;");
        echo"numero total de filas o campos:".$pagina=$sqltotal->num_rows;
   
echo" <UL >";
        while ($var = $sqltotal->fetch_assoc()) {
            //echo "<br>".$var['Field']."<br>";
            if($var['Field']<=9){
      echo"<li type='1'>";
      echo $jowel = "<input type='checkbox' value='".$var['Field']."' id='".$var['Field']."' name='".$var['Field']."' />".$var['Field'];
                
            }
        }
echo "</UL>";
    //estas son para ki9119
        $posibilidades = "CLAVEINSTI" . " DIRECTOR CORREO S585I S204M";
        //estas son para ki9119a$posibilidades = "CLAVEINSTI" . " CARRERA ESTATUS CONTROL NIVMOD";
        
        
//                     $cadena = explode(" ", $posibilidades);
        echo "<BR><BR><BR><BR>RESULTADOS<BR><BR><BR><BR>";
        $array = explode(" ", $posibilidades);
        echo "<br><br>El número de elementos en el array es: " . $numarray = count($array);
        echo "<BR><BR><BR><BR>";
        var_dump($array);
        echo "<BR><BR><BR><BR>";

        $campos_abuscar=implode( ",", $array );
        echo"<br>";
        //select creador_datos.*  from (SELECT CLAVECCT,NOMBREESC from ki9119) as creador_datos
        echo $abraham = "select creador_datos.*  from (select ".$campos_abuscar." from ki9119 ) as creador_datos";
        echo "<BR><BR><BR><BR>"; 
        
        
      $superquery = $conector->query($abraham);

$val=0;
echo"<table border='3'><tr>";
while ($vector = $superquery->fetch_assoc()) {
echo"<tr></tr>";        
foreach ($array as &$valor) {
    //1saas3saas</td></tr>
    echo "<td>".$vector[$valor];
    
    if($val!=1){
        echo""."</td>";
        //$val--;
    }


}
$val++;
}
echo"<td></table>";
        echo "<BR><BR><BR><BR>";
        echo"----------------  < > <> = <= >= like        SOLO SERA UN CAMPO SELECCIONADO Y UN OPERADOR LOGICO           ------------------------------------------+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++";
        echo "<BR><BR>";
       echo $campos_abuscar;echo "<BR><BR>";
        $posibilidades_logicas = "> like <>";
echo "<BR><BR>";
        $array_where_selected = explode(",", $campos_abuscar);
        var_dump($array_where_selected);
        echo "<BR><BR>";
$array2 = explode(" ", $posibilidades_logicas);
print_r($array2);
echo "<br><br>El número de elementos en el array es: " . $numarray2 = count($array2);
//echo "<BR>";
$d="where ";
//echo "TODOS LOS OPERADORES:".$operadorezz=implode(" ", $array2 );
        
     echo "<BR>";
     $va="DEPNORMTVA";
     //$operadorezz="< > <> = <= >= like";
    $operadorezz="like";
//   
//   $av=$array2;
//   echo $av[0];echo $av[1];echo $av[2];
//     
//    $aa=0;
//   foreach ($array2 as $av[$aa]){
//      echo "operadores:".$av[$aa]."<br><br>";
//       $aa++;
//   }
//     $va=0;
//foreach ($array as $va) {
////echo $d.$va." ".$operadorezz."<br>";
//}   
   
   if($operadorezz=='like'){$aaa="=";}
   echo $d.$va." ".$aaa." ","<br>";                      
     
     
        die();
        $conector2 = new mysqli("localhost", "root", "", "information_schema");
        //$conector2->query("SET NAMES 'utf8'");

        $contador = $conector2->query("SELECT `TABLE_NAME`, COUNT(*) as filas FROM `COLUMNS` WHERE `TABLE_NAME`='$tabla1'");

        while ($vector2 = $contador->fetch_assoc()) {
            echo "<br>" . $vector2['filas'] . "<br>";
        }


        die();
        
        ?>
    </body>
</html>

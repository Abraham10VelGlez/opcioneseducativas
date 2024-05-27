<?php        
//numero de tablas... selecccione la tabla
include 'include/conexion.php';
//QUERY FUNCIONAL:: SELECT TABLE_NAME FROM `COLUMNS` WHERE TABLE_NAME LIKE '%ki9%' or  TABLE_NAME LIKE '%agenda_hector%'  GROUP BY TABLE_NAME
$sqltablas = $conector->query(" show tables");
$tabla="denominacion";
$sqltotal = $conector->query(" describe $tabla;");
//echo"numero total de filas o campos:".$pagina=$sqltotal->num_rows;
echo "<form id='form1' method='post'>";
echo "<input  type='hidden' id='checkbox' name='checkbox[]' value='$tabla'/>";
echo "<table border='1' align='center' id='tblDatos' style='font-size:12px;'><tr>";
//echo" <UL >"; 


$row_cnt = mysqli_num_rows($sqltotal);
printf("El resultado tiene %d filas.\n", $row_cnt);




//SELECT COUNT(COLUMN_NAME) FROM `COLUMNS` WHERE TABLE_SCHEMA ="asistema2" and  TABLE_NAME = 'ki9119'
//https://www.youtube.com/watch?v=mAoh-XVDNUA
//
//
$paginaActual =1; // $_POST['partida'];
$nroLotes = 10;
    $nroPaginas = ceil($row_cnt/$nroLotes);
    $lista = '';
    $tabla = '';
echo "<ul>";
    if($paginaActual > 1){
        $lista = $lista.'<li><a href="javascript:pagination('.($paginaActual-1).');">Anterior</a></li>';
    }
    for($i=1; $i<=$nroPaginas; $i++){
        if($i == $paginaActual){
            $lista = $lista.'<li class="active"><a href="javascript:pagination('.$i.');">'.$i.'</a></li>';
        }else{
            $lista = $lista.'<li><a href="javascript:pagination('.$i.');">'.$i.'</a></li>';
        }
    }
    if($paginaActual < $nroPaginas){
        $lista = $lista.'<li><a href="javascript:pagination('.($paginaActual+1).');">Siguiente</a></li>';
    }
echo "</ul>";  
  	if($paginaActual <= 1){
  		$limit = 0;
  	}else{
  		$limit = $row_cnt*($paginaActual-1);
  	}

        
$conector2 = new mysqli("localhost", "root", "", "information_schema");//////////////////////PARTE A CAMBIAR EN CASO DE MODIFICACIONES DE BASE DE DATOS//////////////////////////////////
//////////////////////PARTE A CAMBIAR EN CASO DE MODIFICACIONES DE BASE DE DATOS//////////////////////////////////
$conector2->query("SET NAMES 'utf8'");
    
        
//$registro = mysql_query("SELECT * FROM productos LIMIT $limit, $nroLotes ");
$registro = 
$conector2->query(
"SELECT COLUMN_NAME FROM `COLUMNS` WHERE TABLE_SCHEMA ='asistema2' and  TABLE_NAME = '$tabla' LIMIT $limit, $nroLotes");

$tabla = $tabla.'<table >';				
while($registro2 =$registro->fetch_assoc()/* mysql_fetch_array($registro)*/){
$tabla = $tabla.'<tr>
<td>'.$registro2['COLUMN_NAME'].'</td>
</tr>';		
	}
        

    $tabla = $tabla.'</table>';



    $array = array(0 => $tabla,
    			   1 => $lista);

    echo json_encode($array);




DIE();
//////////////////////////////////////////ESTE CODIGO FUNCIONA SOLO ESTA SIENDO MODIFICADO/////////////////////////////////////////////////////////////////////////////////////
$conta=1;
while ($var = $sqltotal->fetch_assoc()) {
//printf("El resultado tiene %d filas.\n", $var,"11111111");
//echo"<li type='1'>";
//echo$jowel = "<input type='checkbox' value='".$var['Field']."' id='".$var['Field']."' name='".$var['Field']."' onClick='contar();' />".$var['Field'];
    echo '<p>';
echo "<input type='checkbox' value='".$var['Field']."' id='checkbox' name='checkbox[]' onClick='contar();'  />".$var['Field']."";
echo '</p>';
//if($conta==1){
//  echo"<tr></tr>";  
//           $conta++; 
//            }
//            $conta+1;
  }
//echo "</UL>";
echo "</table>";
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
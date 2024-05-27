<?php

include '../include/conex.php';
$nvalor1 =  htmlentities($_POST['parametro']);
$variableestable1 = mysqli_real_escape_string($conector,$nvalor1);
//echo json_encode($variableestable1);
//echo$variableestable1;
$key='';
$resultadocifrado = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $variableestable1, MCRYPT_MODE_CBC, md5(md5($key))));
echo "<input id='password8' type='hidden' value='".$resultadocifrado."' />";
?>
<html>
    <head><script language="javascript" src="js/jquery-edu-e.js"></script></head>
    <div class="row-fluid">
                            <div class="span9">&nbsp;</div>
                            <div class="span2">
                            
                            <a class="btn btn-success" id="evaluar8"><i class="fa fa-print">Descargar excel</i></a>
                            </div>
                        </div>                          
                    
    <div class="table-container-edu">
                                <!--Aqui van los comandos para desarrollo-->
                                
                                <?php
                                 
    //echo "SI 2 ESTA VACIO EJECUTA TRES";                                      //SOLO SIRVE PARA AMBAS DENOMINACIONES PARTICU.... Y OFICIAL
    //echo "soy uno";
    //select distinct  ki9119.CLAVEINSTI,ki9119.NOMINSTI,ki9119.CLAVECCT,ki9119.NOMBREESC, ki9119.DOMICILIO, ki9119.NOMBRELOC,  ki9119.NOMBREMUN, ki9119.TELEFONO, ki9119.FAX, ki9119.DIRECTOR, ki9119.CONTROL, ki9119.TIPO, ki9119.CORREO from ki9119 where CLAVECCT='15USU3956N' ORDER BY ki9119.NOMBREESC
    $result = $conector->query("select distinct
        ki9119.CLAVEINSTI,ki9119.NOMINSTI,ki9119.CLAVECCT,
        ki9119.NOMBREESC, ki9119.DOMICILIO, ki9119.NOMBRELOC,
        ki9119.NOMBREMUN, ki9119.TELEFONO,
        ki9119.FAX, ki9119.DIRECTOR, ki9119.CONTROL, ki9119.TIPO, trim(ki9119.CORREO),ki9119.S2, ki9119.PAGINA_WEB
        from ki9119 where CLAVECCT='$variableestable1' ORDER BY ki9119.NOMBREESC" );
$r=mysqli_num_rows($result);
    if($r==0){
        echo'<table >';
        echo'<tr class="even">';echo'<td class="danger">NO CUENTA CON DATOS DE REFERENCIA...</td>';echo'</tr>';
echo '</table>';
}else{    
echo '<table>
    <tr class="even">
    <td class="warning">CLAVE</td>
    <td class="warning">INSTITUCION</td>
    <td class="warning">CCT</td>
    <td class="warning">ESCUELA</td>
    <td class="warning">DOMICILIO</td>
    <td class="warning">LOCALIDAD</td>
    <td class="warning">MUNICIPIO</td>
    <td class="warning">TELEFONO</td>
    <td class="warning">DIRECTOR</td>
    <td class="warning">CONTROL</td>
    <td class="warning">TIPO</td>
    <td class="warning">CORREO</td>
    <td class="warning">RVOE</td>
    <td class="warning">REDES SOCIALES<p style="    color: rgb(247, 247, 247);
    margin-bottom: 0px;
    height: 0px;
    text-align: end;">___________________</p></td>
  </tr>';
}
    while ($row = $result->fetch_assoc()) {
        if($row['S2']==0){
            $rvoevacio="N/A";
        }else {
            $rvoevacio=$row['S2'];
        }
        //echo $avg1= substr($row['NOMBRELOC'],0,-1);
        $user = strstr($row['NOMBRELOC'], ' ', true); // Desde PHP 5.3.0
        if(empty($user)){ $user="PENDIENTE";}  else {
$user=    $row['NOMBRELOC'];
} // mostrará SOLO LA PALABRAS HASTA DONDE HAYA UN ESPACIO...
        //
        $correoo = strstr($row['trim(ki9119.CORREO)'], ' ', true); // Desde PHP 5.3.0
        if(empty($correoo)){ $correoo="SIN CORREO";}  else {
  $correoo=  $row['trim(ki9119.CORREO)'];
} // mostrará SOLO LA PALABRAS HASTA DONDE HAYA UN ESPACIO...
       
        $pweb = strstr($row['PAGINA_WEB'], ' ', true); // Desde PHP 5.3.0
        if(empty($pweb)){ $pweb="NO HAY PÁGINA REGISTRADA";}  else {
$pweb=    $row['PAGINA_WEB'];
} // mostrará SOLO LA PALABRAS HASTA DONDE HAYA UN ESPACIO...
       
        $domicilioo =strstr($row['DOMICILIO'], ' ', true); // Desde PHP 5.3.0
        if(empty($domicilioo)){ $domicilioo="PENDIENTE";}  else {
$domicilioo=$row['DOMICILIO'];    
} // mostrará SOLO LA PALABRAS HASTA DONDE HAYA UN ESPACIO...
       
        
echo'<tr class="even">
    <td class="success">'.$row['CLAVEINSTI'].'</td>
    <td class="success">'.$row['NOMINSTI'].'</td>
    <td class="success">'.$row['CLAVECCT'].'</td>
    <td class="success">'.$row['NOMBREESC'].'</td>
    <td class="success">'.$domicilioo.'</td>
    <td class="success">'.$user.'</td>
    <td class="success">'.$row['NOMBREMUN'].'</td>
    <td class="success">'.$row['TELEFONO'].'</td>
    <td class="success">'.$row['DIRECTOR'].'</td>
    <td class="success">'.$row['CONTROL'].'</td>
    <td class="success">'.$row['TIPO'].'</td>
    <td class="success">'.$correoo.'</td>
        <td class="success">'.$rvoevacio.'</td>
    <td class="success">'.$pweb.'</td>
  </tr>
  


</table>';
}


$sqlposgrado=$conector->query("select distinct
    ki9119b.CLAVEINSTI, ki9119b.CLAVECCT,
    ki9119b.NOMBREESC, ki9119b.NOMBRECAR
    from ki9119b where ki9119b.CLAVECCT='$variableestable1';");
// select distinct ki9119a.CLAVEINSTI, ki9119a.CLAVECCT, ki9119a.NOMBREESC, ki9119a.NOMBRECAR from ki9119a where ki9119a.CLAVECCT='15EUT0101W';
// 
$sqlposgrado2dea=$conector->query(" select distinct ki9119a.CLAVEINSTI, ki9119a.CLAVECCT, ki9119a.NOMBREESC, ki9119a.NOMBRECAR from ki9119a where ki9119a.CLAVECCT='$variableestable1';");

$k=mysqli_num_rows($sqlposgrado);
$erk=  mysqli_num_rows($sqlposgrado2dea);

if($erk==0 && $k==0){
    //ERROR
    echo'<table  id="detalles-avg" border="8" class="table table-bordered table-hover ">';
        echo'<tr>';echo'<td class="danger">No cuenta con Maestrias  ni Doctorados disponibles</td>';echo'</tr>';
echo '</table>';
}  else {
    echo '<table  id="detalles-avg" border="8" class="table table-bordered table-hover ">
    <tr>
    ';//echo'<td class="active">NOMBREESC</td>';
echo '
    <td class="warning"><center>CARRERAS</center></td>
  </tr>';

while ($aaa=$sqlposgrado2dea->fetch_assoc()){
    echo'<tr>
    ';//echo'<td class="active">'.$a['NOMBREESC'].'NOMBREESC</td>';
    echo'<td class="success">'.$aaa['NOMBRECAR'].'</td>
  </tr>';
    
}
while ($a=$sqlposgrado->fetch_assoc()){
    echo'<tr>
    ';//echo'<td class="active">'.$a['NOMBREESC'].'NOMBREESC</td>';
    echo'<td class="success">'.$a['NOMBRECAR'].'</td>
  </tr>';
}
echo '</table>';
}
                                ?>
          

                            </div>
</html>
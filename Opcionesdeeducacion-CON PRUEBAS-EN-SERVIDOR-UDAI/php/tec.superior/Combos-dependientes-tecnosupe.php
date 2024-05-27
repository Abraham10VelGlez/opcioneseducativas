<?php
include '../include/conex.php';
$jo=$_GET['tec'];

echo "<input id='password2' type='hidden' value='".$jo."' />";
$magi=str_replace(" ", "+", $jo);
$key='';
$filtrodeseguro = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($magi), MCRYPT_MODE_CBC,  md5(md5($key))),"\0");
$valor =  htmlentities($filtrodeseguro);
$MA = mysqli_real_escape_string($conector,$valor);
///die();
?>
<?php $nom=$conector->query("SELECT trim(ki9119a.NOMBRECAR) FROM ki9119a where CARRERA='$MA';");
$mttn=mysqli_num_rows($nom);
            if($mttn==0){  //AQ PUEDE IR UN ERROR
echo"<script>function redireccionar(){window.location='../../errorfatal.html';}
setTimeout ('redireccionar()', 1);</script>";die();
            }
while ($row1 = $nom->fetch_assoc()) {$ee=$row1['trim(ki9119a.NOMBRECAR)'];}?>
<!DOCTYPE HTML>
<html>
<head>
        <title>SEP-OPEDS</title>
<meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<script language="javascript" src="js/jquery-edu-e.js"></script>

</head>
<body id="container">

         <!--Codigo-avg-->
                
        <!--Codigo-avg-->
        <div class="row-fluid">
        <div class="span9">
            &nbsp;
        </div>
        <div class="span2">
            <a class="btn btn-success" id="evaluar"><i class="fa fa-print">Descargar excel</i></a>
        </div>
                            </div>

                            <div class="table-container-edu">
                                
                           
        
        
<?php
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
    
    $result = $conector->query("select
        ki9119a.CLAVEINSTI, Ki9119a.NOMINSTI,
        ki9119a.CLAVECCT, ki9119a.NOMBREESC,
        ki9119a.CARRERA, ki9119a.NOMBRECAR,
        ki9119a.DOMICILIO, ki9119a.COLONIA,
        ki9119a.TELEFONO, ki9119a.FAX, trim(ki9119a.CORREO),ki9119a.TIPO,ki9119a.PAGINA_WEB,ki9119a.S2,
        ki9119a.NOMBREMUN, ki9119a.NOMBRELOC,ki9119a.CONTROL,ki91110.NOMDIREC
        from ki9119a inner join ki91110 on ki9119a.CLAVEINSTI=ki91110.claveinsti WHERE ki9119a.CARRERA='$MA';" );
  //echo '<table border="3" id="detalles-avg" class="table table-condensed">';SELECT ki9119a.CLAVEINSTI, Ki9119a.NOMINSTI, ki9119a.CLAVECCT, ki9119a.NOMBREESC, ki9119a.CARRERA, ki9119a.NOMBRECAR, ki9119a.DOMICILIO, ki9119a.COLONIA, ki9119a.TELEFONO, ki9119a.FAX, ki9119a.CORREO, ki9119a.TIPO, ki9119a.NOMBREMUN, ki9119a.NOMBRELOC, ki9119a.CONTROL
//FROM ki9119a
//WHERE ki9119a.CARRERA =  '421300010'
//LIMIT 0 , 3
    while ($row = $result->fetch_assoc()) {    
        if($row['S2']==0){
            $rvoevacio="N/A";
        }  else {
            $rvoevacio=$row['S2'];
        }
        //echo $avg1= substr($row['NOMBRELOC'],0,-1);
        $user = strstr($row['NOMBRELOC'], ' ', true); // Desde PHP 5.3.0
        if(empty($user)){ $user="PENDIENTE";}  else {
$user=    $row['NOMBRELOC'];
} // mostrará SOLO LA PALABRAS HASTA DONDE HAYA UN ESPACIO...
        //
        $correoo = strstr($row['trim(ki9119a.CORREO)'], ' ', true); // Desde PHP 5.3.0
        if(empty($correoo)){ $correoo="SIN CORREO";}  else {
  $correoo=  $row['trim(ki9119a.CORREO)'];
} // mostrará SOLO LA PALABRAS HASTA DONDE HAYA UN ESPACIO...
       
        $pweb = strstr($row['PAGINA_WEB'], ' ', true); // Desde PHP 5.3.0
        if(empty($pweb)){ $pweb="NO HAY PÁGINA REGISTRADA";}  else {
$pweb=    $row['PAGINA_WEB'];
} // mostrará SOLO LA PALABRAS HASTA DONDE HAYA UN ESPACIO...
       
        $domicilioo =strstr($row['DOMICILIO'], ' ', true); // Desde PHP 5.3.0
        if(empty($domicilioo)){ $domicilioo="PENDIENTE";}  else {
$domicilioo=$row['DOMICILIO'];    
} // mostrará SOLO LA PALABRAS HASTA DONDE HAYA UN ESPACIO...
       
    echo '<tr  class="even">
    <td class="success">'.$row['CLAVEINSTI'].'</td>
    <td class="success">'.$row['NOMINSTI'].'</td>
    <td class="success">'.$row['CLAVECCT'].'</td>
    <td class="success">'.$row['NOMBREESC'].'</td>
    <td class="success">'.$domicilioo.'</td>
    <td class="success">'.$user.'</td>
    <td class="success">'.$row['NOMBREMUN'].'</td>
    <td class="success">'.$row['TELEFONO'].'</td>
    <td class="success">'.$row['NOMDIREC'].'</td>
    <td class="success">'.$row['CONTROL'].'</td>
    <td class="success">'.$row['TIPO'].'</td>
    <td class="success">'.$correoo.'</td>
        <td class="success">'.$rvoevacio.'</td>
    <td class="success">'.$pweb.'</td>
  </tr>';
    }
//echo $html;
    
echo '</table>';    


?> 
           
                                 </div>
                       


</body>
</html>
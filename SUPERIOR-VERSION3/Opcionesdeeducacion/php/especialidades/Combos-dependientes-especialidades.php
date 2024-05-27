<?php

include '../include/conex.php';
$especialidades=$_GET['iaDES2'];
echo "<input id='password4' type='hidden' value='".$especialidades."' />";
$magi=str_replace(" ", "+", $especialidades);
$key='';
$filtrodeseguro = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($magi), MCRYPT_MODE_CBC,  md5(md5($key))),"\0");
$valor =  htmlentities($filtrodeseguro);
$MA = mysqli_real_escape_string($conector,$valor);
//die();
    ?>
<?php $nom=$conector->query("SELECT ki9119b.NOMBRECAR FROM ki9119b where ki9119b.CARRERA LIKE '6%' and ki9119b.CARRERA='$MA';");
     $kikid=mysqli_num_rows($nom);
            if($kikid==0){  //AQ PUEDE IR UN ERROR
echo"<script>function redireccionar(){window.location='../../errorfatal.html';}
setTimeout ('redireccionar()', 1);</script>";die();
            }
while ($row1 = $nom->fetch_assoc()) {$ee=$row1['NOMBRECAR'];}?>
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

                        <div class="row-fluid">
                            <div class="span9">&nbsp;</div>
                            <div class="span2">
                            
                            <a class="btn btn-success" id="evaluar4"><i class="fa fa-print">Descargar excel</i></a>
                            </div>
                        </div>                          
                    
                        
                            <div class="table-container-edu" >

<?php
include '../include/conex.php';

echo '<table>';    
echo '<tr class="even">
    <td class="warning">CVEINST</td>
    <td class="warning">INSTITUCION</td>
    <td class="warning">CVECCT</td>
    <td class="warning">ESCUELA</td>
    <td class="warning">DOMICILIO</td>
    <td class="warning">LOCALIDAD</td>
    <td class="warning">MUNICIPIO</td>
    <td class="warning">TELEFONO</td>
    <td class="warning">FAX</td>
    <td class="warning">DIRECTOR</td>
    <td class="warning">CONTROL</td>
    <td class="warning">TIPO</td>
    <td class="warning">CORREO</td>
    <td class="warning">RVOE</td>
    <td class="warning">REDES SOCIALES</td>
  </tr>';

    
    $result = $conector->query("select
        ki9119b.CLAVEINSTI, Ki9119b.NOMINSTI,	
        ki9119b.CLAVECCT, ki9119b.NOMBREESC,
        ki9119b.CARRERA, ki9119b.NOMBRECAR,
        ki9119b.DOMICILIO, ki9119b.COLONIA,
        ki9119b.TELEFONO,  trim(ki9119b.CORREO),ki9119b.TIPO,ki9119b.PAGINA_WEB,ki9119b.S2,
        ki9119b.NOMBREMUN, ki9119b.NOMBRELOC,ki9119b.CONTROL,ki91110.NOMDIREC,ki91110.FAX
        from ki9119b inner join ki91110 on ki9119b.CLAVEINSTI=ki91110.claveinsti WHERE ki9119b.CARRERA='$MA';" );
  //echo '<table border="3" id="detalles-avg" class="table table-condensed">';SELECT ki9119a.CLAVEINSTI, Ki9119a.NOMINSTI, ki9119a.CLAVECCT, ki9119a.NOMBREESC, ki9119a.CARRERA, ki9119a.NOMBRECAR, ki9119a.DOMICILIO, ki9119a.COLONIA, ki9119a.TELEFONO, ki9119a.FAX, ki9119a.CORREO, ki9119a.TIPO, ki9119a.NOMBREMUN, ki9119a.NOMBRELOC, ki9119a.CONTROL
//FROM ki9119a
//WHERE ki9119a.CARRERA =  '421300010'
//LIMIT 0 , 3
    while ($row = $result->fetch_assoc()) {    
    echo '<tr class="even">
    <td class="success">'.$row['CLAVEINSTI'].'</td>
    <td class="success">'.$row['NOMINSTI'].'</td>
    <td class="success">'.$row['CLAVECCT'].'</td>
    <td class="success">'.$row['NOMBREESC'].'</td>
    <td class="success">'.$row['DOMICILIO'].'</td>
    <td class="success">'.$row['NOMBRELOC'].'</td>
    <td class="success">'.$row['NOMBREMUN'].'</td>
    <td class="success">'.$row['TELEFONO'].'</td>
    <td class="success">'.$row['FAX'].'</td>
    <td class="success">'.$row['NOMDIREC'].'</td>
    <td class="success">'.$row['CONTROL'].'</td>
    <td class="success">'.$row['TIPO'].'</td>
    <td class="success">'.$row['trim(ki9119b.CORREO)'].'</td>
        <td class="success">'.$row['S2'].'</td>
    <td class="success">'.$row['PAGINA_WEB'].'</td>
  </tr>';
    }
//echo $html;
    
echo '</table>';    


?>                                  </div>
                        

</body>
</html>   
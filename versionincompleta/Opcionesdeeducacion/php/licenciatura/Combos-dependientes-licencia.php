<?php
include '../include/conex.php';
 $licenciatura=$_GET['liknkiado'];
 echo "<input id='password' type='hidden' value='".$licenciatura."' />";
$magi=str_replace(" ", "+", $licenciatura);
$key='';
 $filtrodeseguro = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($magi), MCRYPT_MODE_CBC,  md5(md5($key))),"\0");
$valor =  htmlentities($filtrodeseguro);
$id_category = mysqli_real_escape_string($conector,$valor);
//die();
    ?>
<?php $nom=$conector->query("SELECT ki9119a.NOMBRECAR FROM ki9119a where ki9119a.CARRERA LIKE '5%' AND ki9119a.CARRERA='$id_category';");
$kikid=mysqli_num_rows($nom);
            if($kikid==0){  //AQ PUEDE IR UN ERROR
echo"<script>function redireccionar(){window.location='../../errorfatal.html';}
setTimeout ('redireccionar()', 1);</script>";die();
            }
            while ($row1 = $nom->fetch_assoc()) {$ee=$row1['NOMBRECAR'];}
            ?>
            
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
                        <div class="span9">
                            
                        </div>
                            <div class="span2">
                            <a class="btn btn-success" id="evaluar3"><i class="fa fa-print">Descargar excel</i></a>
                        </div>
                            
                            
                        </div>                          
                    
                                                  
                    

             
                            <div class="table-container-edu">
        
        
        
<?php
include '../include/conex.php';

echo '<table >';    
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

    $MA=$id_category;
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
    <td class="success">'.$row['trim(ki9119a.CORREO)'].'</td>
    <td class="success">'.$row['S2'].'</td>
        <td class="success">'.$row['PAGINA_WEB'].'</td>
  </tr>';
    }
//echo $html;
    
echo '</table>';    


?> 
     </div>
 
</body>
</html>    
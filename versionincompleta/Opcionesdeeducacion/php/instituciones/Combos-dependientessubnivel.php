
                  
<?php
if(empty($_GET['tres']) && empty($_POST['cuatro'])){
    ?>
<html>
    <head>
        <meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
        

        <script>
            $(document).ready(function(){
               // alert("soy una funcion");
$("#ciones").change(function () {
   		$("#ciones option:selected").each(function () {
                        valorador();             
			institucion = $(this).val();//alert(tres);
                        //var r='1';
                        
                        //$.post("php/Combos-dependientessubnivel.php", { dos: dos }, function(data){
//			$.post("php/instituciones/Combos-dependientessubnivel.php", { tres: tres }, function(data){
//				$("#detallle").html(data);
//			});
if(institucion=="#" || institucion==" " || institucion==""){
   // alert("Selecciona una opcion");
    //$("#detallle").html('');
    $("#detallle").html('<MARQUEE WIDTH=20% HEIGHT=40 ALIGN=BOTTOM style="color:#FF0000;">Selecciona un Carrera, para Continuar</MARQUEE>').show().fadeOut(9000);
}else{
    encriptar(institucion); 
                     //javascript:window.open("php/instituciones/Combos-dependientessubnivel.php?tres="+institucion);
}                  
                        return false;
        });
        return false;
   });


});
        </script>
        <script language="javascript" src="js/jquery-edu-scrp.js"></script>
    </head>
<?php
   // echo "SI 3 ESTA VACIO EJECUTA AL VALOR 2";                                //SOLO SIRVE PARA OFICIAL
    //$id_category2 = $_POST['dos'];
    include '../include/conex.php';
    $valor =  htmlentities($_POST['dos']);
$nuevavariab = mysqli_real_escape_string($conector,$valor);

    //echo "soy uno";
    $varuno="OFICIAL";
    //select distinct ki9119.CLAVEINSTI,ki9119.CLAVECCT,ki9119.NOMBREESC from ki9119 where ki9119.CLAVEINSTI='15MSU0857K';;
    $result = $conector->query("select distinct ki9119.CLAVEINSTI,ki9119.CLAVECCT,ki9119.NOMBREESC from ki9119 where ki9119.CLAVEINSTI='$nuevavariab' AND TIPO =  '$varuno' ORDER BY ki9119.NOMBREESC" );
    $velaz=mysqli_num_rows($result);
            if($velaz==0){  //AQ PUEDE IR UN ERROR
die();
            }
    echo "Escuelas:<br><select id='ciones' name='ciones' class='span6'><option value='#'>Seleccione</option>";
    while ($row = $result->fetch_assoc()) {
    echo $html = '<option value="'.$row['CLAVECCT'].'">'.$row['NOMBREESC'].'</option>';
    }
//echo $html;
echo "</select>";
die();
}
if (empty($_POST['dos']) && empty($_POST['cuatro'])){
include '../include/conex.php';    
$aa=$a=$_GET['tres'];
//echo '<br>';echo '<br>';
echo "<input id='password' type='hidden' value='".$aa."' />";
$magi=str_replace(" ", "+", $aa);
//descencriptar
//echo '<br>';echo '<br>';
//$AAA="USjcNkDE40KeDi+YdmQxKGr8qN8Cj5rSyhXcH3Kbhd8=";
      //USjcNkDE40KeDi YdmQxKGr8qN8Cj5rSyhXcH3Kbhd8=
//echo '<br>resultadofinal';echo '<br>';
$key='';
 $filtrodeseguro = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($magi), MCRYPT_MODE_CBC,  md5(md5($key))),"\0");


$valor =  htmlentities($filtrodeseguro);
$DET = mysqli_real_escape_string($conector,$valor);


//die();
//AQUI VIENE EL NUEVO CODIGO DE LA PAGINA A REGRESAR
?>
    
            <?php include '../include/conex.php';
            $nom=$conector->query("select distinct ki9119.NOMBREESC from ki9119 where ki9119.CLAVECCT='$DET'");
            $kikid=mysqli_num_rows($nom);
            if($kikid==0){  //AQ PUEDE IR UN ERROR
echo"<script>function redireccionar(){window.location='../../errorfatal.html';}
setTimeout ('redireccionar()', 1);</script>";die();
            }
            while ($row1 = $nom->fetch_assoc()) {$ee=$row1['NOMBREESC'];}?>
                                <html>
                                    <head>
                                        
        <title>SEP-OPEDS</title>
        <meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<script language="javascript" src="js/jquery-edu-e.js"></script>
<!--<link rel="stylesheet" href="assets/css/bootstrap.css" />
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />-->
<!--<link href="assets/css/stylemycss.css" rel="stylesheet">-->
                                    </head>
                                    
                                    <body>
                                    <br>
                                     
 
         <!--Codigo-avg-->
         <div class="row-fluid">
         <div class="span9">
             
                
        <!--Codigo-avg-->   
         </div>
             <div class="span2">
                 
                            <a class="btn btn-success" id="evaluar2"><i class="fa fa-print">Descargar Excel</i></a>
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
        from ki9119 where CLAVECCT='$DET' ORDER BY ki9119.NOMBREESC" );
$r=mysqli_num_rows($result);
    if($r==0){
        echo'<table >';
        echo'<tr class="even">';echo'<td class="danger">NO CUENTA CON DATOS DE REFERENCIA...</td>';echo'</tr>';
echo '</table>';
}else{    
echo '<table>
    <tr class="even">
    <td class="warning">CLAVEINSTI</td>
    <td class="warning">NOMINSTI</td>
    <td class="warning">CLAVECCT</td>
    <td class="warning">NOMBREESC</td>
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
}
    while ($row = $result->fetch_assoc()) {
echo'<tr class="even">
    <td class="success">'.$row['CLAVEINSTI'].'</td>
    <td class="success">'.$row['NOMINSTI'].'</td>
    <td class="success">'.$row['CLAVECCT'].'</td>
    <td class="success">'.$row['NOMBREESC'].'</td>
    <td class="success">'.$row['DOMICILIO'].'</td>
    <td class="success">'.$row['NOMBRELOC'].'</td>
    <td class="success">'.$row['NOMBREMUN'].'</td>
    <td class="success">'.$row['TELEFONO'].'</td>
    <td class="success">'.$row['FAX'].'</td>
    <td class="success">'.$row['DIRECTOR'].'</td>
    <td class="success">'.$row['CONTROL'].'</td>
    <td class="success">'.$row['TIPO'].'</td>
    <td class="success">'.$row['trim(ki9119.CORREO)'].'</td>
        <td class="success">'.$row['S2'].'</td>
    <td class="success">'.$row['PAGINA_WEB'].'</td>
  </tr>
  


</table>';
}


$sqlposgrado=$conector->query("select distinct
    ki9119b.CLAVEINSTI, ki9119b.CLAVECCT,
    ki9119b.NOMBREESC, ki9119b.NOMBRECAR
    from ki9119b where ki9119b.CLAVECCT='$DET';");
// select distinct ki9119a.CLAVEINSTI, ki9119a.CLAVECCT, ki9119a.NOMBREESC, ki9119a.NOMBRECAR from ki9119a where ki9119a.CLAVECCT='15EUT0101W';
// 
$sqlposgrado2dea=$conector->query(" select distinct ki9119a.CLAVEINSTI, ki9119a.CLAVECCT, ki9119a.NOMBREESC, ki9119a.NOMBRECAR from ki9119a where ki9119a.CLAVECCT='$DET';");

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
                                    </body>
                                </html>




<?php
die();
}
if(empty($_GET['tres']) && empty($_POST['dos']))
{
    ?>

<html>
    <head>
        <meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
        

        <script>
            $(document).ready(function(){
               // alert("soy una funcion");
$("#ciones").change(function () {
   		$("#ciones option:selected").each(function () {
                        valorador();             
			institucion = $(this).val();//alert(tres);
                        //var r='1';
                        
                        //$.post("php/Combos-dependientessubnivel.php", { dos: dos }, function(data){
//			$.post("php/instituciones/Combos-dependientessubnivel.php", { tres: tres }, function(data){
//				$("#detallle").html(data);
//			});
if(institucion=="#" || institucion==" " || institucion==""){
   // alert("Selecciona una opcion");
    //$("#detallle").html('');
    $("#detallle").html('<MARQUEE WIDTH=20% HEIGHT=40 ALIGN=BOTTOM style="color:#FF0000;">Selecciona un Carrera, para Continuar</MARQUEE>').show().fadeOut(9000);
}else{
    encriptarm2(institucion);
                        //
}                  
                        return false;
        });
        return false;
   });


});
        </script><script language="javascript" src="js/jquery-edu-scrp.js"></script>
    </head>
<?php
    //echo"si 3 y 2 estan vacios se EJECUTA 4";//die();                           //SOLO SIRVE PARA PARTICULAR
    //$id_category_party = $_POST['cuatro'];

    //Aquí cerramos la conexión
        //die();
    include '../include/conex.php';
    
$nvalor =  htmlentities($_POST['cuatro']);
$variableestable = mysqli_real_escape_string($conector,$nvalor);

//$consulta = mysqli_query($conector,"select distinct ki9119.CLAVEINSTI,ki9119.CLAVECCT,ki9119.NOMBREESC from ki9119 where ki9119.CLAVEINSTI='$nombreSeguro' ORDER BY ki9119.NOMBREESC") ;

//echo $nombreSeguro;//die();
    //echo "soy uno";
    $varDOS="PARTICULAR";
    //select distinct ki9119.CLAVEINSTI,ki9119.CLAVECCT,ki9119.NOMBREESC from ki9119 where ki9119.CLAVEINSTI='15MSU0857K';;
    $result = $conector->query("select distinct ki9119.CLAVEINSTI,ki9119.CLAVECCT,ki9119.NOMBREESC from ki9119 where ki9119.CLAVEINSTI='$variableestable' AND TIPO =  '$varDOS' ORDER BY ki9119.NOMBREESC" );
    $gonzalez=mysqli_num_rows($result);
            if($gonzalez==0){  //AQ PUEDE IR UN ERROR
die();
            }
    echo "Escuelas:<br><select id='ciones' name='ciones' class='span6' ><option value='#'>Seleccione</option>";
    while ($row = $result->fetch_assoc()) {
    echo $html = '<option value="'.$row['CLAVECCT'].'">'.$row['NOMBREESC'].'</option>';
    }
//echo $html;
echo "</select>";
    
    
die();    
}    
    
?>
      
    
      
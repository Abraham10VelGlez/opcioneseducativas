<script>
$(document).ready(function(){         
$("#valdinamic").change(function () {

$("#valdinamic option:selected").each(function () {           
var  VAL = $(this).val();
//alert(VAL);
if(VAL=="#" || VAL==" " || VAL==""){
   //alert("Selecciona una Opción Educativa");
   $("#detallle8").html('');
}else{
    encriptarm9(VAL);
                        //
}                  
                        return false;
        });
        return false;
   });

return false;
});

</script>
<?php

include '../include/conex.php';
$nvalor =  htmlentities($_POST['rexcaracter']);
$variableestable = mysqli_real_escape_string($conector,$nvalor);
if(empty($variableestable)){
    echo"<script>$('#detallle8').html('');</script>";
}else{
$sql="SELECT `CLAVEINSTI`,`CLAVECCT`,`NOMBREESC` FROM `ki9119` WHERE `NOMINSTI` LIKE '%$variableestable%' OR `NOMBREESC` LIKE '%$variableestable%' OR `CLAVEINSTI` LIKE '%$variableestable%' OR `CLAVECCT` LIKE '%$variableestable%' GROUP by NOMBREESC";
$proceso = $conector->query($sql);
echo"<select id='valdinamic' name='valdinamic' class='span6'>
<option value='#'>Seleccione</option>";

while ($row = $proceso->fetch_assoc()) {
    echo "<option value='".$row["CLAVECCT"]."'>".$row['NOMBREESC']."</option>";
}
echo "</select>";
}
?>
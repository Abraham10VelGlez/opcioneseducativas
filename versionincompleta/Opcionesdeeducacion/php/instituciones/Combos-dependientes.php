<?php
$id_category = $_GET['A'];
if($id_category==1 || $id_category==2){
if($id_category==1){
    ?>
<html>
    <head>
        <script>
            $(document).ready(function(){
               // alert("soy una funcion");
$("#tituci").change(function () {
   		$("#tituci option:selected").each(function () {
                        valorador();             
			dos = $(this).val();//alert(dos);
                        //alert(dos);
                        
                        if(dos=="#" || dos==" " || dos==""){
$("#gatt").html('');//VACIO   
}else{
    
			$.post("php/instituciones/Combos-dependientessubnivel.php", { dos: dos }, function(data){
				$("#gatt").html(data);
			});
}
                        return false;
        });
        return false;
   });
   
});
        </script>
    </head> 
    <body>    
<?php
    include '../include/conex.php';
    //echo "soy uno";
    $varuno="OFICIAL";
    $result = $conector->query("SELECT CLAVEINSTI,trim(NOMBREINS) FROM ki91110 WHERE TIPO =  '$varuno' order by NOMBREINS" );
    echo 'INSTITUCIONES OFICIALES:<br><select id="tituci" name="tituci" class="span6" ><option value="#">Seleccione</option>';
    while ($row = $result->fetch_assoc()) {
    echo $html = '<option value="'.$row['CLAVEINSTI'].'">'.$row['trim(NOMBREINS)'].'</option>';
    }
//echo $html;
echo "</select>";

?>
        <br><div id="gatt"></div>        
    </body>
</html>

        <?php
}else{
    ?>
<html>
    <head>
       
        <script>
            $(document).ready(function(){
 
$("#insp").change(function () {
   		$("#insp option:selected").each(function () {
                        valorador();             
			cuatro = $(this).val();
                       // alert(cuatro);
                                               if(cuatro=="#" || cuatro==" " || cuatro==""){
$("#gatt").html('');//VACIO   
}else{
			$.post("php/instituciones/Combos-dependientessubnivel.php", { cuatro: cuatro }, function(data){
				$("#gatt").html(data);
			});
}
                        return false;
        });
        return false;
   });


});
        </script>
    </head> 
    <body>    

        <?php
    
    include '../include/conex.php';
    //echo "soy dos";
    $varDoS="PARTICULAR";
    $result = $conector->query("SELECT CLAVEINSTI,trim(NOMBREINS) FROM ki91110 WHERE TIPO =  '$varDoS' order by NOMBREINS " );
    echo "INSTITUCIONES PARTICULARES:<br><select id='insp' name='insp' class='span6'><option value='#'>Seleccione</option>";
    while ($row = $result->fetch_assoc()) {
    echo $html = '<option value="'.$row['CLAVEINSTI'].'">'.$row['trim(NOMBREINS)'].'</option>';
    }
//echo $html;
echo "</select>";
echo '<br><div id="gatt"></div>';
}//die();
}

//die();
?>
        
    </body>
</html>
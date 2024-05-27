<!DOCTYPE html>
<html lang="es">
<head>
<script language="javascript" src="js/jquery-edu-m.js"></script>
<script language="javascript" src="js/jquery-edu-scrp.js"></script>
</head>
<body>
    
                <div class="form-row" id="modulo2">
                     <?php
                    
                     include 'include/conex.php';
                     $sqltotal=$conector->query("select count(ts.carrera) as total from (select carrera from ki9119a where carrera like '4%' group by carrera) as ts;");
                     while ($var=$sqltotal->fetch_assoc()) {
                     echo "<center><b>(Se ofrecen ".$var['total']." carreras en Técnico Superior Universitario)</b></center>";
                     }
                    ?>
                </div><br>
    <div class="row-fluid" >
        <div class="span8">
        Escuelas:
        <select id="tecnk" name="tecnk" class="span6">
                    <option value='#'>Seleccione Técnico Superior</option>
                    <?php
                    //include 'include/conex.php';// YA ESTAMOS CON ANTICIPACION HACIENDO LA CONEXION.....
                    $sql="SELECT DISTINCT ki9119a.CARRERA, trim(ki9119a.NOMBRECAR) FROM ki9119a where ki9119a.CARRERA LIKE '4%' OR ki9119a.CARRERA LIKE '9%' ORDER BY ki9119a.NOMBRECAR;";
                    $proceso = $conector->query($sql);
                    while ($row = $proceso->fetch_assoc()) {
                        echo "<option value='".$row["CARRERA"]."'>".$row['trim(ki9119a.NOMBRECAR)']."</option>";
                    }
                    ?>
                    </select>
        </div>
    </div>
                    
                
    <div id="tecsuin" class="span12"></div>
           
</body>

</html>

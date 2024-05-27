<!DOCTYPE html>
<html lang="es"> 
<head>
<script language="javascript" src="js/jquery-edu-m.js"></script>
<script language="javascript" src="js/jquery-edu-scrp.js"></script>
</head>

<body>

                <div class="form-row" id="modulo3">
                    <?php
                    
                     include 'include/conex.php';
                     $sqltotal=$conector->query(" select count(lt.carrera) as total from (select carrera from ki9119a where carrera like '5%' group by carrera) as lt;");
                     while ($var=$sqltotal->fetch_assoc()) {
                     echo "<center><b>(Se ofrecen ".$var['total']." carreras en el Nivel de Licenciatura)</b></center>";
                     }
                    ?>
                    </div><br>
    <div class="row-fluid">
        
                 Escuelas:
                  <select id="lic" name="lic" class="span6">
                    <option value='#'>Seleccione licenciatura</option>
                    <?php
                    //include 'include/conex.php';
                    $sql="SELECT distinct ki9119a.CARRERA,  ki9119a.NOMBRECAR FROM ki9119a where ki9119a.CARRERA LIKE '5%' ORDER BY ki9119a.NOMBRECAR;";
                    $proceso = $conector->query($sql);
                    while ($row = $proceso->fetch_assoc()) {
                        echo "<option value='".$row["CARRERA"]."'>".$row['NOMBRECAR']."</option>";
                    }
                    ?>
                    </select>
                    
    </div>
                   <div id="encia" class="span6"></div>


                 
</body>
</html>

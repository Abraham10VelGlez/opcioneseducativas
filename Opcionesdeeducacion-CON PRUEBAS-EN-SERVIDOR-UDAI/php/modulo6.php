<!DOCTYPE html>
<html lang="es"> 
<head>
<script language="javascript" src="js/jquery-edu-m.js"></script>
<script language="javascript" src="js/jquery-edu-scrp.js"></script>
</head>

<body>

                <div class="row-fluid" id="modulo6">
                    <center>
                    <?php
                    
                     include 'include/conex.php';
                     $sqltotal=$conector->query("select count(dco.carrera) as total from (select carrera from ki9119b where carrera like '8%' group by carrera) as dco;");
                     while ($var=$sqltotal->fetch_assoc()) {
                     echo "<b>Se ofrecen ".$var['total']." Doctorados</b>";
                     }
                    ?>
                </center>    
                </div><br>
    <div class="row-fluid">
                  Escuelas:
                  <select id="doct" name="doct" class="span6">
                    <option value='#'>Seleccione Doctorado</option>
                    <?php
//                    include 'include/conex.php';
                    $sql="SELECT distinct ki9119b.CARRERA, ki9119b.NOMBRECAR FROM ki9119b where ki9119b.CARRERA LIKE '8%' ORDER BY ki9119b.NOMBRECAR;";
                    $proceso = $conector->query($sql);
                    while ($row = $proceso->fetch_assoc()) {
                        echo "<option value='".$row["CARRERA"]."'>".$row['NOMBRECAR']."</option>";
                    }
                    ?>
                    </select>
        
    </div>
        
                    
                    <div id="doo" class="span6"></div>


                 
</body>
</html>

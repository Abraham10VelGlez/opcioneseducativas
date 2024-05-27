<!DOCTYPE html>
<html lang="es"> 
<head>
<script language="javascript" src="js/jquery-edu-m.js"></script>
<script language="javascript" src="js/jquery-edu-scrp.js"></script>
</head>

<body>

                <div class="row-fluid" id="modulo5">
                    <center>
                    <?php
                     include 'include/conex.php';
                     $sqltotal=$conector->query("select  count(maestr.carrera) as total from (select carrera from ki9119b where carrera like '7%' group by carrera) as maestr;");
                     while ($var=$sqltotal->fetch_assoc()) {
                     echo "<b>(Se ofrecen ".$var['total']." Maestrías)</b>";
                     }
                    ?>
                    </center>
                 </div><br>
    <div class="row-fluid">
        Escuelas:
        <select id="maa" name="maa" class="span6">
                    <option value='#'>Seleccione Maestría</option>
                    <?php
                    //include 'include/conex.php';
                    $sql="SELECT distinct ki9119b.CARRERA, trim(ki9119b.NOMBRECAR) FROM ki9119b where ki9119b.CARRERA LIKE '7%' ORDER BY ki9119b.NOMBRECAR ;";
                    $proceso = $conector->query($sql);
                    while ($row = $proceso->fetch_assoc()) {
                        echo "<option value='".$row["CARRERA"]."'>".$row['trim(ki9119b.NOMBRECAR)']."</option>";
                    }
                    ?>
                    </select>
                    
    </div>
                    
                    <div id="trias" class="span6"></div>


                 
</body>
</html>

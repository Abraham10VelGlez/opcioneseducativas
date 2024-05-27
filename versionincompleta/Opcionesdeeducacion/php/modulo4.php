<!DOCTYPE html>
<html lang="es"> 
<head>
<script language="javascript" src="js/jquery-edu-m.js"></script>
<script language="javascript" src="js/jquery-edu-scrp.js"></script>
</head>

<body>

                <div class="form-row" id="modulo4">
                    <?php
                    
                     include 'include/conex.php';
                     $sqltotal=$conector->query("select count(espec.carrera) as total from (select carrera from ki9119b where carrera like '6%' group by carrera) as espec;");
                     while ($var=$sqltotal->fetch_assoc()) {
                     echo "<center><b>Se ofrecen ".$var['total']." Especialidades</b></center>";
                     }
                    ?>
                    </div><br>
    <div class="form-row">
       Escuelas:
        <select id="espec" name="espec" class="span6">
                    <option value='#'>Seleccione Especilidad</option>
                    <?php
                   // include 'include/conex.php';
                    $sql="SELECT distinct ki9119b.CARRERA, trim(ki9119b.NOMBRECAR) FROM ki9119b where ki9119b.CARRERA LIKE '6%' ORDER BY ki9119b.NOMBRECAR;";
                    $proceso = $conector->query($sql);
                    while ($row = $proceso->fetch_assoc()) {
                        echo "<option value='".$row["CARRERA"]."'>".$row['trim(ki9119b.NOMBRECAR)']."</option>";
                    }
                    ?>
                    </select>
                  
    </div>
                    
                    <div id="des" class="span6"></div>


                 
</body>
</html>

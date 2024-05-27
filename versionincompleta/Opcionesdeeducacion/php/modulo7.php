<!DOCTYPE html>
<html lang="es"> 
<head>
<script language="javascript" src="js/jquery-edu-m.js"></script>
<script language="javascript" src="js/jquery-edu-scrp.js"></script>
</head>

<body>

                <div class="row-fluid" id="modulo6">
                    <?php
                    
                     include 'include/conex.php';
                     $sqltotal=$conector->query("select count(MUNICIPIO) as total from municipios;");
                     while ($var=$sqltotal->fetch_assoc()) {
                     echo "<center><b>En ".$var['total']." Municipios cuentan con Carreras</b></center>";
                     }
                    ?>
                    </div>
    <div class="form-row">
        Municipios con Escuelas:
        <select id="mun" name="mun" class="span6">
                    <option value='#'>Seleccione</option>
                    <?php
                    //include 'include/conex.php';
                    $sql="select MUNICIPIO, NOMBREMUN from municipios order by NOMBREMUN;";
                    $proceso = $conector->query($sql);
                    while ($row = $proceso->fetch_assoc()) {
                        echo "<option value='".$row["MUNICIPIO"]."'>".$row['NOMBREMUN']."</option>";
                    }
                    ?>
                    </select>
                    
    </div>
    <div id="badbb" class="span6"></div>                    
                    


                 
</body>
</html>
